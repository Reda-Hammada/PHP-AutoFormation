<?php

    //get IP Address
function get_real_ip_address() {
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   
        //check ip from shared internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   
        //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        //REMOTE_ADDR if neither of above is available
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


echo get_real_ip_address();


?>