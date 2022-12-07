<?php 

    class PatientCrud {

        public static function createPatient($data, $connect){
            $query = "INSERT INTO patients(fullName, adresse, birthDate, email , CIN, pwd) VALUES(:fullName, :adresse, :email,:CIN, :birthDate, :pwd)";
            $stmt = $connect->prepare($query) ;
            $stmt->execute([":fullName" => $data["fullName"], ":adresse" => $data["adresse"], ":email" => $data["email"] , ":CIN" => $data["CIN"], ":birthDate" => $data["birthDate"], ":pwd" => $data["pwd"]]);
        }
            //  throwData($data) ;
            // $query = "INSERT INYO patient(fullName, adresse, birthDate, email , CIN, pwd) VALUES( :fullName, :adresse, :birthDate, :email, :CIN, :pwd)";
            // $stmt = $connect->prepare($query) ;
            // $stmt->excute(["fullName" => $data->fullName, "adresse" => $data->adresse, "birthDate" => $data->birthDate, "email" => $data->birthDate, "CIN" => $data["CIN"], "pwd", $data["pwd"]]) ;
        }