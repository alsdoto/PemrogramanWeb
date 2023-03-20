<?php

$namalengkap = "Alma Sulaiman";
$jeniskelamin = "Pria";
$umur = "Masih muda";
$menikah = "Baru satu kali";
$nilai1 = 100;

if ($nilai1 <= 35 && $nilai1 >= 85) {
    $huruf = "E";
    $status = "Gagal";
} else if ($nilai1 >= 40 && $nilai1 <= 49) {
    $huruf = "D";
    $status = "Kurang";
} else if ($nilai1 >= 50 && $nilai1 <= 59) {
    $huruf = "CD";
    $status = "Kurang dari cukup";
} else if ($nilai1 >= 60 && $nilai1 <= 69) {
    $huruf = "C";
    $status = "Cukup";
} else if ($nilai1 >= 70 && $nilai1 <= 74) {
    $huruf = "BC";
    $status = "Lebih dari cukup";
} else if ($nilai1 >= 75 && $nilai1 <= 79) {
    $huruf = "B";
    $status = "Baik";
} else if ($nilai1 >= 80 && $nilai1 <= 84) {
    $huruf = "AB";
    $status = "Lebih dari baik";
} else if ($nilai1 >= 85 && $nilai1 <= 100) {
    $huruf = "A";
    $status = "Istimewa";
}
else{
    $huruf = "Nilai tidak terdefinisi";
    $status = '';
}
?>

<br>
<br>

<html>
    <head></head>
    <body>
        <table border="1" padding="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?php echo $namalengkap; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $jeniskelamin; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Umur
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $umur; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Status Pernikahan
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $menikah ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nilai
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $nilai1; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Huruf
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $huruf; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Keterangan
                </td>
                <td>
                    :
                </td>
                <td>
                    <?= $status;?>
                </td>
            </tr>
        </table>
    </body>
</html>
