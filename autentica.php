<?php

include_once("database.php");

//echo "<h1> opa </h1>";

$user = $_POST['user'];
$password = $_POST['password'];

$passcript = md5($password);

date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y');

//echo "$user - $password - $passcript - $data";


$db = new Database;
$result = $db->connect("select * from user where login = '$user' and senha = '$passcript';");

if (mysqli_num_rows($result) > 0) {

  session_start();
  session_name("user");
  $_SESSION['user'] = $user;
  $_SESSION['password'] = $passcript;

  //echo "usuário existe";
  header("Location: http://localhost:8000");
  exit;
} else {
  //echo "<script>alert('Senha ou login inválido!');location.href=\"login.php\";</script>";
  header("Location: http://localhost:8000/login.php?status=1");
  exit;
}
