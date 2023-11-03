<?php
// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$pizza_size = $_POST['pizza_size'];
$toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : 'None selected';
$address = $_POST['address'];

// Insert data into the database (you need to set up the database and connection)
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to insert data into the database (replace 'your_table_name' with your actual table name)
$sql = "INSERT INTO your_table_name (name, email, pizza_size, toppings, address) VALUES ('$name', '$email', '$pizza_size', '$toppings', '$address')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully. Thank you!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
