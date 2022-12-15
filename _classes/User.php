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

        public function setFullName($fullName){
            $this->fullName = $fullName;
        }
        public function getEmail(){
            return $this->email ;
        }
        
        public function getPwd(){
            return $this->pwd ;
        }
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
       
        public function logOut(){
            if(!isset($_SESSION['']))
            {
                // *************
            }
        }

    }
    