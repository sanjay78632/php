<?php
$sub=array(1,2,3,4,5);
echo "Printed using for loop <br>";
//using for loop
for($i=0;$i<count($sub);$i++){
    echo $sub[$i]."<br>";
}
echo "<br>";
echo "Printed using for foreach loop <br>";
//using foreach loop
foreach($sub as $subject){
    echo $subject."<br>";
}
?>