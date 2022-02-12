<?php

// resume session 
session_start();

// session unset
session_unset();

// destroy
session_destroy();


echo "you logged out," . " " . "session destroyed" . "</br>";
print_r($_SESSION);


?>