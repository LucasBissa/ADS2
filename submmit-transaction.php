<?php
include_once('database.php');

$message = '';
$type = 'success';

$empty = false;
foreach ($_POST as $key => $value) {
  if (empty($_POST[$key])) {
    $empty = true;
  }
}

session_start();
if($empty) {
  $message = "todos os campos precisam ser preenchidos";
  $type = "danger";
  $_SESSION['flash'] = '<div class="alert alert-'.$type. '" >'. $message . '</div>';
  header("Location: http://localhost:8000/create.php");
} else {
  $fields = $_POST;
  date_default_timezone_set('Brazil/East');
  $date = date('Y-m-d');
  $sql = "insert into finances.transaction";
  $sql .= "(". implode(',', array_keys($fields)) .",transaction_date)";
  $sql .= " values(";
  $sql .= join(",",array_map(function($elem) { return "'$elem'";}, array_values($fields)));
  $sql .= ",'$date')";
  
  $obj = new Database;
  $resultado = $obj->connect($sql);
  var_dump($resultado);
  $message = 'cadastrado com sucesso';
  $_SESSION['flash'] = '<div class="alert alert-'.$type. '" >'. $message . '</div>';
  header("Location: http://localhost:8000/create.php");
}

