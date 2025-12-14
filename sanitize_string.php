<?php
// Simulate user input
$user_input = "<script>alert('XSS');</script>";

// Sanitizing the string to prevent XSS
$sanitized_string = htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');

// Output the sanitized result
echo "Sanitized String: $sanitized_string <br>";
