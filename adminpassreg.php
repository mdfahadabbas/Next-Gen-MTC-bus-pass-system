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
<h3>Registration Pass Details</h3>
<input type="text" id="myInput" onKeyUp="myFunction()" placeholder="Search for PassId.."><br>
<p></p>
<?php

 $id=$_POST["id"];

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
<th>Pass Id</th>
<th>Name</th>
<th>Pass Type</th>
<th>Registration date</th>
<th>Aadhar No</th>
<th>From</th>
<th>To</th>
<th>Institution</th>
<th>Address</th>
<th>Pincode</th>
<th>uname</th>
<th>Sl.no</th>
</tr>";

   $sql= "SELECT name,passid,passtype,uname,regdate,fromarea,toarea,institution,aadhar,address,pincode FROM regpass Where passid='$id' ";
   $res=$conn->query($sql);
   
   while($dis = mysqli_fetch_array($res, MYSQL_ASSOC))
   {
    echo "<tr>" ;
	echo "<td>" .$dis['passid']. "</td>";
	echo "<td>" .$dis['name']. "</td>";
	echo "<td>" .$dis['passtype']. "</td>";
	echo "<td>" .$dis['regdate']. "</td>";
	echo "<td>" .$dis['aadhar']. "</td>";
	echo "<td>" .$dis['fromarea']. "</td>";
	echo "<td>" .$dis['toarea']. "</td>";
	echo "<td>" .$dis['institution']. "</td>";
	echo "<td>" .$dis['address']. "</td>";
	echo "<td>" .$dis['pincode']. "</td>";
	echo "<td>" .$dis['uname']. "</td>";
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
