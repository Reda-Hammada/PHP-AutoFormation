<?php


// resume the session 

session_start();

echo 'Hello'. " " . $_SESSION['username'] . " " . "welcome again ! " . "</br>";
echo '<a href="sessionDestroy.php">log out</a>';