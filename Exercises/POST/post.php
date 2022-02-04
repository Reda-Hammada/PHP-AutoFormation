<?php

if($_POST['fullName'] || $_POST['email'] || $_POST['age']){

    echo "your full name is " . $_POST['fullName'] . "<br>";
    echo "your email is " . $_POST['email'] . "<br>";
    echo "your age is " . $_POST['age'] . " " . "years old" . "<br>";
};



?>