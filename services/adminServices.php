<?php

    $connection = new DbConnection() ;
    $connect = $connection->connection() ;

    function createDoctor(){
        global $connect;
        global $admin;
        $data = ["name" => $_POST["fullName"], "email" => $_POST["email"], "pwd" => $_POST["password"], "specialties" => $_POST["specialties"]];
        $query = "select * from doctor where name = :name and email = :email";
        $stmt = $connect->prepare($query);
        $stmt->execute([":name" => $data["name"], ":email" => $data["email"]]);
        $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        if($stmt->rowCount() != 0){
            return "Doctor already exist" ;
        }else{
            $admin->addDoctor($data, $connect) ;
            return "Doctor created successfully" ;
        }
    }