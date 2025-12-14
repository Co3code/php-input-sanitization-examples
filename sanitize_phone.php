<?php
// Simulate phone number input
$phone_input = "+1 (555) 123-4567";

// Sanitizing the phone number to allow only digits
$sanitized_phone = preg_replace("/[^0-9]/", "", $phone_input);

// Output the sanitized result
echo "Sanitized Phone: $sanitized_phone <br>";
