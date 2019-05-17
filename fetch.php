<?php
session_start();
include("db_connect.php");
// $db=new DB_connect();
// $con=$db->connect();
if($_POST['request']){
  $_SESSION['choice']=$_POST['request'];
  //Insert into the database right now
  echo 1;
}
else {
  echo 0;
}
   ?>
