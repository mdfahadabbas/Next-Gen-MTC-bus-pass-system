<?php
 session_start();
 $_SESSION["last_time"] = time();
 $uname= $_SESSION["uname"];
 
 $name=$_POST['name'];
 $age=$_POST['age'];
 $passty=$_POST['passtype'];
 $from=$_POST['from'];
 $to=$_POST['to'];
 $ins=$_POST['clg'];
 $aadhar=$_POST['aadhar'];
 $address=$_POST['add'];
 $pin=$_POST['pin'];
 $msg="check registration";

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
 $a="Monthly pass(1000Rs pass)";
 $b="Govn School Student pass";
 $c="Private School Student pass";
 $d="College Student pass";
 $e="Press Reporter pass";
 $f="Freedom Fighter pass";
 $g="Physically Handicapped Pass";
 $h="Mentally Retarted pass";
 $i="Blind pass";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
 
   if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 
 if($passty == $a)
 {
  $price = "1000";
 }
 elseif($passty == $b)
 {
  $price = "0";
 }
 elseif($passty == $c)
 {
  $price = "100";
 } 
 
 elseif($passty == $d)
 {
  $price = "200";
 }
 elseif($passty == $e)
 {
  $price = "0";
 }
 elseif($passty == $f)
 {
  $price = "0";
 }
 elseif($passty == $g)
 {
  $price = "0";
 }
 elseif($passty == $h)
 {
  $price = "0";
 }
 elseif($passty == $i)
 {
  $price = "0";
 }
 else
 {
  exit();
 }
 
 $f = substr($name,0,2);
 $year = date('y');
 $month = date('m');
 $date = date('d');
 
 $sq="SELECT * FROM regpass";
 $res=$conn->query($sq);
 $count=mysqli_num_rows($res);
 $co= str_pad($count,4,'0',STR_PAD_LEFT);
 
 $id=$f.$date.$month.$year.$co ; 
 $dat=$date."|".$month."|".$year;
 
 if($id == $id)
   {   
       $_SESSION["name"]=$name;
       $_SESSION["id"]=$id;
	   $_SESSION["age"]=$age;
	   $_SESSION["passtype"]=$passty;
	   $_SESSION["date"]=$dat;
	   $_SESSION["from"]=$from;
	   $_SESSION["to"]=$to;
	   $_SESSION["ins"]=$ins;
	   $_SESSION["aadhar"]=$aadhar;
	   $_SESSION["addr"]=$address;
	   $_SESSION["pin"]=$pin;
	   $_SESSION["price"]=$price;
	   $_SESSION["uname"]=$uname;
      header("location:http://localhost/buss%20pass/payment.php");
	  exit();
   }
  else
  {
    echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/regpass.php';
			   alert('$msg');
		 </script>";
  } 
  
  $conn->close();
  
 ?> 