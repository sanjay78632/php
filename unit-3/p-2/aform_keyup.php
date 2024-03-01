<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keyup form</title>
</head>
<body>
    
    <?php
    if (isset($_GET['uname'])) {
        $uname = $_GET['uname'];
        echo " " . $uname;
    } else {
        echo "Invalid Request";
    }
    ?>
    
</body>
</html>
