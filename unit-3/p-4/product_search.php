<!DOCTYPE html>
<html>
<head>
    <title>Product-Search</title>
</head>
<body>

<?php
include("connection.php");

$s = $_GET['sr'];

if ($s != "") {
    $sel = "SELECT * FROM product WHERE Pro_name LIKE '".$s."'";
    $query = mysqli_query($con, $sel);
    $num = mysqli_num_rows($query);

    if ($num > 0) {
        echo "<table width=100% border=1>
                <tr>
                    <th>Product id</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                </tr>";

        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>$row[Product_id]</td>
                    <td>$row[Pro_name]</td>
                    <td>$row[Pro_price]</td>
                    <td>$row[QOH]</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Product Not Found.";
    }
} else {
    echo "Please try again";
}
?>

</body>
</html>
