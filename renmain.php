<?php
 session_start();
 $passid=$_SESSION["id"];

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
 
 
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }

  $sq ="SELECT * FROM regpass WHERE passid = '$passid'";
  $res = $conn->query($sq);
  $p = mysqli_num_rows($res);
  if($p == TRUE)
   {
     
   $sql= "SELECT name,age,passid,passtype,regdate,fromarea,toarea,institution,aadhar,address,pincode FROM regpass Where passid='$passid' ";
   $ress=$conn->query($sql);
   
   while($dis = mysqli_fetch_array($ress, MYSQL_ASSOC))
   {
     $name=$dis['name'];
	 $age=$dis['age'];
	 $passtype=$dis['passtype'];
	 $from=$dis['fromarea'];
	 $to=$dis['toarea'] ;
	 $ins=$dis['institution'];
	 $aadar=$dis['aadhar'];
	 $addr=$dis['address'];
	 $pin=$dis['pincode'];
   }
	 
   }
  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>bus pass system</title>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<style>
body
{
background-color:#8DF1EC;
}
.reg
{
position:absolute;
border-radius:18px;
top:60px;
left:470px;
width:350px;
height:530px;
padding:3px;  
border: 1px ridge;
margin: 0;
background: linear-gradient(to bottom, orange 0%, #FFCC00 100%);
}
.reg:hover
{
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

label
{
font-family:Georgia, "Times New Roman", Times, serif;
font-style:oblique;
color:#666666;
font-size:18px;
}
input[type=submit]
{
position:absolute;
left:130px;
border-radius:12px;
padding:10px 24px;
cursor:pointer;
border:#666666;
color:#990099;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
}
input[type=submit]:hover{
background-color:#FF0000;
color:black;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text],input[type=number]
{
font-size:17px;
font-style:italic;
position:absolute;
right:8px;
border-radius:8px;
padding-right:46px;
}
select
{
font-size:17px;
font-style:italic;
position:absolute;
right:8px;
border-radius:8px;
padding-right:3px;
}
#age
{
font-size:17px;
font-style:italic;
position:absolute;
right:8px;
border-radius:8px;
padding-left:135px;
}
#pin
{
font-size:17px;
font-style:italic;
position:absolute;
right:8px;
border-radius:8px;
padding-left:107px
}
input[type=text]:hover,input[type=number]:hover,select:hover
{
 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
 }
 .bus{
width:90px;
height:90px;
border-radius:48%;
position:absolute;
right:37%;
top:-55px;
}
a:hover
{
color:#990099;
}
a
{
color:#0000FF;
font-size:18px;
 }
</style>
</head>
<body>
<i><a href="main.php">Home</a><i>
<div class="reg" data-aos="zoom-in">
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp9RTXsKiP5RXM2RRvDmNk5FYm7ULpqNZ7" class="bus">
<br>
<center><i><p style="font-size:24px; font-family:Georgia, 'Times New Roman', Times, serif;">Pass Renewal Form</p></i></center>
<form method="post" action="renpass.php" autocomplete="off">
    <label>Name</label>
	<input type="text" name="name" value="<?php echo $name; ?>"  required><br><br>
	<label>Pass Idno*</label>
	<input type="text" name="idno" value="<?php echo $passid; ?>" readonly style="color:#828282;" /><br /><br />
	<label>Age</label>
	<input type="number" name="age" value="<?php echo $age; ?>"   id="age"required min="5" max="120"><br><br>
	<label>PassType*</label> 
	<input type="text" name="passtype" value="<?php echo $passtype; ?>" readonly style="color:#828282;">
	<br><br>
	<label>From</label>
	<input type="text" name="from" value="<?php echo $from; ?>"   placeholder="*Only for STUDENT pass*"><br><br>
	<label>To</label>
	<input type="text" name="to" value="<?php echo $to; ?>"   placeholder="*Only for STUDENT pass*"><br><br>
	<label>Institution*</label>
	<input type="text" name="clg" value="<?php echo $ins; ?>"  readonly  placeholder="*Only for STUDENT pass*" style="color:#828282;"><br><br>
	<label>Aadhar no*<label>
	<input type="number" name="aadhar" value="<?php echo $aadar; ?>" readonly min="100000000000" style="color:#828282;"><br><br>
	<label>Address</label>
	<input type="text" name="add" value="<?php echo $addr; ?>"    required><br><br>
	<label>Pincode</label>
	<input type="number" value="<?php echo $pin; ?>"   name="pin" min="600000" max="700000" id="pin"><br><br>
	<input type="submit" name="submit"  value="Submit">
</form>	
    <p style="font-size:13px; position:absolute; top:65px; left:210px;">* values can't be change</p>
</div>
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
</body>
</html>
