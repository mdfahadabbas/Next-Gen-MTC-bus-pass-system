<?php
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['psw2'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$work=$_POST['work'];
$gender=$_POST['gender'];
$addr=$_POST['address'];
$dis=$_POST['dis'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$place=$_POST['place'];

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

 $ms="Your username is already exists please change";
 $m="Password & Re-enter password is not same so re-enter both field";
 $chk="SELECT * FROM adminreg WHERE uname='$uname'";
 $res=$conn->query($chk);
 if(mysqli_num_rows($res) > 0)
{
     echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/adminformreg.html';
			   alert('$ms');
		      </script>"; 
}  
else
{ 
 
 if($psw === $psw2)
  {
    $sql="INSERT INTO adminreg(uname,psw,repsw,name,work,dob,gender,address,place,district,email,mob)
	VALUES ('$uname','$psw','$psw2','$name','$work','$dob','$gender','$addr','$place','$dis','$email','$mob')";
	
    if($conn->query($sql) === TRUE) 
     {
       echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/adminform.html';
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
	           location.href='http://localhost/buss%20pass/adminformreg.html';
			   alert('$m');
		      </script>"; 
  }
} 
  $conn->close();
 
?>