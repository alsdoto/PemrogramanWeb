<?php
session_start();

// Hapus semua data session
session_unset();
// Hapus cookie PHPSESSID yang terkait dengan session
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
// Hapus session dari server
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: login.php");
exit();
?>
