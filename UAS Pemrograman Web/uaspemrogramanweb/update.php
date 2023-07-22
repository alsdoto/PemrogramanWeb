<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'dbuaspemweb');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$periode = $_POST['periode'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];

// Ambil data foto lama dari database
$old_foto = mysqli_fetch_assoc(mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE NIM='$nim'"))['foto'];

// Cek apakah ada file foto baru yang diunggah
if ($_FILES['foto']['name'] !== '') {
    $name = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    // Pindahkan foto baru ke folder foto
    move_uploaded_file($tmp_name, "foto/" . time() . '_' . $name);
    $nama_foto = time() . '_' . $name;

    // Perbarui data foto di database
    $update = mysqli_query($conn, "UPDATE mahasiswa
                                  SET nama='$nama',
                                      periode='$periode',
                                      kelas='$kelas',
                                      prodi='$prodi',
                                      foto='$nama_foto'
                                  WHERE NIM='$nim'");
    // Hapus foto lama dari server jika foto baru berhasil diunggah
    if ($old_foto !== 'default_foto.jpg') {
        unlink("foto/$old_foto");
    }
} else {
    // Jika tidak ada file foto baru yang diunggah, perbarui data tanpa mengubah foto
    $update = mysqli_query($conn, "UPDATE mahasiswa
                                  SET nama='$nama',
                                      periode='$periode',
                                      kelas='$kelas',
                                      prodi='$prodi'
                                  WHERE NIM='$nim'");
}

if ($update) {
    $_SESSION['message'] = 'Data Mahasiswa Berhasil Diedit.';
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>