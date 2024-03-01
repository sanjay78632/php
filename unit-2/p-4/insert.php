<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Records</title>
</head>
<body>
    <form action="operation.php" method="post">
    <table>
        <caption>Add Product</caption>
        <tr>
            <td><label for="name">Product Name</label></td>
            <td><input type="text" name="Pro_name"></td>
        </tr>
        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="text" name="Pro_price"></td>
        </tr>
        <tr>
            <td><label for="quality">Quality</label></td>
            <td><input type="text" name="QOH"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit" name="submit">
                            <input type="reset" name="reset" value="reset">
        </td>
        </tr>
    </table>
    </form>
</body>
</html>