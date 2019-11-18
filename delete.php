<?php
 session_start();
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 $ms="Your acoount is sucessfully deleted";
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
$name=$_SESSION['uname']; 

 $sql="DELETE FROM registration WHERE uname='$name'";

 if( $conn->query($sql) === TRUE)
 {
	echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/form1.html';
			   alert('$ms');
		 </script>";
 }
 else 
     echo "fail";

$conn->close();

?>