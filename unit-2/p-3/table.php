<?php
include("connection.php");
$table = "CREATE TABLE IF NOT EXISTS product (
    Product_id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Pro_name VARCHAR(100) NOT NULL,
    Pro_price FLOAT(7,2) NOT NULL,
    QOH INT(5) NOT NULL
)";
$qry = mysqli_query($con, $table);
// if ($qry) {
//     echo "Table Created";
// } else {
//     echo "Not Created";
// }
?>
