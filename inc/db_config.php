<?php 

$servername="localhost:8889";
$username="root";
$password="root";
$dbname="killerpro";

$conn = new mysqli($servername,$username, $password,$dbname);

if ($conn->connect_error) {
  die("Connessione fallita".$conn->connect_error);
}
//else echo "connesso"; 
?>