<?php
// Simulate user input
$user_input = "<h1>Welcome</h1><script>alert('XSS');</script>";

// Sanitizing the string to prevent XSS
$sanitized_html = htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');

// Output the sanitized result
echo "Sanitized HTML: $sanitized_html <br>";
