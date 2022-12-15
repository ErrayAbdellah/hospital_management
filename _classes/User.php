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
        public function setEmail($email){
            $this->email = $email;
        }
        public function getPwd(){
            return $this->pwd ;
        }
        public function FullPwd($pwd){
            $this->pwd = $pwd;
        }
        // public function signOut(){
        //     session_destroy() ;
        // }
        
        // public function signIn($email,$psw){
        //     try{
                
        //     }catch()
        //     {

        //     }
        // }
        public function logOut(){
            if(!isset($_SESSION['']))
            {
                // *************
            }
        }

    }