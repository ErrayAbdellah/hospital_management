<?php 

    class PatientCrud {

        public static function createPatient($data, $connect){
            $query = "INSERT INTO patients(fullName, adresse, birthDate, email , CIN, pwd) VALUES(:fullName, :adresse, :birthDate, :email, :CIN, :pwd)";
            $stmt = $connect->prepare($query) ;
            $stmt->execute([":fullName" => $data["fullName"], ":adresse" => $data["adresse"], ":email" => $data["email"] , ":CIN" => $data["CIN"], ":birthDate" => $data["birthDate"], ":pwd" => $data["pwd"]]);
        }
        public function makeAppointment(){

        }
        public function updateAccount(){

        }
        public function deleteAccount(){

        }
    }
