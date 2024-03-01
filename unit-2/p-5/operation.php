<?php
include("connection.php");
$productname=$_POST["Pro_name"];
$productprice=$_POST["Pro_price"];
$qnty=$_POST["QOH"];
if(!empty($productname)&&!empty($productprice)&&!empty($qnty))
{
    $ins="insert into product(Pro_name,Pro_price,QOH) values('$productname','$productprice','$qnty')";
    $res=mysqli_query($con,$ins);
    if($res)
    {
        header("location:search.php");
    }
    else{
        echo"Data Not inserted";
    }
}

?>