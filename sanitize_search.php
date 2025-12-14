<?php
    // Simulate search query input
    $search_input = "DROP TABLE users;";

    // Sanitizing the search input using prepared statements
    $pdo         = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
    $stmt        = $pdo->prepare("SELECT * FROM products WHERE name LIKE :search");
    $search_term = "%" . $search_input . "%"; // Using wildcards for LIKE clause
    $stmt->bindParam(':search', $search_term);
    $stmt->execute();

    // Output the results
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        echo "Product: " . $row['name'] . "<br>";
}

