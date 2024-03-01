<?php
include("connection.php");

if (!empty($_POST["search_product"])) {
    $search = mysqli_real_escape_string($con, $_POST["search_product"]);
    $sel_qry = "SELECT * FROM product WHERE Product_id = $search";
    $res = mysqli_query($con, $sel_qry);
} else {
    $sel_qry = "SELECT * FROM product";
    $res = mysqli_query($con, $sel_qry);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
</head>
<body>
    <div style="float: left; width: 150px;"><h3><a href="insert.php">+Add New Record</a></h3></div>
    <div style="float: right; width: 150px; margin-right: 100px;">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>
                        <select name="search_product" id="">
                            <option value="">All</option>
                            <?php
                                $sel_qry_search = "SELECT * FROM product";
                                $res_search = mysqli_query($con, $sel_qry_search);
                                while($row_search = mysqli_fetch_array($res_search)) {
                            ?>
                            <option value="<?php echo $row_search["Product_id"];?>">
                                <?php echo $row_search["Pro_name"];?>
                            </option>        
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Search">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div style="margin-top:50px;margin-left:200px;float:left;">
        <table border="1">
            <caption><b>Product Detail</b></caption>
            <tr bgcolor="#6699FF">
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($res)) {
            ?>
            <tr bgcolor="#FFCC33">
                <td><?php echo $row["Product_id"];?></td>
                <td><?php echo $row["Pro_name"];?></td>
                <td><?php echo $row["Pro_price"];?></td>
                <td><?php echo $row["QOH"];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>
