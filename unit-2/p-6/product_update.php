<?php
include("connection.php");
echo $pro_id=$_POST["Product_id"];
echo $qoh=$_POST["QOH"];
if(!empty($qoh))
{
        echo $update_qry="update product set QOH =$qoh where Product_id =$pro_id";
        $update_res=mysqli_query($con,$update_qry);
        if($update_res)
        {
                header("location:display.php");
        }
}
else
{
        header("location:update.php?msg=Please try again");
}
?>