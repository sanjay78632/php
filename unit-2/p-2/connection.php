<?php
$host="localhost";
$user="root";
$pass="root";
$con=mysqli_connect($host,$user,$pass);

if($con){
    echo"Connected";
}
else{
    echo"Not Connected";
}
?>