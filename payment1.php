<?php
session_start();
     $pasid = $_SESSION["id"];
     $name = $_SESSION["name"];
	 $age = $_SESSION["age"];
	 $passtype = $_SESSION["passtype"];
	 $from = $_SESSION["from"];
	 $to = $_SESSION["to"];
	 $date=$_SESSION["date"];
	 $ins = $_SESSION["ins"];
	 $aadhar = $_SESSION["aadhar"];
	 $addr = $_SESSION["addr"];
	 $pin = $_SESSION["pin"];
	 $price = $_SESSION["price"];
	 $uname= $_SESSION["uname"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<title>bus pass system</title>
<style>
body
{
background-image:url("https://www.webhostingplanguide.com/wp-content/uploads/2013/06/Visa-1024x640.jpg");
background-repeat:no-repeat;
background-size:cover;
}
label
{text-align:20px;
color:#666666;
font-size:20px;
font-family:Georgia, "Times New Roman", Times, serif;
text-shadow:#999999;
font-style:oblique;

}
.content
{
 position:absolute;
top:60px;
left:480px;
width:350px;
height:530px;
padding:3px;  
border: 1px ridge;
border-radius:18px;
margin: 0;
background-color:#F6F6F6;
}
.cvv
{
font-size:17px;
font-style:italic;
position:absolute;
right:8px;
border-radius:8px;
padding-right:24px;
}
.credit
{
font-size:17px;
font-style:italic;
position:absolute;
right:8px;
border-radius:8px;
padding-right:74px;
}
input[type=date]
{
font-size:17px;
font-style:italic;
position:absolute;
right:114px;
border-radius:8px;
padding-right:4px;
width:173px;
}
input[type=text]
{
font-size:18px;
font-style:italic;
position:absolute;
right:54px;
border-radius:12px;
padding-right:30px;
width:173px;
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
background-color:#FF6060;
color:black;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=date]:hover,input[type=number]:hover
 {
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
} 
.bank
{
left:500px;
font-size:18px;

}
.radio{
   position:absolute;
   left:90px;
   width:100px;
   padding:12px 20px;

}
p
{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
}
.dollar
{
width:90px;
height:90px;
border-radius:48%;
position:absolute;
right:37%;
top:-60px;
}
</style>
</head>
<body>
<div class="content" data-aos="zoom-in">
<img src="https://previews.123rf.com/images/niceclicks/niceclicks1612/niceclicks161200062/69659438-indian-rupee-symbol.jpg" class="dollar">
<center><i><h3 style="font-size:24px; font-family:Georgia, 'Times New Roman', Times, serif;">Payment</h3></i></center>
<form method="get" autocomplete="off">
<label>Pass Fare</label>
<input type="text" name="fare" value="<?php echo "Rs" . $price; ?>" readonly><br><br>
<label>Credit/Debit card</label><br>
<p>Card no</p><input type="number" class="credit"><br><br>
<p>Exp Date</p><input type="date" class="date">
<input type="number" placeholder="CVV" class="cvv" min="100" max="999"><br><br><br>
<label class="bank">Netbankimg</label>
<input type="radio" name="pay" class="radio" required><br><br>
<label class="bank">Paytm</label>
<input type="radio" name="pay" class="radio" required><br><br>
<label class="bank">Freecharge</label>
<input type="radio" name="pay" class="radio" required><br><br>
<label class="bank" class="radio">PhonePe</label>
<input type="radio" name="pay" class="radio" required><br><br>
<input type="submit" value="Pay" name="submit">
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
    <?php
	
	 $ms="Renwal Payment sucessfull Generating Online Buss Pass" ;
	 
	 $sname="localhost";
     $dbuname="root";
     $dbpsw="";
     $db="bus";
 
    $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
    {
   die("connection failed" . $conn->connect_error);
    }
	if(isset($_REQUEST["submit"]))
   {  
     
	    $sql="INSERT INTO renpass(name,age,passid,passtype,rendate,fromarea,toarea,institution,aadhar,address,pincode,uname) VALUES('$name','$age','$pasid','$passtype','$date','$from','$to','$ins','$aadhar','$addr','$pin','$uname')";
 
         if($conn->query($sql) === TRUE)
       {
	 
        echo "<script type='text/javascript'>
	           location.href='http://localhost/buss%20pass/display.php';
			   alert('$ms');
		      </script>"; 
         }
   
   }
    ?>
</body>
</html>
