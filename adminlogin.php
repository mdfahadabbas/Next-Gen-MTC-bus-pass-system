<?php
session_start();
 $uname=$_POST['name'];
 $psw=$_POST['psw'];
 
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 if(empty($uname))
 {
    echo "enter username";
	die(); 
 }
 if(empty($psw))
 {
   echo "enter password";
   die();
 }
 $ms="Username nd Password mismatch";
 
  $sql ="SELECT * FROM adminreg WHERE uname = '$uname' && psw = '$psw'";
  $res = $conn->query($sql);
  $p = mysqli_num_rows($res);
    if ($p==TRUE)
	  {
	    $_SESSION["uname"]=$uname;
	    header("location: http://localhost/buss%20pass/Adminmain.php");
		exit();
	  }
	 else
	 {
	    echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/adminform.html';
			   alert('$ms');
		 </script>";
	 } 
	
   $conn->close();
 ?>