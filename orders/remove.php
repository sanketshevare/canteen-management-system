<?php
// Assuming you're using PHP and connecting to a MySQL database

// Retrieve the ID of the row to remove from the POST data
$id = $_POST['id'];

// Perform the necessary database operations to remove the row with the given ID
// Replace the following code with your actual database logic
$host = 'localhost'; // Replace with your database host
$db = 'canteen_delivery_system'; // Replace with your database name
$user = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the database query
    $stmt = $pdo->prepare('DELETE FROM order_details WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Return a success response
    echo 'success';
} catch (PDOException $e) {
    // Handle any errors that occur during the database operation
    echo 'error';
}
