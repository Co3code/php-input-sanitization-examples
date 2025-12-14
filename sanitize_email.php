<?php
// Simulate email input
$email_input = "test@<script>alert('XSS')</script>example.com";

// Sanitizing the email input
$sanitized_email = filter_var($email_input, FILTER_SANITIZE_EMAIL);

// Output the sanitized result
echo "Sanitized Email: $sanitized_email <br>";
?>
