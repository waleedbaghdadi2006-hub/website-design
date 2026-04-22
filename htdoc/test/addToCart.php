<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection (Object-Oriented)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['addToCart'])) {
    // USE THE NUMERIC ID, NOT THE USERNAME
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];

    // Object-Oriented style
    $update_sql = "UPDATE products SET quantity = quantity - 1 WHERE id = '$product_id'";
    $conn->query($update_sql);
    $sql = "INSERT INTO order_product (user_id, product_id) VALUES ('$user_id', '$product_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product added to cart!'); window.location='viewCart.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>