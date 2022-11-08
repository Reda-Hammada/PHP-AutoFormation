<?php

function returnStringLength(string $string){

 $Index = 0; 

 while($string):

   if(empty($string[$Index])):

     break;

   endif;

   $Index++;

 endwhile;

 return $Index;

};



echo returnStringLength('Reda')

?> 