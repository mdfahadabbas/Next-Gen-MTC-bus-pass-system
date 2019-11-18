<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name ="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="adminmain.css" />
<title>bus pass system</title>

</head>
<body style="background-color:#E9E9E9;">
<div id = "Wrapper">

<div class="top" >          
         <h6><b><i><strong>MTC BUSPASS ADMIN SYSTEM</strong></i></b></h6>
	       <div class="dropdown" data-aos="zoom-in"  data-aos-easing="linear">
               <button class="dropbtn" style="font-size:16px;"><i>My Profile<i></button>
                  <div class="dropdown-content">
                   <i> <a href="logout.php">Log out</a>
    			       <a href="">Edit Profile</a>
                       <a href="">Delete Account</a> </i>
                  </div>
            </div>
			<div class="dropdown1" data-aos="zoom-in"  data-aos-easing="linear">
               <button class="dropbtn1" style="font-size:17px;"><i>Help<i></button>
                  <div class="dropdown1-content">
                   <i> <a href="https://www.indiacustomercare.com/chennai-bus-stand-enquiry-numbers-1800-419-4287">Contact</a>
                       <a href="http://www.cmdachennai.gov.in/chennai_mufussil_bus_terminus(cmbt).html">About</a>
                       <a href="#">Blog</a> </i>
                  </div>
            </div>  
</div>

<div >
<marquee>Online MTC bus pass regesitration & renewal facilities was sucessfully launched by Govn of TamilNadu Chennai transport Ltd to know about more info click here <a href="http://www.cmdachennai.gov.in/chennai_mufussil_bus_terminus(cmbt).html">About</a>!!!</marquee>
         <div style="font-size:45px; position:absolute; top:250px; left:420px; font-style:italic; color:#BDC4BE; text-shadow:5px 2px 4px grey;
 font-family:Georgia, 'Times New Roman', Times, serif;">
             <p> <?php 
                  session_start();
                       echo "Welcome" ."\n". $_SESSION["uname"] ."\n". "!!!" ;
					   
               ?> </p>
			   
          </div>
</div>		  
<br /><br />

 <div class="container">
  <div class="row">
<h3>System Registration Details</h3><br />
<form method="post" action="adminsysreg.php">
<label class="sys">Signup Details</label>
<input type="submit" value="Explore" id="exp" /><br /><br />
</form>
  
 <br />
<form method="post" action="adminsysregp.php">
<label class="sys">Registration Pass Details</label>
<input type="submit" value="Explore" id="exp" /><br /><br />
</form>

<br />
<form method="post" action="adminsysrenp.php">
<label class="sys">Renewal Pass Details</label>
<input type="submit" value="Explore" id="exp" /><br />
</form>
    </div>
  <div class="row1">
<h3>Admin Registration Details</h3><br />
<form method="post" action="admindetails.php" style="position:absolute; right:65px">
    <label style="font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Employee Password </label><br /><br />
	 <input type="password" id="psw" name="ename" placeholder="*Enter Employee password*" required><br /><br /><br />
	 <input type="submit" value="Explore" id="adm" />
</form>
   </div>
</div> 

<br />
<br />
<div class="container1">
 <div class="rw">
<h3>Pass Registration Details</h3><br />
<form method="post" action="adminreg.php">
<label style="font-size:18px;">User Id</label>
<input type="text" name="uname" placeholder="***Enter User Id***" required  />
<input type="submit" value="Search" id="exp1" />
</form>

<br />

<form method="post" action="adminpassreg.php">
<label style="font-size:18px;">Pass Id</label>
<input type="text" name="id" placeholder="***Enter Pass Id***" required />
<input type="submit" value="Search" id="exp1" />
</form>
  </div>

 <div class="rw1">
<h3>Pass Renewal Details</h3><br />

<form method="post" action="adminback.php">
<label style="font-size:18px;">User Id</label>
<input type="text" name="uname" placeholder="***Enter User Id***" required />
<input type="submit" value="Search" id="exp2"/>
</form>

<br />

<form method="post" action="adminpassren.php">
<label style="font-size:18px;">Pass Id</label>
<input type="text" name="id" placeholder="***Enter Pass Id***" required  />
<input type="submit" value="Search" id="exp2"  />
</form>
  </div>
</div>

<div class="footer">
   <h5>Lets Get In Touch</h5>
   <p class="p">Welcome to MTC bus pass system please visit our website again we hope that our website is useful to you <br><span class="span">& make your work more easier.thank you !!!<span></p> 
   <form action="">
   <button onClick="sum" class="touch">Get Started</button>
   </form>
</div>  
</div>
<body>
</body>
</html>
