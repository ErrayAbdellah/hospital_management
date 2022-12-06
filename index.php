<?php  
        require "./templates/header.php" ;
        require "./includes/autoloader.php" ;
        
        require "./includes/functions.php" ;
        require "./services/userCrud.php" ;
        if(isset($_POST["signUp"])){
                echo "hi" ;
        }
        if(isset($_POST["signIn"])){
                CreateUser() ;
        }
        
        require "./templates/sidebar.php" ;
        $oussama = new Admin ;
        echo "<hr>" ;
        echo "here" ;
        throwData($oussama) ;
?>    





<?php  require "./templates/footer.php" ; ?>


