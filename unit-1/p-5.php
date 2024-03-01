<?php
$student=array("Name"=>"Hima Patel","Age"=>5,"Height"=>3.4,"City"=>"Ahmedabad");
//print_r($student);
// echo "<br>Name: ",$student["Name"]."<br>";
// echo "<br>Age: ",$student["Age"]."<br>";
// echo "<br>Height: ",$student["Height"]."<br>";
// echo "<br>City: ",$student["City"]."<br>";
foreach ($student as $key => $value) {
    echo "<br>$key: $value<br>";
}
?>