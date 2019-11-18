
<html>
 <head>
  <title>buss pass system</title>
  <link rel="stylesheet" type="text/css" href="display.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name ="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
   <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<style>
	  span
	  {
	  position:absolute;
	  left:550px;
	  }
	  label
	  {
	   position:absolute;
	  left:620px;
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
<head>
<body>
<i><a href="main.php">Home</a><i>
<div class="container" data-aos="zoom-in"  data-aos-easing="linear">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/TamilNadu_Logo.svg/300px-TamilNadu_Logo.svg.png" class="logo">
 
    <h5 style="text-decoration:underline;">MTC Bus Pass Chennai Corporation</h5>
   <br /><br /><br /><br /><br />
   <div class="php">
<?php
 session_start();
  
 $passid = $_SESSION["id"];
 
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
    
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }

   $sql= "SELECT name,passid,passtype,regdate,fromarea,toarea,institution,address,pincode FROM regpass Where passid='$passid' ";
   $res=$conn->query($sql);
   
   while($dis = mysqli_fetch_array($res, MYSQL_ASSOC))
   {
     echo "<span>Date :</span>" ."\n". "<label>". $dis['regdate'] ."</label>";
     echo "Name    :" ."\n". $dis['name'] . "<br \>" . "<br \>";
	 echo "Id No   :" ."\n" . $dis['passid'] . "<br \>" . "<br \>";
	 echo "PassType:" ."\n" . $dis['passtype'] . "<br \>" . "<br \>";
	 echo "From    :" ."\n" . $dis['fromarea'] . "\n" . "|" . "\n";
	 echo "To      :" ."\n" . $dis['toarea'] . "<br \>" . "<br \>";
	 echo "Institution:" ."\n" . $dis['institution'] . "<br \> " . "<br \>";
	 echo "Address  :" ."\n". $dis['address'] ."\n". $dis['pincode'] ;
	 
   }
   
   $conn->close();
   ?>
 
    </div><hr width="800"/>
	<div class="img">
	<p>*Paste your photo*</p>
	</div>
	<p style="position:relative; bottom:71px; left:610px; font-size:18px;">sign</p>
	<p style="font-size:14px; position:relative; left:4px; bottom:49px; "><i>NOTE:</i></p>
	<div class="note">
	<p style="font-size:12px; position:relative; bottom:91px; "><i>
	   1.Renewal must be done before <b>10th</b> of every month
	   2.valid only on route specifeid for student pass alone
	   3.pass valid for all days including sunday
	   4.Must have a <b> print</b> of online pass
	   5.Any Id proff is mandatory for online pass
	   6.Misusing pass will be fine <b> RS100 </b>
	   7.Pass holder must<b> sign </b> on printed online pass
	</i></p> 
	
</div> 

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 2000
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
</head> 	
	
	
 
 
