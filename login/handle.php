<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname     = "phonebook";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    $user = mysqli_fetch_assoc($result);

    if (md5($password) == $user['password'])
    {
        // Set session
        $_SESSION["login"] = true;

        // Username and password is ok
        header('Location: /projects/learn-php/login/dashboard.php');
	    die();
    }
    else {
        // Password is incorrect
        header('Location: /projects/learn-php/login/');
	    die();
    }
}
else
{
    // There is no row in users table for this username
	header('Location: /projects/learn-php/login/');
	die();
}

?>