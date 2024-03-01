<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $r=$_GET['checkselect'];
    $str=explode(" ",$r);
    for($i=0;$i<count($str);$i++)
    {
        echo $str[$i]."<br>";
    }
    if($r=="")
    {
        echo "You Havenot  Selected any item";
    }
    else
    {
        echo "You Havenot  Selected any item";
    }

    ?>
    
</body>
</html>