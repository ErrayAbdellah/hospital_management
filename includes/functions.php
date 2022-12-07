<?php

function throwData($data){
    echo "<pre>" ;
        var_dump($data) ;
    echo "</pre>" ;
}

function isConnected(){
    if(session_status() === PHP_SESSION_NONE){
        session_start() ;
    }
    return !empty($_SESSION["test"]) ;
}

function pwdIsMatched($pwd1,$pwd2){
    if($pwd1 === $pwd2 ){
        return true ; 
    }else{
        return false ;
    }
}


function isUnregistered(){
    if($_SESSION["user"] === null){
        header("location: http://localhost/hospital_management/") ;
    }
}

