<?php


    class AdminCrud {
        public function addDoctor($data, $connect){
            $query = "insert into doctor(name, email, pwd, specialties) values(:name, :email, :pwd, :specialties)";
            $stmt = $connect->prepare($query);
            $stmt->execute([":name" => $data["name"], ":email" => $data["email"], ":pwd" => $data["pwd"], ":specialties" => $data["specialties"]]) ;
        }
        public function upDateDoctor(){

        }
        public function deleteDoctor(){

        }
        public function addSession(){

        }
        public function deleteSession(){

        }
        public function displayPatientData(){

        }
    }

    