
<?php
$message = "";
$username = "Yusuf";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username'] ?? '');

    if (!empty(trim($username))) {
        $message = "Welcome back, " . $username . "!";
    } else {
        $message = "Please enter your name!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Self Processing Form</title>
</head>

<body>

    <h2>Login Form</h2>

    <form method="post" action="">

        Name:
        <input type="text" name="username"
               value="<?php echo $username; ?>">

        <input type="submit" value="Login">

    </form>

    <p><?php echo $message; ?></p>

</body>
</html>
