<?php
session_start();

$list_users = [
    [
        'email' => 'alma@gmail.com',
        'password' => '1234'
    ]
];

$not_found = true; // Set nilai awal $not_found menjadi true
foreach ($list_users as $user) {
    if ($user['email'] === $_REQUEST['email'] && $user['password'] === $_REQUEST['password']) {
        if (isset($_REQUEST['remember'])) {
            setcookie('login', 'true', time() + 3600); // Cookie akan berakhir dalam 1 jam (3600 detik)
            setcookie('key', $_REQUEST['email'], time() + 3600);
        }

        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['login'] = true; // Set nilai $_SESSION['login'] menjadi true
        $not_found = false; // Set nilai $not_found menjadi false karena login berhasil
        header("Location: index.php");
        exit;
    }
}

if ($not_found) {
    $_SESSION['error'] = 'Email atau password salah'; // Ubah pesan error jika login gagal
}

header("Location: login.php");
exit;
?>
