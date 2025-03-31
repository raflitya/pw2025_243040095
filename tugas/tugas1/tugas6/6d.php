<?php
session_start();


$valid_username = "admin";
$valid_password = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["loggedin"] = true;
        header("Location: login.php");
        exit;
    } else {
        $error_message = "Username atau password salah!";
    }
}

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "<h2>Selamat Datang, Admin!</h2>";
    echo "<a href='?logout=true'>Logout</a>";
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: login.php");
        exit;
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Halaman Login</h2>
    <?php if (!empty($error_message)) { echo "<p style='color:red;'>$error_message</p>"; } ?>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
