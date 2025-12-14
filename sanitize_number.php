<?php
// Simulate integer input
$number_input = "123abc456<script>";

// Sanitizing the integer input
$sanitized_number = filter_var($number_input, FILTER_SANITIZE_NUMBER_INT);

// Output the sanitized result
echo "Sanitized Number: $sanitized_number <br>";
?>
