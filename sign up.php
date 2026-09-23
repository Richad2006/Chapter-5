<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['pss'] ?? '';

    if (empty($username) || empty($password)) {
        $message = "Please enter username and password";
    } else {

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        $message = "Account created successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

<form method="POST">

    <h2>Sign up Form</h2>

    <input type="text" name="username" placeholder="Username"><br>

    <input type="password" name="pss" placeholder="password"><br>

    <button type="submit">Create Account</button>

    <h3><?php echo $message; ?></h3>

    <a href="login.php">Login</a>

</form>

</body>
</html>