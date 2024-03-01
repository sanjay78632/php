
<?php
include("connection.php");
$sel_qry="select * from product";
$res=mysqli_query($con,$sel_qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
</head>
<body>
   <!-- <h3> <a href="insert.php">+Add Records</a></h3> -->
    <table border="1">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
        </tr>
        <?php
           while($row=mysqli_fetch_array($res))
           {
        ?>
        <tr>
            <td><?php echo $row["Product_id"];?></td>
            <td><?php echo $row["Pro_name"];?></td>
            <td><?php echo $row["Pro_price"];?></td>
            <td><?php echo $row["QOH"];?></td> 
        </tr>
        <?php
           }
        ?>
    </table>
</body>
</html>