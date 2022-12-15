<?php
require "./templates/header.php";
require "./includes/autoloader.php";
require "./includes/functions.php";
require "./services/patientServices.php";
require "./services/adminServices.php";

$signInStatus = null;
$signUpStatus = null;
if (isset($_POST["signUp"])) {
       $signUpStatus = createUser();
}
if (isset($_POST["signIn"])) {
       signInAdmin();
       $email = $_POST["email"];
       $password = $_POST["pwd"];
       if (strlen($email) != 0 && strlen($password) != 0) {
              loginPatient();
       }
       $data = ["email" => $email, "password" => $password];
       DoctorCrud::signIn($data);
       if (strlen($email) == 0) {
              $emailStatus = "please fill the email input";
       }
       if (strlen($password) == 0) {
              $pwdStatus = "please fill the password input";
       }
}

require "./templates/welcome.php" ;
?>


<?php if(isset($_GET["action"]) && $_GET["action"] == "signIn") {
       require "./templates/SignIn.php" ;
} ?>
<?php if(isset($_GET["action"]) && $_GET["action"] == "signUp") {
       require "./templates/SignUp.php" ;
} ?>


<script src="./app.js"></script>
<?php require "./templates/footer.php"; ?>