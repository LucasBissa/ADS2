<?php

class Database
{

  function connect($query)
  {
    $_host = 'localhost';
    $_user = 'root';
    $_password = '';
    $_database = 'finances';

    $conn = mysqli_connect($_host, $_user, $_password);
    $data = mysqli_select_db($conn, $_database);
    mysqli_set_charset($conn,'utf-8');

    $result = mysqli_query($conn, $query);

    return $result;
    exit;
  }
}
