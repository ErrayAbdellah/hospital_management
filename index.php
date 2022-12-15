<?php
       require "./templates/header.php";
       require "./includes/autoloader.php" ;
       require "./includes/functions.php";
       require "./services/patientServices.php";
// =================
$signInStatus = null ;
$signUpStatus = null ;

require "./templates/SignIn.php" ;
require "./templates/SignUp.php" ;


?>    


<script src="./app.js"></script>
<?php require "./templates/footer.php"; ?>


