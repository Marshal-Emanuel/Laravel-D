<?php 
define("pie", 3.142);
$radius = $_POST['txtRadius'];
$area = pie * pow($radius, 2);
echo "The area of the Circle is: " . $area;
?>