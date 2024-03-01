<?php
include("connection.php");

$pro_id = isset($_GET["pid"]) ? $_GET["pid"] : null;

$sel_product = "SELECT * FROM product WHERE Product_id = $pro_id";

$res_product = mysqli_query($con, $sel_product);

$row_product = $res_product ? mysqli_fetch_array($res_product) : null;

$pid = "";
$qty = "";

if ($row_product) {
    $pid = $row_product["Product_id"];
    $qty = $row_product["QOH"];
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product Update</title>
</head>
<body>
    <form action="product_update.php" method="post">
        <table>
            <caption>Product Update</caption>
            <tr>
                <td><label for="product">Product Name</label></td>
                <td>
                    <select name="Product_id">
                        <option value="">Please Select</option>
                        <?php
                        $sel_product = "SELECT * FROM product ORDER BY Pro_name ASC";
                        $qry = mysqli_query($con, $sel_product);

                        while ($row_search = mysqli_fetch_array($qry)) {
                        ?>
                            <option value="<?php echo $row_search["Product_id"]; ?>" <?php if ($row_search["Product_id"] == $pid) {
                                echo "selected";
                            } ?>>
                                <?php echo $row_search["Pro_name"]; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="quantity">Quantity</label></td>
                <td><input type="number" name="QOH" value="<?php echo $qty; ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
