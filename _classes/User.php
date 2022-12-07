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
        // public function signOut(){
        //     session_destroy() ;
        // }
    }