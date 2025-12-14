<?php
// Simulate float input
$float_input = "123.45abc<script>";

// Sanitizing the float input
$sanitized_float = filter_var($float_input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

// Output the sanitized result
echo "Sanitized Float: $sanitized_float <br>";
