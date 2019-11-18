<?php
 session_start();
 
 $uname= $_SESSION["uname"];

 $name=$_POST['name'];
 $age=$_POST['age'];
 $passtype=$_POST['passtype'];
 $pasid=$_POST['idno'];
 $aadhar=$_POST['aadhar'];
 $addr=$_POST['add'];
 $pin=$_POST['pin'];
 $from=$_POST['from'];
 $to=$_POST['to'];
 $ins=$_POST['clg'];
 $msg="Idno mismatch please check";

 
 $a="Monthly pass(1000Rs pass)";
 $b="Govn School Student pass";
 $c="Private School Student pass";
 $d="College Student pass";
 $e="Press Reporter pass";
 $f="Freedom Fighter pass";
 $g="Physically Handicapped Pass";
 $h="Mentally Retarted pass";
 $i="Blind pass";
 
 
 if($passtype == $a)
 {
  $price = "1000";
 }
 elseif($passtype == $b)
 {
  $price = "0";
 }
 elseif($passtype == $c)
 {
  $price = "100";
 } 
 
 elseif($passtype == $d)
 {
  $price = "200";
 }
 elseif($passtype == $e)
 {
  $price = "0";
 }
 elseif($passtype == $f)
 {
  $price = "0";
 }
 elseif($passtype == $g)
 {
  $price = "0";
 }
 elseif($passtype == $h)
 {
  $price = "0";
 }
 elseif($passtype == $i)
 {
  $price = "0";
 }
 else
 {
  exit();
 }



 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
     
	 
	 
	 $date = date('d');
	 $month = date('m');
     $year = date('y');
	 
     $dat=$date. "|" .$month."|".$year;
 
  $sq ="SELECT * FROM regpass WHERE passid = '$pasid'";
  $res = $conn->query($sq);
  $p = mysqli_num_rows($res);
  
if($p == TRUE)
 {
       $_SESSION["id"]=$pasid;
       $_SESSION["name"]=$name;
	   $_SESSION["age"]=$age;
	   $_SESSION["passtype"]=$passtype;
	   $_SESSION["from"]=$from;
	   $_SESSION["to"]=$to;
	   $_SESSION["date"]=$dat;
	   $_SESSION["ins"]=$ins;
	   $_SESSION["aadhar"]=$aadhar;
	   $_SESSION["addr"]=$addr;
	   $_SESSION["pin"]=$pin;
	   $_SESSION["price"]=$price;
	   $_SESSION["uname"]=$uname;
      header("location:http://localhost/buss%20pass/payment1.php");
	  exit();
   }
  else
  {
    echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/renpass.php';
			   alert('$msg');
		 </script>";
  } 
   
  
  $conn->close();
  
 ?> 