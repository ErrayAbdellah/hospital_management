<?php
require "./templates/header.php";
require "./includes/autoloader.php";
require "./includes/functions.php";
require "./services/patientServices.php";

if (isset($_POST["signUp"])) {
        createUser() ;
        // $data = ["fullName" => $_POST["fullName"], "adresse" => $_POST["adresse"], "email" => $_POST["email"], "CIN" => $_POST["CIN"], "birthDate" => $_POST["birthDate"], "pwd" => $_POST["pwd"]];
        // $nadir = new Patient(...$data) ; 
        // throwData($nadir) ;
}

// if(isset($_POST["signIn"])){
//         CreateUser() ;
// }

// require "./templates/sidebar.php" ;
// $oussama = new Admin ;
// echo "<hr>" ;
// echo "here" ;

require "./templates/SignUp.php";
?>    





<?php require "./templates/footer.php"; ?>


