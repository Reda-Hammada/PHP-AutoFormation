<?php
session_start();
if(empty($_SESSION['counter'])){
 
    $_SESSION['counter'] = 1;

}

else{

    $_SESSION['counter']+=1;
}

echo ini_get('session.save_path'); // the location of the temporary session files 

?>