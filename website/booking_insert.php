<?php


$place_of_play = $_POST["place_of_play"];
$light = $_POST["light"];
$times = $_POST["times"];
include "config.php";

$insert_football ="INSERT INTO football (fcourt,flights,ftime) value('$place_of_play','$light','$times')";
$result = mysqli_query($con,$insert_football);


if($result){
echo "<h1>booking added successfully</h1>";
echo "<a href='viewbooking.php'>Click here to view all courses<a/>";
}
else{
    die("Error:".mysqli_errno($con));
}
?>