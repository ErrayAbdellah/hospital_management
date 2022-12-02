<?php
/* 
    instead of including multiple files on each page
    spl_autoload_register will include appropriate 
    path of your class sequentially when an 
    object is is instantiated(new Class). 
*/

spl_autoload_register() ;
