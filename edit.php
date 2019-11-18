<?php
session_start();
$uname=$_SESSION["uname"];

$sname="localhost";
$dbuname="root";
$dbpsw="";
$dbname="bus";

$conn=new mysqli($sname, $dbuname, $dbpsw, $dbname);

if($conn->connect_error)
{
  die("connection failed" . $conn->connect_error);
}

  $sql ="SELECT * FROM registration WHERE uname = '$uname'";
  $res = $conn->query($sql);
  $p = mysqli_num_rows($res);
  if($p == TRUE)
   {
     
  $sql= "SELECT uname,psw,repsw,fname,lname,dob,age,gender,address,place,district,email,mob FROM registration WHERE uname = '$uname'";
  $ress=$conn->query($sql);
   
   while($dis = mysqli_fetch_array($ress, MYSQL_ASSOC))
   {
      $uname=$dis['uname'];
	  $psw=$dis['psw'];
	  $repsw=$dis['repsw'];
	  $fname=$dis['fname'];
	  $lname=$dis['lname'];
	  $dob=$dis['dob'];
	  $age=$dis['age'];
	  $gender=$dis['gender'];
	  $address=$dis['address'];
	  $place=$dis['place'];
	  $district=$dis['district'];
	  $email=$dis['email'];	
	  $mob=$dis['mob'];	 
   }
   }
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="regcss.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<title>bus pass system</title>
</head>
<body>

<div class="content" data-aos="zoom-in" >
    <img src="https://img.freepik.com/free-vector/bus-logo-abstract_7315-17.jpg?size=338&ext=jpg"  class="bus"/>
   <center><h2>MTC BUS PASS REGISTRATION FORM</h2>
   </center>
    <hr />
    <br />
   <form method="post" action="editback.php" autocomplete="off">
         <label>UserId </label>
	         <input type="text" id="name" name="uname" value="<?php echo $uname; ?>" readonly style="color:#828282;"><br><br><br />
	     <label>Password</label>
		     <input type="password" id="psw" name="psw" placeholder="***Enter Password***" value="<?php echo $psw; ?>" required><br /><br /><br />
	     <label>Re-enter Password</label>
		     <input type="password" id="psw" name="psw2" placeholder="**Re-enter Password**" value="<?php echo $repsw; ?>" required><br /><br /><br />		 
         <label>First name</label>
	         <input type="text" id="fname" name="fname" placeholder="**Enter Firstname**" value="<?php echo $fname; ?>" required><br><br><br />
	     <label>Last Name</label>
		     <input type="text" id="lname" name="lname" placeholder="**Enter Lastname**" value="<?php echo $lname; ?>" required><br><br><br />
		 <label>Date Of Birth</label>
		     <input type="date" name="dob" placeholder="dd/mm/yyyy" / value="<?php echo $dob; ?>" required><br><br /><br />	
		 <label>Age</label>
		      <input type="number" name="age" placeholder="*Enter Age eg:23*" value="<?php echo $age; ?>" required min="6" max="120" /><br /><br /><br /> 	 
		 <label>Gender:</label><br />
		     <label style="left:550px; position:absolute;">Male</label> 
		      <input type="radio" value="Male" name="gender" value="<?php echo $gender; ?>" required><br /><br />
			  <label style="left:550px; position:absolute;" >Female</label>
			  <input type="radio" value="Female" name="gender" value="<?php echo $gender; ?>" required /><br /><br /><br />
		  <label>Door no/Street no</label>
		           <input type="text" id="addr" name="address" placeholder="* B/1,28th street*" value="<?php echo $address; ?>" required><br><br><br />
		   <label>Place</label>
		            <input type="text" id="place" name="place" placeholder="*Anna Nagar*" value="<?php echo $place; ?>" required><br><br><br />
			<label>District</label>
			         <select class="option" name="dis"required >
                                   <option><?php echo $district; ?></option>
	                               <option >Chennai</option>
	                               <option >Thiruvallur</option>
	                               <option >Kancheepuram</option>
                     </select>			   <br /><br /><br /><br />
		  <label>Email ID</label>
		        <input type="text" id="email" name="email" placeholder="*abc@gmail.com*" value="<?php echo $email; ?>"><br /><br /><br />
		  <label>Mobile no</label>
		        <input type="number" name="mob" placeholder="9999999999" required min="0" max="9999999999" value="<?php echo $mob; ?>"/><br /><br /><br />
		
		   <label style="font-size:13px; position:absolute; right:20px;">I agree that i accepted our <a href="">Terms&Condition </a></label>
		     <input type="checkbox" value="ch" required><br /><br />
		  <input type="submit" align="left" value="Update">
		  <br />
		  

    </form>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>

		<script>
			hljs.initHighlightingOnLoad();

			$('.hero__scroll').on('click', function(e) {
				$('html, body').animate({
					scrollTop: $(window).height()
				}, 1200);
			});
		</script>
</div>
</body>
</html>


