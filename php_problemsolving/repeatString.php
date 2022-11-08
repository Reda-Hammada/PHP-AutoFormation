<?php



function repeat_string(string $name,int $times, bool $value){

    $result ='';
    $space = $value ? " " : "";
    for($i=0; $i < $times; $i++):

        $result .= $name . $space;
 
    
    endfor;

    return $result;
}

echo repeat_string('Reda', 4, true);

?>