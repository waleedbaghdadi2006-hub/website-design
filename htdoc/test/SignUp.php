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

$error_message = "";
$success_message = "";

// Handle signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $full_name = trim($_POST['full_name']);
  $email = trim($_POST['email']);
  $password_plain = $_POST['password'];
  $hashed_password = password_hash($password_plain, PASSWORD_DEFAULT);
  $phone = trim($_POST['phone']);

  // Basic validation
  if (empty($full_name) || empty($email) || empty($password_plain)) {
    $error_message = "All fields except phone are required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid email format.";
  } else {
    // Check if email already exists (using 'gmail' column as in your login code)
    $check_sql = "SELECT * FROM users WHERE email = '$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
      $error_message = "An account with this email already exists.";
    } else {
      // Insert new user (plain text password - matches your login comparison)
      // Role defaults to 'user'
      $insert_sql = "INSERT INTO users (full_name, email, password, phone, role) 
                           VALUES ('$full_name', '$email', '$hashed_password', '$phone', 'user')";

      if ($conn->query($insert_sql) === TRUE) {
        $success_message = "Account created successfully! You can now <a href='login.php'>sign in</a>.";
        // Optionally auto-login the user (commented out)
        // $_SESSION['username'] = $email;
        // header("Location: products.php");
        // exit();
      } else {
        $error_message = "Error: " . $conn->error;
      }
    }
  }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Singing Up</title>
  <link rel="stylesheet" href="css/SignUp.css">


</head>

<body>
  <div class="container">
    <div class="column1">
      <header>
        <h1>Welcome to our Supplements store</h1>
      </header>

      <main>
        <h1>Create your Account</h1>
        <form action="" method="post">
          <label for="">Full Name</label>
          <input type="text" name="full_name" id="FName" placeholder="Enter Your Full Name" required><br>
          <label for="">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Enter your @gmail.com" required><br>
          <label for="">Password</label>
          <input type="password" name="password" id="password" placeholder="Choose a strong password" required><br>
          <label for="">Phone Number</label>
          <input type="tel" name="phone" id="tel" placeholder="Enter your phone number"><br>
          <button type="submit">CREATE AN ACCOUNT</button><br><br>
          <p>Already have an account ?<a href="SignIn.php">Sign in</a></p>

        </form>
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