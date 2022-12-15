<?php 


    class Doctor extends User {
        private $doctor_id;
        private $speciality;

        public function __construct($doctor_id,$speciality,$fullName, $email, $pwd)
        {
            $this->doctor_id = $doctor_id;
            $this->speciality = $speciality ;
            parent::__construct($fullName, $email, $pwd);
        }

        public function getDoctorId(){
            return $this->doctor_id ;
        }  
        public function setDoctorId($doctor_id)
        {
            $this->doctor_id = $doctor_id ;
        }
        public function getSpeciality(){
            return $this->speciality ;
        }  
        public function setSpeciality($speciality)
        {
            $this->speciality = $speciality ;
        }

    }