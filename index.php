<?php
require "./templates/header.php";
require "./includes/autoloader.php";
require "./includes/functions.php";
require "./services/patientServices.php";
// =================

$signInStatus = null ;
$signUpStatus = null ;

// ====================
if (isset($_POST["signUp"])) {
       $signInStatus = createUser() ;
}
echo $signInStatus ;
require "./templates/SignUp.php";

?>    



<?php require "./templates/footer.php"; ?>


