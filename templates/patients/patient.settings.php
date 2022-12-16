<?php 
      require 'patient_sidebar.php';
      require '../header.php';
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
    <h6 class="card-title " data-bs-toggle="modal" data-bs-target="#exampleModal1" >Edit your Account Details & Change Password</h6>
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
<form action="admin_doctors.php" method="POST" ><div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">updateAccount</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="doctorId" name="doctorId" value="">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full name :</label>
            <input type="text" class="form-control" name="fullName"  value="">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">adresse :</label>
            <input type="text" class="form-control" name="adresse"  value="">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email :</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="doctorEmail" value="">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">CIN :</label>
            <input type="password" class="form-control"  name="CIN" >
          </div><div class="mb-3">
            <label for="recipient-name" class="col-form-label">birthDate :</label>
            <input type="password" class="form-control"  name="birthDate" >
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password :</label>
            <input type="password" class="form-control"  name="pwd" >
          </div>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn" style="background: #34AEAD; color:azure" name="updateDoctor">Update</button>
      </div>
    </div>
  </div>
</div></form>





<?php require '../footer.php' ?>