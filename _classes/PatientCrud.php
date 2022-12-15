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
            $connection = new DbConnection();
            $connect = $connection->connection();

            $id = $_POST['id'];
            $fullName = $_POST['fullName'];
            $adresse = $_POST['adresse'];
            $birthDate = $_POST['birthDate'];
            $email = $_POST['email'];
            $cin = $_POST['CIN'];
            
            $pwd = $_POST['pwd'];
            $query="UPDATE patients SET fullName='$fullName',adresse='$adresse',birthDate='$birthDate',email='$email',CIN='$cin',pwd='$pwd' where id = '$id' ";
            $stmt = $connect->prepare($query);
            $stmt->execute();

        }
        public function deleteAccount(){

        }
        
    }

    
