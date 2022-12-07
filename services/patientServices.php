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

    function createUser(){
        global $connect ;
        $data = ["fullName" => $_POST["fullName"], "adresse" => $_POST["adresse"], "email" => $_POST["email"] , "CIN" => $_POST["CIN"], "birthDate" => $_POST["birthDate"], "pwd" => $_POST["pwd"]] ;
        PatientCrud::createPatient($data, $connect) ;

        // $data = ["fullName" => $_POST["fullName"], "adresse" => $_POST["adresse"], "email" => $_POST["email"] , "CIN" => $_POST["CIN"], "birthDate" => $_POST["birthDate"], "pwd" => $_POST["pwd"]] ;
        // $nadir = new Patient(...$data) ;
        // $query = "SELECT * FROM patients WHERE email = :email and fullName = :fullName " ;
        // $stmt = $connect->prepare($query) ;
        // $stmt->execute(["email" => $data["email"], "fullName" => $data["fullName"]]) ;
        // $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        //     if($stmt->rowCount() != 0){ 
        //         $patientExist = "Exist" ;  
        //         return $patientExist ;
        //     }else{
        //         PatientCrud::createPatient($connect, $data) ;
        //         return "Created" ;
        //     }  
        // throwData($data) ;
            // echo "<hr>" ;
        // throwData($nadir) ;
        // PatientCrud::createPatient($nadir, $connect) ;
    }
  