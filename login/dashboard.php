<?php

session_start();

if (!$_SESSION['login'])
{
    header('Location: /projects/learn-php/login/');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <a class="btn btn-danger btn-block" href="logout.php">Logout</a>
        <h1 class="text-center mt-3">Hi</h1>
    </div>
</body>
</html>
