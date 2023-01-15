<?php
$con=mysqli_connect("localhost","root","") or die("Error:canot connect to server");
$db= mysqli_select_db($con,"bookingcourtsdb") or die("Error:canot connect to databsase");
?>