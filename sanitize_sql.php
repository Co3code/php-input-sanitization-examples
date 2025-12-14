<?php
// Simulate user input for SQL query
$username_input = "<script>alert('XSS');</script>admin";

// PDO connection (change to your database credentials)
$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");

// Prepared statement to avoid SQL injection
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username_input);
$stmt->execute();

// Output the result (example)
$result = $stmt->fetch();
echo "User: " . $result['username'] . "<br>";
?>
