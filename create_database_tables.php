<?php
// Database connection details
$servername = "localhost"; // Change to your database server hostname
$username = "your_username"; // Change to your database username
$password = "your_password"; // Change to your database password
$dbname = "your_database_name"; // Change to your desired database name

// Create a new database connection
$conn = new mysqli($servername, $username, $password);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a new database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection after creating the database
$conn->close();

// Now, you would typically open a new connection to the created database
// and proceed to create tables to store your data (e.g., users table)
?>

<!-- Additional code to create tables and perform other tasks within the newly created database -->
