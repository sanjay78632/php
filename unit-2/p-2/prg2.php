<?php
include("connection.php");
$db="create database php";
$qry=mysqli_query($con,$db);
if($qry){
    echo"Databse created";
}
else{
    echo"Not Created";
}

?>