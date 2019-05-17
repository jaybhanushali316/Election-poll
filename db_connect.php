<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "testdb";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;


function CloseCon($conn)
 {
 $conn -> close();
 }

?>
