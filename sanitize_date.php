<?php
                            // Simulate date input
$date_input = "2021-13-01"; // Invalid date

// Validating the date format
$sanitized_date = DateTime::createFromFormat('Y-m-d', $date_input);

// Check if the date is valid
if ($sanitized_date && $sanitized_date->format('Y-m-d') === $date_input) {
    echo "Sanitized Date: " . $sanitized_date->format('Y-m-d') . "<br>";
} else {
    echo "Invalid Date Format.<br>";
}
