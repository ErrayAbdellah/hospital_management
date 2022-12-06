<?php  
        require "./templates/header.php" ;
        require "./includes/functions.php" ;
        require "./services/userCrud.php" ;
        if(isset($_POST["signUp"])){
                
        }
        if(isset($_POST["signIn"])){
                CreateUser() ;
        }
        
        require "./templates/SignIn.php" ;
?>    




<?php  require "./templates/footer.php" ; ?>


