<?php
    require "header.php" ;

    $emailStatus = null;
    $pwdStatus = null;

    if (isset($_POST['signIn'])) {
        $email = $_POST["email"];
        $password = $_POST["pwd"];
        $data = ["email" => $email,"password"=>$password];

        DoctorCrud::signIn($data);
        if (strlen($email) == 0) {
            $emailStatus = "please fill the email input" ;
        }
        if (strlen($password) == 0) {
            $pwdStatus = "please fill the password input" ;
        }
    }
?>
<div id="signInForm" class="container bg-muted text-dark w-50 p-5 d-block mx-auto ">
    <h2 class="text-center">Welcome Back !</h2>
    <!-- <span class="text-muted mx-auto d-block w-100">Login with your details to continue !</span> -->
    <form action="" method="POST">
    <div class="form-group">
        <label for="email" class="text-dark fw-bold p-3 text-large">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email">
        <?php if($emailStatus) : ?> 
        <p class="text-danger"><?= $emailStatus ?></p>
        <?php endif ; ?> 
        <small class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="password"  class="text-dark fw-bold p-3">Password</label>
        <input name="pwd" type="password" class="form-control"  placeholder="Enter password">
        <?php if($pwdStatus) : ?> 
        <p class="text-danger"><?= $pwdStatus ?></p>
        <?php endif ; ?> 
        <small class="form-text text-muted"></small>
    </div>
    <button name="signIn" class="btn sign text-white fw-bold w-50 p-2 my-3 d-block mx-auto" style="background: #34AEAD">Sign In</button>
    <span class="text-muted p-2 ">Don't have an account ? <b id="displaySignUp" class="text-primary"> Sign Up </b>  </span>
    </form>
</div>
<?php require "footer.php" ; ?>