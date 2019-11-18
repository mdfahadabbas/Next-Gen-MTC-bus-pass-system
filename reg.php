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
$msg="sucessfully registered";
$err="error";
$sname="localhost";
$dbuname="root";
$dbpsw="";
$dbname="bus";

$conn=new mysqli($sname, $dbuname, $dbpsw, $dbname);

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
  if(empty($psw2))
 {
   echo "enter password";
   die();
 }
  if(empty($fname))
 {
   echo "enter firstname";
   die();
 }
  if(empty($lname))
 {
   echo "enter lastname";
   die();
 }
  if(empty($dob))
 {
   echo "enter DateOfBirth";
   die();
 }
  if(empty($age))
 {
   echo "enter age";
   die();
 }
 if(empty($gender))
 {
   echo "enter gender";
   die();
 }
  if(empty($addr))
 {
   echo "enter addr";
   die();
 }
  if(empty($place))
 {
   echo "enter place";
   die();
 }
  if(empty($dis))
 {
   echo "enter district";
   die();
 }
  if(empty($email))
 {
   echo "enter email";
   die();
 }
  if(empty($mob))
 {
   echo "enter mobile";
   die();
 }
 $ms="Your username is already exists please change";
 $m="Password & Re-enter password is not same so re-enter both field";
 $chk="SELECT * FROM registration WHERE uname='$uname'";
 $res=$conn->query($chk);
 if(mysqli_num_rows($res) > 0)
{
     echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/reg.html';
			   alert('$ms');
		      </script>"; 
}  
else
{ 
 
 if($psw === $psw2)
  {
    $sql="INSERT INTO registration(uname,psw,repsw,fname,lname,dob,age,gender,address,place,district,email,mob)
	VALUES ('$uname','$psw','$psw2','$fname','$lname','$dob','$age','$gender','$addr','$place','$dis','$email','$mob')";
	
    if($conn->query($sql) === TRUE) 
     {
       echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/form1.html';
			   alert('$msg');
		      </script>";
   	 
     } 
     else
     {
     echo"check registration". $sql ."<br>". $conn->error;
     } 
  }
  else
  {
   echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/reg.html';
			   alert('$m');
		      </script>"; 
  }
} 
  $conn->close();
 
?>