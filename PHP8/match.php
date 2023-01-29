<?php 
 class German{}
 
 $language =  new German();

 switch(get_class($language)){
    case 'German':
        $type = 'Hallo';
        break;
    case 'Egnlish ':
        $type = 'Hello';
        break;
    case 'French':
        $type = 'Bonjour';
        break;
    case 'Spanish':
        $type = 'Holla';
        break;
                   
 }

$type = match(get_class($language)){
    
    'German' => 'Hallo',
    'English'=> 'Hello',
    'French'=>'Bonjour',
    'Spanish' => 'Holla',
};

echo  $type;