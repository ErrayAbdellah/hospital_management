<?php
    // require "./includes/autoloader.php" ;
    // require "./includes/functions.php" ;
    $connection = new DbConnection() ;
    $connect = $connection->connection() ;

    // function fetchdata(){
    //     global $connect ;
    //     $query = "SELECT * FROM dummy" ;
    //     $stmt = $connect->query($query) ;
    //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
    //     return $data ;
    // } 

    
    // function createUser(){
    //     global $connect ;
    //     $data = ["fullName" => $_POST["fullName"], "adresse" => $_POST["adresse"], "email" => $_POST["email"] , "CIN" => $_POST["CIN"], "birthDate" => $_POST["birthDate"], "pwd" => $_POST["pwd"]] ;
    //     $nadir = new Patient(...$data) ;
    //     PatientCrud::createPatient($nadir, $connect) ;
    // }
  