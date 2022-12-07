<?php


    class Patient extends User {
        public $CIN ;
        public $adresse ;
        public $birthDate ;

        public function __construct($fullName, $email, $pwd, $CIN, $adresse, $birthDate){
            parent::__construct($fullName, $email, $pwd) ;
            $this->CIN = $CIN ;
            $this->adresse = $adresse ;
            $this->birthDate = $birthDate ;
        }
        
    }