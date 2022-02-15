<?php

if(file_exists("/tmp/test.txt")){

    $file = fopen("/tmp/test.txt");
    print "File Opened Successfully ";
}

else {

    die("file not found");

}

?>