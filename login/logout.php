<?php

session_start();

session_unset();

session_destroy();

header('Location: /projects/learn-php/login/');
die();

?>