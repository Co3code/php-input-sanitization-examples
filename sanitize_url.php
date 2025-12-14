<?php
// Simulate URL input
$url_input = "https://example.com/<script>alert('XSS');</script>";

// Sanitizing the URL input
$sanitized_url = filter_var($url_input, FILTER_SANITIZE_URL);

// Output the sanitized result
echo "Sanitized URL: $sanitized_url <br>";
