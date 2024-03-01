<?php
// Function with parameters for string concatenation
function concatenateStrings($str1, $str2) {
    return $str1 . '' . $str2;
}

// Function without parameters for string concatenation
function concatenateUserInput() {
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    return $firstName . '' . $lastName;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get concatenated string using both functions
    $concatenatedWithParams = concatenateStrings($_POST['firstName'], $_POST['lastName']);
    $concatenatedWithoutParams = concatenateUserInput();
    
    // Print output
    echo "Concatenated with parameters: $concatenatedWithParams <br>";
    echo "Concatenated without parameters: $concatenatedWithoutParams <br>";
}
?>

<!-- HTML form for user input -->
<form method="post">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" id="firstName"><br>
    
    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" id="lastName"><br>
    
    <input type="submit" value="Submit">
</form>
