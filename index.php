<?php
       require "./templates/header.php";
       require "./includes/autoloader.php";
       require "./includes/functions.php";
       require "./services/patientServices.php";
// =================
$signInStatus = null ;
$signUpStatus = null ;

// ====================
// if (isset($_POST["signUp"])) {
//        $signInStatus = createUser() ;
// }

// require "./templates/SignUp.php";
require "./templates/SignIn.php" ;

?>    



<script src="./app.js"></script>
<?php require "./templates/footer.php"; ?>


