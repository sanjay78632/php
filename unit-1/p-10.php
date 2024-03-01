<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Specific Value</title>
</head>
<body>

<?php

$numbers = array(2, 5, 8, 2, 3, 2, 7, 2,2);


$searchValue = 2;

$count = 0;

echo "Original Array: ";
printArray($numbers);
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] === $searchValue) {
        $count++;
    }
}
echo "<br>The value $searchValue appears $count times in the array.";
function printArray($arr) {
    echo "[ " . implode(", ", $arr) . " ]";
}
?>

</body>
</html>
