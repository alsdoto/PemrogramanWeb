<?php
// Mulai sesi
session_start();

// Data pengguna
$validEmail = 'alsdoto@gmail.com';
$validPassword = 'masihbelajar';

// Login
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Pengguna sudah login
    header('Location: AlmaSulaiman_D112111015_UTSPemrogramanWeb_index.php');
    exit;
}

// // Logout
// if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
//     // Hapus session dan di arahkan ke halaman login
//     session_unset();
//     session_destroy();
//     header('Location: AlmaSulaiman_D112111015_UTSPemrogramanWeb_login.php');
//     exit;
// }

// Cek apakah form login telah diklik
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek email dan password
    if ($email === $validEmail && $password === $validPassword) {
        // Jika login berhasil, diarahkan ke halaman index
        $_SESSION['loggedIn'] = true;
        header('Location: AlmaSulaiman_D112111015_UTSPemrogramanWeb_index.php');
        exit;
        // Jika gagal, maka akan muncul notifikasi
    } elseif ($email !== $validEmail) {
        // Email tidak ditemukan
        $error = 'Email tidak ditemukan.';
    } else {
        // Password salah
        $error = 'Password salah.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <!-- link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3>Silahkan Login Untuk Ke Halaman Index</h3>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
