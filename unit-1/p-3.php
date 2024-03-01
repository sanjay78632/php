<?php
$num=25;

if($num%2==0){
    echo "$num is even";
}
else
{
    echo "$num is odd";
}

echo"<br>";
//switch staements
switch($num){
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "Number not matched";
}
?>