<?php
session_start();
session_unset(); // Menghapus semua session
session_destroy(); // Menghancurkan session
header('Location: ../index.php'); // Redirect ke halaman login
exit();
?>
