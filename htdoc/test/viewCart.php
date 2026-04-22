<?php
session_start();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// 2. Create connection (Object-Oriented style)
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

// 3. JOIN tables to get product details for the logged-in user
$sql = "SELECT p.name, p.price, op.id as cart_item_id 
        FROM order_product op
        JOIN products p ON op.product_id = p.id 
        WHERE op.user_id = '$user_id'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Shopping Cart</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .total-row { font-weight: bold; background-color: #eee; }
    </style>
</head>
<body>
    <h1>🛒 Your Cart</h1>
    
    <?php if ($result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                while($row = $result->fetch_assoc()): 
                    $total += $row['price'];
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td>$<?php echo number_format($row['price'], 2); ?></td>
                    </tr>
                <?php endwhile; ?>
                <tr class="total-row">
                    <td>Total</td>
                    <td>$<?php echo number_format($total, 2); ?></td>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p>Your cart is empty! <a href="productPage.php">Go shopping</a>.</p>
    <?php endif; ?>

    <br>
    <a href="productPage.php">← Back to Products</a>
</body>
</html>

<?php
$conn->close();
?>
