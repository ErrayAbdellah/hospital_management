<?php 

    // require 'DbConnection.php';
    // $connection = new DbConnection();
    // $connect = $connection->connection() ;

    class DoctorCrud {
        
        public static function signIn($data)
        {
            global $connect ;
            $qry = "SELECT * FROM users where email like :email and psw like :pwd ";
            $stmt = $connect->prepare($qry) ;
            $stmt->execute([":email"=>$data['email'],":pwd"=>$data['password']]);
            $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() != 0)
            {
                header("location:templates/doctor/doctor_dashboard.php") ;
            }else 
            {
                echo "error" ;
            }
        }
    }