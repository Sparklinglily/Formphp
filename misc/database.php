<?php

$host= 'localhost';
$user= 'root';
$pass= '';
$db_name= 'test';

$conn= mysqli_connect($host, $user, $pass, $db_name);

if(!$conn) {
  echo 'connection not established';
}

?>