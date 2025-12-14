<?php
// Simulate username input
$username_input = "<script>alert('XSS');</script>user123";

// Sanitizing the username input to allow only alphanumeric characters
$sanitized_username = filter_var($username_input, FILTER_SANITIZE_STRING);
$sanitized_username = preg_replace("/[^a-zA-Z0-9]/", "", $sanitized_username); // Allow only letters and numbers

// Output the sanitized result
echo "Sanitized Username: $sanitized_username <br>";
