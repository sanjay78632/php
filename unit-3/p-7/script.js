document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get form field values
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var pincode = document.getElementById("pincode").value;
    var contactNo = document.getElementById("contactNo").value;
    var gender = document.getElementById("gender").value;
    var sports = document.querySelectorAll('input[name="sports"]:checked');
    var color = document.getElementById("color").value;
    var vehicle = document.getElementById("vehicle").value;
    var dob = document.getElementById("dob").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;

    // Regular expressions for validation
    var nameRegex = /^[a-zA-Z]+$/;
    var pincodeRegex = /^\d{6}$/;
    var contactNoRegex = /^\d{10}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validation
    if (!nameRegex.test(firstName)) {
        displayErrorMessage("Invalid first name.");
        return;
    }
    if (!nameRegex.test(lastName)) {
        displayErrorMessage("Invalid last name.");
        return;
    }
    if (!pincodeRegex.test(pincode)) {
        displayErrorMessage("Invalid pincode.");
        return;
    }
    if (!contactNoRegex.test(contactNo)) {
        displayErrorMessage("Invalid contact number.");
        return;
    }
    if (gender === "") {
        displayErrorMessage("Please select gender.");
        return;
    }
    if (sports.length === 0) {
        displayErrorMessage("Please select at least one sport.");
        return;
    }
    if (!emailRegex.test(email)) {
        displayErrorMessage("Invalid email address.");
        return;
    }

    // If all validations pass, submit the form via AJAX
    var formData = new FormData();
    formData.append('firstName', firstName);
    formData.append('lastName', lastName);
    formData.append('pincode', pincode);
    formData.append('contactNo', contactNo);
    formData.append('gender', gender);
    sports.forEach(function(sport) {
        formData.append('sports[]', sport.value);
    });
    formData.append('color', color);
    formData.append('vehicle', vehicle);
    formData.append('dob', dob);
    formData.append('age', age);
    formData.append('email', email);

    // AJAX Request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "submit_form.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                displaySuccessMessage("Form submitted successfully.");
            } else {
                displayErrorMessage("Error submitting form.");
            }
        }
    };
    xhr.send(formData);
});

function displayErrorMessage(message) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.innerText = message;
    errorMessage.style.color = "red";
}

function displaySuccessMessage(message) {
    var successMessage = document.getElementById("error-message");
    successMessage.innerText = message;
    successMessage.style.color = "green";
}
