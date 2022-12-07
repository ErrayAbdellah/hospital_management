<?php  
        require "./templates/header.php" ;
        require "./includes/autoloader.php" ;
        require "./includes/functions.php" ;
        require "./services/patientServices.php" ;

        // throwData($nadir) ;
        if(isset($_POST["signUp"])){
                // createUser() ;
                // throwData($_POST) ;
                //  $nadir = new Patient("Nadir Inab","Nadir@gmail.com", 12345, "JT666", "Agadir", "1999/87/77") ;
        }
       
        // if(isset($_POST["signIn"])){
        //         CreateUser() ;
        // }
        
        // require "./templates/sidebar.php" ;
        // $oussama = new Admin ;
        // echo "<hr>" ;
        // echo "here" ;

        require "./templates/SignUp.php" ;
?>    





<?php  require "./templates/footer.php" ; ?>


