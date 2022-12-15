<?php 


    class Doctor extends User {
        private $doctor_id;
        private $speciality;

        public function __construct($speciality,$fullName, $email, $pwd)
        {
            $this->speciality = $speciality ;
            parent::__construct($fullName, $email, $pwd);
        }
        
        public function getSpeciality(){
            return $this->speciality ;
        }  
       

    }