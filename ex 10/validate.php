<?php

$errors = array();

$email = $_POST['email'];
$password = $_POST['password'];
$ccnumber = $_POST['ccnumber'];
$phone = $_POST['phone'];


// Email validation
if (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,4}$/", $email)) {
    $errors[] = "Invalid email format.";
}


// Password validation
if (strlen($password) < 6) {
    $errors[] = "Password must contain at least 6 characters.";
}


// Credit Card validation
if (!preg_match("/^[0-9]{16}$/", $ccnumber)) {
    $errors[] = "Credit card number must contain exactly 16 digits.";
}


// Phone Number validation
if (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Phone number must contain exactly 10 digits.";
}


// Display result
if (empty($errors)) {

    echo "<h2>Registration successful!</h2>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";

} else {

    echo "<h2>Validation Errors</h2>";

    foreach ($errors as $e) {
        echo $e . "<br>";
    }
}

?>