<?php
session_start();

if(!isset($_SESSION['user'])){
session_destroy();
unset($_SESSION['user']);
header("Location: http://localhost:8000/login.php");
}

?>