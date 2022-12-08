<div id="signInForm" class="container bg-muted text-dark w-50 p-5 d-block mx-auto ">
    <h2 class="text-center">Welcome Back !</h2>
    <!-- <span class="text-muted mx-auto d-block w-100">Login with your details to continue !</span> -->
    <form action="" method="POST">
    <div class="form-group">
        <label for="email" class="text-dark fw-bold p-3 text-large">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email">
        <small class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="password"  class="text-dark fw-bold p-3">Password</label>
        <input name="pwd" type="email" class="form-control"  placeholder="Enter password">
        <small class="form-text text-muted"></small>
    </div>
    <button name="signIn" class="btn sign text-white fw-bold w-50 p-2 mt-3 d-block mx-auto">Sign In</button>
    <span class="text-muted p-2 ">Don't have an account ? <b id="displaySignUp" class="text-primary"> Sign Up </b>  </span>
    </form>
</div>
<?php require "footer.php" ; ?>