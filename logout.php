<?php
<link rel="stylesheet" href="assets/css/style.css">
session_start();
session_destroy();
header("Location: login.php");
?>