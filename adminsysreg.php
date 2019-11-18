<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="admintable1.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<title>bus pass system</title>
</head>
<body>
<h5>MTC Bus Pass System Chennai</h5>
<h3>User Registration Details</h3>
<input type="text" id="myInput" onKeyUp="myFunction()" placeholder="Search for UserId.."><br>
<p></p>

<?php

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="bus";
 
  $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 
 
 echo "<table border='1' id='myTable' >
<tr>
<th>UserId</th>
<th>First name</th>
<th>Last name</th>
<th>Date of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Area</th>
<th>District</th>
<th>Email</th>
<th>Mob</th>
<th>Sl.no</th>
</tr>";

   $sql= "SELECT uname,fname,lname,dob,age,gender,address,place,district,email,mob FROM registration";
   $res=$conn->query($sql);
   
   while($dis = mysqli_fetch_array($res, MYSQL_ASSOC))
   {
    echo "<tr>" ;
	echo "<td>" .$dis['uname']. "</td>";
	echo "<td>" .$dis['fname']. "</td>";
	echo "<td>" .$dis['lname']. "</td>";
	echo "<td>" .$dis['dob']. "</td>";
	echo "<td>" .$dis['age']. "</td>";
	echo "<td>" .$dis['gender']. "</td>";
	echo "<td>" .$dis['address']. "</td>";
	echo "<td>" .$dis['place']. "</td>";
	echo "<td>" .$dis['district']. "</td>";
	echo "<td>" .$dis['email']. "</td>";
	echo "<td>" .$dis['mob']. "</td>";
	echo "<td>" . "</td>";
	echo "</tr>";
	 
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
        $(this).find('td:nth-child(12)').html(index-1+1);
    });
};
addSerialNumber();
</script>
</body>
</html>    