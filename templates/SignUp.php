
<div id="signUpForm" class="container bg-muted text-dark w-50 p-1 d-block mx-auto mt-2 ">
    
    <h2 class="text-center fw-bold">Let's get Started !</h2>
    <!-- <span class="text-muted mx-auto d-block w-100">Login with your details to continue !</span>  -->
    <form action="" method="POST">
    <div class="form-group mx-5">
        <i class="fa-solid fa-user"></i>
        <label for="name" class="text-dark fw-bold p-1  text-large">Full Name :</label>
        <input name="fullName" type="text" class="form-control w-75" placeholder="Enter Name">
        <small class="form-text text-danger px-2 fw-bold"> </small> <i class="fa-sharp fa-solid fa-face-angry "></i>
    </div>
    <div class="form-group mx-5">
        <i class="fa-solid fa-location-pin"></i>
        <label for="adresse"  class="text-dark fw-bold p-1 ">Adresse :</label>
        <input name="adresse" type="text" class="form-control w-75"  placeholder="Enter Adresse">
        <small class="form-text text-danger px-2 fw-bold "></small> <i class="fa-sharp fa-solid fa-face-angry "></i>
    </div>
    <div class="form-group mx-5">
        <i class="fa-solid fa-envelope"></i>
        <label for="email"  class="text-dark fw-bold p-1 ">Email :</label>
        <input name="email" type="email" class="form-control w-75"  placeholder="Enter Email">
        <small class="form-text text-danger px-2 fw-bold"></small> <i class="fa-sharp fa-solid fa-face-angry "></i>
    </div>
    <div class="form-group mx-5">
        <i class="fa-solid fa-id-card"></i>
        <label for="CIN"  class="text-dark fw-bold p-1 ">CIN :</label>
        <input name="CIN" type="text" class="form-control w-75 "  placeholder="Enter CIN">
        <small class="form-text text-danger px-2 fw-bold"></small> <i class="fa-sharp fa-solid fa-face-angry "></i>
    </div>
    <div class="form-group mx-5">
        <i class="fa-solid fa-calendar-days"></i>
        <label for="Birth Day"  class="text-dark fw-bold p-1 ">Date Of Birth :</label>
        <input name="birthDate" type="date" class="form-control w-75"  placeholder="Enter Birth day">
        <small class="form-text text-danger px-2 fw-bold"></small> <i class="fa-sharp fa-solid fa-face-angry "></i>
    </div>
    <div class="form-group mx-5">
        <i class="fa-solid fa-lock"></i>
        <label for="Pwd"  class="text-dark fw-bold p-1 ">Password :</label>
        <input name="pwd" type="password" class="form-control w-75"  placeholder="Password">
        <small class="form-text text-danger px-2 fw-bold"></small> <i class="fa-sharp fa-solid fa-face-angry"></i>
    </div>
    <div class="form-group mx-5">
        <i class="fa-solid fa-lock"></i>
        <label for="ConfirmedPwd"  class="text-dark fw-bold p-1 ">Confirm Password :</label>
        <input name="cPwd" type="password" class="form-control w-75"  placeholder="confimed Password">
        <small class="form-text text-danger fw-bold px-2"></small>
    </div>
    <div class="p-2 mt-3 mx-5 ">
        <button id="submitData" name="signUp" class="btn sign fw-bold text-white">Sign Up</button>
        <span class="text-muted border border-2"> already Have an account <b  id="isSignedIn" class="muted">Sign In</b> </span>
    </div>
    </form>
</div>
