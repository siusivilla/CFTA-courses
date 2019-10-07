<?php 
session_start();

session_unset();
session_destroy();

//rimando all'area riservata
header('location:../index.php');
?>