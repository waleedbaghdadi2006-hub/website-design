<?php
// =============================================
// 1. DATABASE CONNECTION (THIS WAS MISSING)
// =============================================
$host = 'localhost';
$dbname = 'test'; // Make sure this matches your DB name
$username = 'root';
$password = ''; // Default XAMPP password is empty

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }

// =============================================
// 2. HANDLE ADD PRODUCT (POST REQUEST)
// =============================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
    $sql = "INSERT INTO products (name, description, price, image_path, category) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'], 
        $_POST['desc'], 
        $_POST['price'], 
        $_POST['image'], 
        $_POST['category']
    ]);
    echo "<p style='color:green;'>✅ Product Added Successfully!</p>";
}

// =============================================
// 3. HANDLE DELETE PRODUCT (GET REQUEST)
// =============================================
if (isset($_GET['delete_id'])) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['delete_id']]);
    
    // Redirect back to admin.php to clear the URL parameter
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/AdminPage.css">
</head>
<body>
    <h1>Admin Page</h1>

    <h2>Add Product</h2>
    <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Price:</label>
        <input type="text" name="price" required>
        <br>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <input type="submit" name="add" value="Add Product">
    </form>

    <h2>Existing Products</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['description']}</td>
                    <td>
                        <a href='admin.php?edit={$row['id']}'>Edit</a>
                        <a href='admin.php?delete={$row['id']}'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No products found</td></tr>";
        }
        ?>
    </table>

    <?php if (isset($product)): ?>
        <h2>Edit Product</h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
            <br>
            <label>Price:</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>" required>
            <br>
            <label>Description:</label>
            <textarea name="description" required><?php echo $product['description']; ?></textarea>
            <br>
            <input type="submit" name="update" value="Update Product">
        </form>
    <?php endif; ?>

    <a href="products.php">View Products</a>
</body>
</html>

<?php
$conn->close();
?>