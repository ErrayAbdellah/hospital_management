<?php
/* 
    instead of including multiple files on each page
    spl_autoload_register will include appropriate 
    path of your class sequentially when an 
    object is is instantiated(new Class). 
*/
spl_autoload_register("autoLoader") ;

function autoLoader($className){   
    $path = "../_classes/" ;
    $ext = ".php" ;
    $fullPath = __DIR__."/".$path.$className.$ext ;
    if(!file_exists($fullPath)){
        return false ;
    }
    require $fullPath ;
}