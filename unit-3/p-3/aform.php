<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upper case form</title>
</head>
<body>
    <?php
    $name = $_GET['n'];
    if ($name != "") {
        echo strtoupper($name);
    } else {
        echo "ADD TEXT";
    }
    ?>
</body>
</html>
