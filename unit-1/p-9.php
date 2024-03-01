<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting</title>
</head>
<body>

<?php
// Given array of 5 numbers
$numbers = array(8, 2, 5, 1, 9);

// Print original array
echo "Original Array: ";
printArray($numbers);

// Sort array in ascending order
sort($numbers);
echo "<br>Ascending Order: ";
printArray($numbers);

// Sort array in descending order
rsort($numbers);
echo "<br>Descending Order: ";
printArray($numbers);

// Function to print an array
function printArray($arr) {
    echo "[ " . implode(", ", $arr) . " ]";
}
?>

</body>
</html>
