<?php
// =============================================
// 1. DATABASE CONNECTION (THIS WAS MISSING)
// =============================================
$host = 'localhost';
$dbname = 'whatever'; // Make sure this matches your DB name
$username = 'root';
$password = ''; // Default XAMPP password is empty

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

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
<html>
<head>
    <title>Admin Panel - Supplement Store</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        input, textarea { display: block; margin: 10px 0; padding: 8px; width: 300px; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        .delete-link { color: red; margin-left: 10px; text-decoration: none; }
        .delete-link:hover { text-decoration: underline; }
        hr { margin: 30px 0; }
    </style>
</head>
<body>

    <h1>Admin Panel - Manage Supplements</h1>
    
    <h2>➕ Add New Product</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Product Name" required>
        <textarea name="desc" placeholder="Description" rows="3"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Price (e.g. 19.99)" required>
        <input type="text" name="image" placeholder="Image Filename (e.g., whey.jpg)" required>
        <input type="text" name="category" placeholder="Category (e.g., Protein)">
        <button type="submit" name="add_product">Add Product</button>
    </form>

    <hr>

    <h2>📋 Current Products (Click to Delete)</h2>
    <ul>
        <?php
        // Fetch all products to display
        $stmt = $pdo->query("SELECT id, name FROM products ORDER BY id DESC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>";
            echo htmlspecialchars($row['name']);
            echo " <a href='admin.php?delete_id=" . $row['id'] . "' class='delete-link' onclick=\"return confirm('Are you sure you want to delete this product?');\">[Delete]</a>";
            echo "</li>";
        }
        ?>
    </ul>

    <hr>
    <p><a href="test.php">← Back to Product Page</a></p>

</body>
</html>