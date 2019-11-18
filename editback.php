<?php

$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$addr=$_POST['address'];
$place=$_POST['place'];
$dis=$_POST['dis'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$msg="sucessfully updated";
$err="error";
$sname="localhost";
$dbuname="root";
$dbpsw="";
$dbname="bus";
$m="Password & Re-enter password is not same so re-enter both field";

$conn=new mysqli($sname, $dbuname, $dbpsw, $dbname);

if($conn->connect_error)
{
  die("connection failed" . $conn->connect_error);
}
if($psw === $psw2)
  {
$sql="UPDATE `registration` SET `psw`='".$psw."',`repsw`='".$psw2."',`fname`='".$fname."',`lname`='".$lname."',`dob`='".$dob."',`age`='".$age."',`gender`='".$gender."',`address`='".$addr."',`place`='".$place."',`district`='".$dis."',`email`='".$email."',`mob`='".$mob."' WHERE uname='$uname'";

   if($conn->query($sql) === TRUE )
    {
	 echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/main.php';
			   alert('$msg');
		      </script>";
	
	}
   else
   {
      echo "not updated";
   }
   }
else
 {
    echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/edit.php';
			   alert('$m');
		      </script>"; 
 }
 
$conn->close();
?> 