<?php
$from=$_GET['from'];
$to=$_GET['to'];

$map=$from."+,+Chennai,+Tamil+Nadu&destination=".$to."+,+Chennai,+Tamil+Nadu&travelmode=transit";

header("location: https://www.google.com/maps/dir/?api=1&orgin=".$map);

?>