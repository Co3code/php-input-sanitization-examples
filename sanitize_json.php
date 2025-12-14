<?php
// Simulate user input
$user_input = "<script>alert('XSS');</script>";

// Sanitize user input for safe usage in JavaScript context
$sanitized_input = json_encode($user_input);

// Safely pass to JavaScript
echo "<script>console.log($sanitized_input);</script>";
