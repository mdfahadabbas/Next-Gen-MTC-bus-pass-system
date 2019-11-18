<?php
 session_start();
 $pasid=$_POST['idno1'];
 $msg="Idno mismatch please check";
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }

  $sq ="SELECT * FROM regpass WHERE passid = '$pasid'";
  $res = $conn->query($sq);
  $p = mysqli_num_rows($res);
  
  if($p == TRUE)
   {
     $_SESSION["id"]= $pasid;
     header("location: http://localhost/buss%20pass/renmain.php");
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