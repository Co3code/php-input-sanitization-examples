<?php
// Simulate user input (e.g., form data from a POST request)
$_POST['email'] = "test@<script>alert('XSS')</script>example.com";

// Use filter_input to sanitize and validate the email input
$sanitized_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// Validate the sanitized email address
if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid Email: " . $sanitized_email . "<br>";
} else {
    echo "Invalid Email.<br>";
}
