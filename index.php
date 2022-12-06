<?php  
        require "./templates/header.php" ;
        require "./includes/functions.php" ;
        if(isset($_POST["signUp"])){
                
        }

        if(isset($_POST["signIn"])){
                throwData($_POST) ;
        }
        require "./services/test.php" ;
        require "./templates/SignIn.php" ;
?>    




<?php  require "./templates/footer.php" ; ?>


