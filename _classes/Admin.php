<?php 

    class Admin extends User{
        private $admin_id;

        public function __construct($fullName, $email, $pwd, $admin_id){
            parent::__construct($fullName, $email, $pwd) ;
            $this->admin_id = $admin_id ;
        }
    }