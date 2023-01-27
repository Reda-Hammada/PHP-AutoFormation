<?php 
 class German{}
 
 $language =  new German();

$type = match(get_class($language)){
    
    'German' => 'Hallo',
    'English'=> 'Hello',
    'French'=>'Bonjour',
    'Spanish' => 'Holla',
};

echo  $type;