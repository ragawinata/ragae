<?php
session_start();
session_unset(); // menghapus semua variabel sesi
session_destroy(); // menghapus sesi

header("Location: index.php"); // arahkan kembali ke halaman login atau halaman lainnya
exit();
?>
