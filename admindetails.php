<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="admintable1.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<title>bus pass system</title>
<style>
span
{
position:absolute;
top:95px;
left:470px;
color:#990099;
font-size:30px;
font-family:Georgia, "Times New Roman", Times, serif;
font-style:italic;
}
</style>
</head>
<body>
<h5>Admin Registration Details</h5>
<input type="text" id="myInput" onKeyUp="myFunction()" placeholder="Search for Employee Id..">
<br>
<p></p>

<?php

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
 $ename=$_POST['ename'];
 $wrk="Chief";
 
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 
   $sql= "SELECT work FROM adminreg WHERE psw='$ename'";
   $rs=$conn->query($sql);
   $p = mysqli_num_rows($rs);
   
    while($dis = mysqli_fetch_array($rs, MYSQL_ASSOC))
   {
     $work=$dis['work'];
   }
 
 echo "<table border='1' id='myTable' >
<tr>
<th>Employee-Id</th>
<th>Name</th>
<th>Designation</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Address</th>
<th>Area</th>
<th>District</th>
<th>Email</th>
<th>Mobile</th>
<th>Sl.no</th>
</tr>";
if($p == TRUE)
{

if($wrk == $work)
{
   $sql= "SELECT uname,name,work,dob,gender,address,place,district,email,mob FROM adminreg";
   $res=$conn->query($sql);
   
   while($dis = mysqli_fetch_array($res, MYSQL_ASSOC))
   {
    echo "<tr>";
	echo "<td>" .$dis['uname']. "</td>";
	echo "<td>" .$dis['name']. "</td>";
	echo "<td>" .$dis['work']. "</td>";
	echo "<td>" .$dis['dob']. "</td>";
	echo "<td>" .$dis['gender']. "</td>";
	echo "<td>" .$dis['address']. "</td>";
	echo "<td>" .$dis['place']. "</td>";
	echo "<td>" .$dis['district']. "</td>";
	echo "<td>" .$dis['email']. "</td>";
	echo "<td>" .$dis['mob']. "</td>";
	echo "<td>" . "</td>";
	echo "</tr>";
	 
   }
}
else
 {
  echo "<span>***You don't have permission to view admin database***</span>";
 }  
}
else
 {
  echo "<span>***Password incorrect,please check your password***</span>";
 }
   $conn->close();
   ?> 
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script> 
<script>
var addSerialNumber = function () {
    $('table tr').each(function(index) {
        $(this).find('td:nth-child(11)').html(index-1+1);
    });
};
addSerialNumber();
</script> 
</body>
</html>    
