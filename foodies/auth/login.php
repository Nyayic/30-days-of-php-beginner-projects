<?php 
include('../config/db.php');

// Get the user input from the registration form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate the user input
if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "Please fill in all fields";
} else if ($password != $confirm_password) {
    echo "Passwords do not match";
} else {
    // Hash the password using bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert the user data into the users table in the MySQL database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Registration successful";
    } else {
        echo "Registration failed";
    }
}

?>
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>