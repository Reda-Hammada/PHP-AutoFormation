<?php

require("c.php");

echo "welcome" . " " . $_SESSION['username'] . "you have visited this page" . " " . $_SESSION['counter'] . " "  ."times"; 


echo "<a href='session.php'>session</a>";


?>