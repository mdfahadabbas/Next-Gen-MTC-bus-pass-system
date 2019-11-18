<?php
 session_start();
 $passtype=$_POST['passtype'];
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
if($passtype == $passtype)
 {
  $_SESSION["passtype"]=$passtype;
  header("location: http://localhost/buss%20pass/regmain.php ");
  exit(); 
 }  
 
?>