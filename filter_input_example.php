<?php
// Initialize error messages as empty
$email_error = $url_error = $ip_error = $int_error = $float_error = $sanitized_email = $sanitized_url = $sanitized_ip = $sanitized_int = $sanitized_float = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // **Email Sanitization and Validation using filter_input()**
    if (isset($_POST["email"])) {
        // Sanitize the email by removing invalid characters
        $sanitized_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        
        // Validate the sanitized email
        if (!filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format!";
        }
    }

    // **URL Sanitization and Validation using filter_input()**
    if (isset($_POST["url"])) {
        // Sanitize the URL by removing unsafe characters
        $sanitized_url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        
        // Validate the sanitized URL
        if (!filter_var($sanitized_url, FILTER_VALIDATE_URL)) {
            $url_error = "Invalid URL format!";
        }
    }

    // **IP Sanitization and Validation using filter_input()**
    if (isset($_POST["ip"])) {
        // Sanitize the IP address
        $sanitized_ip = filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_STRING);
        
        // Validate if it's a valid IP address
        if (!filter_var($sanitized_ip, FILTER_VALIDATE_IP)) {
            $ip_error = "Invalid IP address format!";
        }
    }

    // **Integer Sanitization and Validation using filter_input()**
    if (isset($_POST["int"])) {
        // Sanitize the integer by removing non-numeric characters
        $sanitized_int = filter_input(INPUT_POST, 'int', FILTER_SANITIZE_NUMBER_INT);
        
        // Validate if it's a valid integer
        if (!filter_var($sanitized_int, FILTER_VALIDATE_INT)) {
            $int_error = "Invalid integer format!";
        }
    }

    // **Float Sanitization and Validation using filter_input()**
    if (isset($_POST["float"])) {
        // Sanitize the float by removing invalid characters
        $sanitized_float = filter_input(INPUT_POST, 'float', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        
        // Validate if it's a valid floating-point number
        if (!filter_var($sanitized_float, FILTER_VALIDATE_FLOAT)) {
            $float_error = "Invalid float format!";
        }
    }
} // Used when working directly with form data or URL parameters
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Sanitization and Validation</title>
</head>
<body>

<h2>Sanitization and Validation Form</h2>
<form method="post" action="      
    <!-- Email Input -->
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="<?php echo $sanitized_email; ?>"><br>
    <?php echo $email_error; ?><br><br>

    <!-- URL Input -->
    <label for="url">URL:</label><br>
    <input type="text" id="url" name="url" value="<?php echo $sanitized_url; ?>"><br>
    <?php echo $url_error; ?><br><br>

    <!-- IP Input -->
    <label for="ip">IP Address:</label><br>
    <input type="text" id="ip" name="ip" value="<?php echo $sanitized_ip; ?>"><br>
    <?php echo $ip_error; ?><br><br>

    <!-- Integer Input -->
    <label for="int">Integer:</label><br>
    <input type="text" id="int" name="int" value="<?php echo $sanitized_int; ?>"><br>
    <?php echo $int_error; ?><br><br>

    <!-- Float Input -->
    <label for="float">Float:</label><br>
    <input type="text" id="float" name="float" value="<?php echo $sanitized_float; ?>"><br>
    <?php echo $float_error; ?><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
