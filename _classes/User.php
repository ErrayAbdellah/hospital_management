<?php  

    class User {
        
        public $fullName ;
        public $email ;
        protected $pwd ;

        public function __construct($fullName, $email, $pwd){
            $this->fullName = $fullName ;
            $this->email = $email ;
            $this->pwd = $pwd ; 
        }
        

        public function getFullName(){
            return $this->fullName ;
        }
<<<<<<< HEAD

        public function setFullName($fullName){
            $this->fullName = $fullName;
        }
=======
       
>>>>>>> a7375ad4819ddb8f4349f7f82946c93b55321243
        public function getEmail(){
            return $this->email ;
        }
        
        public function getPwd(){
            return $this->pwd ;
        }
        public static function signIn($data)
        {
            global $connect ;
            $qry = "SELECT * FROM users where email like :email and psw like :pwd role = admin";
            $stmt = $connect->prepare($qry) ;
            $stmt->execute([":email"=>$data['email'],":pwd"=>$data['password']]);
            $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() != 0)
            {
                header("location:templates/doctor/doctor_dashboard.php") ;
            }else 
            {
                $qry = "SELECT * FROM users where email like :email and psw like :pwd ";
                $stmt = $connect->prepare($qry) ;
                $stmt->execute([":email"=>$data['email'],":pwd"=>$data['password']]);
                $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($stmt->rowCount() != 0)
                {
                    header("location:templates/doctor/doctor_dashboard.php") ;
                }else 
                {
                    $qry = "SELECT * FROM users where email like :email and psw like :pwd ";
                    $stmt = $connect->prepare($qry) ;
                    $stmt->execute([":email"=>$data['email'],":pwd"=>$data['password']]);
                    $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                }
            }
        }
       
        public function logOut(){
            if(!isset($_SESSION['']))
            {
                // *************
            }
        }

    }
    