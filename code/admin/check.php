<?php
if (!isset($_COOKIE['username'])) {
    header("Location: ../admin/login.php"); 
}
if (!isset($_COOKIE['password'])) {
    header("Location: ../admin/login.php"); 
}
?>