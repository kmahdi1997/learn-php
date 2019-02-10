<?php

session_start();

if (!$_SESSION['login'])
{
    header('Location: /projects/learn-php/login/');
    die();
}

?>

<a href="logout.php">Logout</a>
<p>Hi</p>