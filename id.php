<?php
 session_start();
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 $_SESSION["last_time"] = time();
 
 $passid = $_POST['idno'];
 $msg = "Idno mismatch please check";
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
  
   $sq ="SELECT * FROM regpass WHERE passid = '$passid' ";
    $re = $conn->query($sq);
     $q = mysqli_num_rows($re); 
  
  $sql ="SELECT * FROM renpass WHERE passid = '$passid' ";
  $res = $conn->query($sql);
  $p = mysqli_num_rows($res);
   
   if($p == TRUE)
   {
     $_SESSION["id"]=$passid;
	 header("location: http://localhost/buss%20pass/display.php");
	 exit();
   }
   elseif($q == True)
   {
      
	  $_SESSION["id"]=$passid;
	  header("location: http://localhost/buss%20pass/displayreg.php");
	  exit();
   }
   else
   {
      echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/main.php';
			   alert('$msg');
		      </script>"; 
   } 

  $conn->close();
  
 ?>