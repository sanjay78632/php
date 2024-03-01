<?php
    if (isset($_POST['uname']) && isset($_POST['Password'])) {
        $name = $_POST['uname'];
        $pass = $_POST['Password'];
        if ($name == "" || $pass == '') {
            echo "Please enter the details";
        } else {
            echo "Welcome " . $name;
            echo "<br>Your Password is " . $pass;
        }
    } else {
        echo "Please enter the details";
    }
?>
