<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputField = $_POST["inputField"];
    
    // Validation on server-side
    if (empty($inputField)) {
        echo "Field cannot be blank.";
        exit;
    }
    
    if (strlen($inputField) < 5) {
        echo "Minimum length should be 5 characters.";
        exit;
    }
    
    // Process the data here if validation passes
    echo "Data received: " . $inputField;
    // Perform further actions here
}
?>
