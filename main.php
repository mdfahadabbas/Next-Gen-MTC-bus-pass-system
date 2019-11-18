<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name ="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/buss%20pass/maincss.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/buss%20pass/main2.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<style>
.top
{
background-color:#990033;
background-image:url("http://massmediainc.in/img/bg2.jpg");
background-repeat:no-repeat;
background-size:cover;
padding:310px;
}
marquee
{
font-size:24px;
position:absolute;
top:630px;
font-style:italic;
left:4px;
}
a
{
color:#990000;
}
a:hover
{
color:#990099;
}
 
.img1
{
background-color:#990066;
background-image:url("https://www.thehindu.com/migration_catalog/article10922317.ece/alternates/FREE_660/28TH_MTC");
background-repeat:no-repeat;
background-size:cover;
background-position:center;
padding:145px 153.8px;
position:absolute;
top:5px;
left:19px;
}
.img2
{
background-color:#990066;
background-image:url("https://www.aanavandi.com/blog/wp-content/uploads/2018/07/c3-2.jpg ");
background-position:center;
background-repeat:no-repeat;
background-size:cover;
padding:145px 153.8px;
position:absolute;
top:5px;
left:19px;
}
.img3
{
background-color:#990066;
background-image:url("http://commercialvehicle.in/wp-content/uploads/2016/10/Chennai-Broadway-Bus-Terminus-copy.jpg");
background-repeat:no-repeat;
background-position:center;
background-size:cover;
padding:145px 153px;
position:absolute;
top:5px;
left:20px;
}


.img4
{
background-image:url("http://chennaicityconnect.com/wp-content/uploads/2010/03/chennaimerorail.jpg");
background-repeat:no-repeat;
background-size:cover;
background-position:right;
background-color:#990066;
padding:145px 153px;
position:absolute;
top:5px;
left:20px;
}
.img5
{
background-color:#990066;
background-image:url("https://www.thehindu.com/news/cities/chennai/yeho3t/article24177947.ece/alternates/FREE_660/ChennaiBus");
background-repeat:no-repeat;
background-size:cover;
background-position:center;
padding:145px 153px;
position:absolute;
top:5px;
left:20px;
}
.img6
{
background-image:url("https://www.aanavandi.com/blog/wp-content/uploads/2018/07/CMBT.png");
background-color:#990066;
background-repeat:no-repeat;
background-size:cover;
background-position:center;
padding:145px 153px;
position:absolute;
top:5px;
left:20px;
}
</style>
<title>bus pass system</title>
</head>
<body style="background-color:#E9E9E9;">

<div class="top" >          
         <h6 data-aos="zoom-in"><b><i><strong>MTC BUSPASS SYSTEM</strong></i></b></h6>
	       <div class="dropdown" data-aos="zoom-in"  data-aos-easing="linear">
               <button class="dropbtn" style="font-size:16px;"><i>My Profile<i></button>
                  <div class="dropdown-content">
                   <i> <a href="logout.php">Log out</a>
    			       <a href="edit.php">Edit Profile</a>
                       <a href="delete.php">Delete Account</a> </i>
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
             <p data-aos="zoom-in"> <?php 
                  session_start();
                       echo "Welcome" ."\n". $_SESSION["uname"] ."\n". "!!!" ;
					   
               ?> </p>
			   
	 	</div>
 <div class="row" >
      <div class="container-fluid">		
        <div class="col-lg-4 col-md-6 col-xs-6" data-aos="fade-up">
               <div class="thumbnail">
                      <div class="content">
	                          <div class="img1">
							      
							 </div>
							   <div class="info"><br>
							<i><p style=" font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px;">Information about bus pass types<br><h3 style="position:absolute; left:60px; top:50px;">MTC Bus Pass</h3></p></i><br>
									<input type="submit" value="Pass Info" onClick="info()"/>
									<script type='text/javascript'>
                                         function info(){
	                                              location.href='info.html';
			                                           }
                                    </script>
							   </div>
							  
							  
							  
							  
                      </div>
	           </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6" data-aos="fade-up">
               <div class="thumbnail">
                      <div class="content1">
	                         <div class="img2">
							      
							 </div>
							 <div class="nform">
							  <i><p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px;">New bus pass registration</p></i><br>                         
							   <form method="post" action="regverify.php" autocomplete="off">
						           <label style="position:absolute; bottom:37px; font-size:16px;">Passtype</label><br> 
									 <select required name="passtype">
	                                     <option disabled selected hidden></option>
	                                     <option>Monthly pass(1000Rs pass)</option>
	                                     <option>Govn School Student pass</option>
	                                     <option>Private School Student pass</option>
	                                     <option>College Student pass</option>
	                                     <option>Press Reporter pass</option>
	                                     <option>Freedom Fighter pass</option>
	                                     <option>Physically Handicapped Pass</option>
	                                     <option>Mentally Retarted pass</option>
	                                     <option>Blind pass</option>
                                     </select>
								  <br> <input type="submit" value="Register" name="register" id="reg" onClick="fun()"/>
							   </form>
							  
							 </div>					 
                      </div>
	           </div>
        </div>
       <div class="col-lg-4 col-md-6 col-xs-6" data-aos="fade-up">
             <div class="thumbnail">
                   <div class="content2">
	                      <div class="img3">
						      
						   </div><br><br>
						   <div class="rform">
					             <i><p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px;">Bus pass renewal</p></i>                                  <br>
								 <form method="post" action="renverify.php" autocomplete="off">
						           <label style="position:absolute; bottom:37px; font-size:16px;">Pass Id</label><br>
								   <input type="text" name="idno1" id="idno1" required><br>
								   <input type="submit" value="Renewal" name="reneval" onClick="funn()" id="reg"/>
							   </form>	  
							</div>  	  
                  </div>
	         </div>
        </div>
	</div>	
</div>
   <br />
   <br />
<div class="container" >
    <div class="row1">
         
		 <div class="col-lg-4 col-md-6 col-xs-6" data-aos="fade-up">
               <div class="thumbnail">
                      <div class="cont">
	                          <div class="img4">
						      
						   </div>
						   <div class="gmap">						      
							  
							  <form method="get" autocomplete="off" action="map.php">
							  <label class="l1">From</label>
							  <input type="text" name="from" id="from" required><br>
							  <label class="l2">To<label>
							  <input type="text" name="to" id="to" required>
							  <input type="submit" name="Search" value="Search" id="search" >
							  </form>

							</div>  
							  
							  
                      </div>
	           </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6" data-aos="fade-up">
               <div class="thumbnail">
                      <div class="cont1">
	                         <div class="img5">
						      
						   </div>
						   <div class="verify">
						        <i><p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px;">Bus pass verification</p></i><br>
						      <form method="post" action="id.php" autocomplete="off">
						           <label style="position:absolute; bottom:37px; font-size:16px;">Pass Id</label><br>
								   <input type="text" name="idno" id="idno" required><br>
								   <input type="submit" name="verify" value="Verify" id="verify">
							   </form>	   
								   
							  
							</div>  
                      </div>
	           </div>
        </div>
       <div class="col-lg-4 col-md-6 col-xs-6" data-aos="fade-up">
             <div class="thumbnail">
                   <div class="cont2">
	                    <div class="img6">
						      
						   </div>
						   <div class="dmap">
						      <i><p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:20px;">Chennai Mofussil Bus Terminus<br><center><h3>3D View Map</h3><center></p></i><br \><br \>
							  <input type="submit" value="3D Map" id="dmap" onClick="dim()"/>
							  <script type='text/javascript'>
								  function dim(){
	                                location.href='https://goo.gl/maps/qoDwuayywq52.';
			                                    }
		                         </script>
							    
							</div>  
                  </div>
	         </div>
        </div>
	</div>
</div>
</div>
<div class="footer" data-aos="fade-up" data-aos-duration="2000">
   <h5>Lets Get In Touch</h5>
   <p class="p">Welcome to MTC bus pass system please visit our website again we hope that our website is useful to you <br><span class="span">& make your work more easier.thank you !!!<span></p> 
   <form action="">
   <button onClick="sum" class="touch">Get Started</button>
   </form>
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
</html>
