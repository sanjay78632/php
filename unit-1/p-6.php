<?php
/*$shop = array(
    "Mobile" => array("samsung" => "m12", "mi" => "note9", "apple" => "i12"),
    "Laptop" => array("dell" => "insp12", "Hp" => "Pavilion", "lenovo" => "Z350")
);

echo $shop["Mobile"]["samsung"] . "<br>";
echo $shop["Mobile"]["mi"] . "<br>";
echo $shop["Mobile"]["apple"] . "<br>";
echo $shop["Laptop"]["dell"] . "<br>";
echo $shop["Laptop"]["Hp"] . "<br>";
echo $shop["Laptop"]["lenovo"] . "<br>";*/

$shop = array(
    "Mobile" => array("samsung" => "m12", "mi" => "note9", "apple" => "i12"),
    "Laptop" => array("dell" => "insp12", "Hp" => "Pavilion", "lenovo" => "Z350")
);

foreach ($shop as $category => $items) {
    echo "<b>$category</b><br>";

    foreach ($items as $brand => $model) {
        echo "$brand: $model<br>";
    }

    echo "<br>";
}
?>


