<?php

    $connection = new DbConnection() ;
    $connect = $connection->connection() ;

    function createUser(){
        global $connect ;
        $data = ["fullName" => $_POST["fullName"], "adresse" => $_POST["adresse"], "email" => $_POST["email"] , "CIN" => $_POST["CIN"], "birthDate" => $_POST["birthDate"], "pwd" => $_POST["pwd"]] ;
        $query = "SELECT * FROM patients WHERE email = :email and fullName = :fullName" ;
        $stmt = $connect->prepare($query) ;
        $stmt->execute([":email" => $data["email"], ":fullName" => $data["fullName"]]) ;
        $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        if($stmt->rowCount() != 0){
            return "Patient already exist" ;
        }else{
            PatientCrud::createPatient($data, $connect) ;
            return "Patient created successfully" ;
        }
    }

    function loginPatient(){
        global $connect ;
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $query = "SELECT * FROM patients WHERE email = '$email' and pwd = '$pwd'" ;
        $stmt = $connect->prepare($query) ;
        $stmt->execute() ;
        $stmt->fetchAll(PDO::FETCH_ASSOC) ;
    
        if($stmt->rowCount() != 0){
            header("location: ./templates/patients/patient.dashboard.php");
        }else{
            return "email or password is incorrect" ;
        }
    }
