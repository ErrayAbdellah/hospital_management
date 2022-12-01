<?php
/* 
    instead of including multiple files on each page
    spl_autoload_register will include appropriate 
    path of your classe sequentially when an 
    object is is instantiated (new Class). 
*/

spl_autoload_register("autoLoader") ;

function autoLoader($className){   
    $path = "../classes/" ;
    $ext = ".php" ;
    $fullPath = __DIR__."/".$path.$className.$ext ;
    if(!file_exists($fullPath)){
        return false ;
    }
     require $fullPath ;
}