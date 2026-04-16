<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($password == $row['password'] && $row['role']=="admin" ) {
            $_SESSION['username'] = $username;
            header("Location: admin.php"); // إعادة التوجيه إلى صفحة الترحيب بعد تسجيل الدخول
            exit();
        }
        else if ($password == $row["password"] && $row['role']=="user" ) 
            {
            $_SESSION['username'] = $username;
            header("Location: productPage.php"); // إعادة التوجيه إلى صفحة الترحيب بعد تسجيل الدخول
            exit();

            }
         else {
            $error_message = "Invalid password.";
        }
    } else {
        $error_message = "No user found with that username.";
    }
}


// إذا كان المستخدم مسجلاً الدخول، يمكنك توجيهه إلى صفحة الترحيب مباشرة
// if (isset($_SESSION['username'])) {
//     header("Location: we.php");
//     exit();
// }

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in -WS </title>
    <link rel="stylesheet" href="CSS/SignIn.css">
  

</head>

<body>

    <div class="container">
        <div class="column1">
            <!-- Content for column 1 -->
            <header>
                <h1>Welcome to our Supplements store</h1>
            </header>
            <main>
                <h1>welcome back</h1>
                <p>Please enter your details</p>
                <form action="" method="post">
                    <label for="username">Email address</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <div class="remember-me">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me for 30 days</label>
                        <a href="www.youtube.com">Forgot your password?</a>
                    </div>

                    <button type="submit">Sign In</button>
                    <p id="sign-up-link">Don't have an account? <a href="SingUp.php">Sign up</a></p>


                </form>
                <?php if (isset($error_message)): ?>
                    <p style="color:red;"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </main>
            <footer>
                <p>&copy; 2026 Supplements. All rights reserved.</p>
            </footer>

        </div>
        <div class="column2">
            <div class="overlay">
                <h2>UNLEASH YOUR POWER</h2>
                <p>Reach your best shape with top supplements</p>
            </div>
        </div>
    </div>

</body>

</html>