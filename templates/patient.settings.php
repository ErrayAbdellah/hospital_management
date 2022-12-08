<?php require 'patient_sidebar.php';
      require 'header.php';


?>

<section class="container col-9 ">
  <div class="d-flex justify-content-between p-3">
    <div class="d-flex ">
      <button type="button" class="btn btn" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
      <h3 class="px-3">Settings</h3>
    </div>
    <div class="d-flex gap-2">
      <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
      <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
        <i class="fa fa-calendar" style="font-size:30px; "></i>
      </div>
    </div>
  </div>
 
  <div class="p-3   ">
  <div class="card shadow p-1 w-100  bg-body rounded m-2" >
  <div class="card-body  d-flex justify-content-start align-items-center gap-4">
  <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <i class="fa fa-medkit" style="font-size:30px; "></i>
      </div>
      <div class=" ">
    <h4 class="card-title " style="color: #34AEAD;">Account Settings</h4>
    <h6 class="card-title" >Edit your Account Details & Change Password</h6>
    </div>
  </div>
</div>
<div class="card shadow p-1 w-100  bg-body rounded m-2" >
  <div class="card-body  d-flex justify-content-start align-items-center gap-4">
  <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <i class="fa fa-eye" style="font-size:30px; "></i>
      </div>
      <div class=" ">
    <h4 class="card-title " style="color: #34AEAD;">View Account Details</h4>
    <h6 class="card-title" >View Personal information About Your Account</h6>
    </div>
  </div>
</div>
<div class="card shadow p-1 w-100  bg-body rounded m-2" >
  <div class="card-body  d-flex justify-content-start align-items-center gap-4">
  <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <i class="	fa fa-wheelchair" style="font-size:30px; "></i>
      </div>
      <div class=" ">
    <h4 class="card-title " style="color: red;">Delete Account</h4>
    <h6 class="card-title" >Will Permanently Remove your Account</h6>
    </div>
  </div>
</div>


  </div>
</section>





<?php require 'footer.php' ?>