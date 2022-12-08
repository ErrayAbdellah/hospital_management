<?php require 'patient_sidebar.php';
      require 'header.php';


?>

<section class="container col-9 ">
  <div class="d-flex justify-content-between p-3">
    <div class="d-flex ">
      <button type="button" class="btn btn" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
      <h3 class="px-3">My Bookings history</h3>
    </div>
    <div class="d-flex gap-2">
      <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
      <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
        <i class="fa fa-calendar" style="font-size:30px; "></i>
      </div>
    </div>
  </div>
  <h4 class="p-3">My Bookings (2)</h4>
  <div class="input-group mb-3 p-3 ">
    <span class="input-group-text d-flex justify-content-center w-25  " id="basic-addon1">Date :</span>
    <input type="text" class="form-control bg-white" placeholder="jj/mm/aaaa" aria-label="Recipient's username" aria-describedby="basic-addon2 ">
    <span class="btn input-group-text w-25 d-flex justify-content-center " id="basic-addon2" style="background: #34AEAD; color:azure"><i class="fa fa-filter "></i> Filter</span>
  </div>
  <div class="p-3 d-flex justify-content-between  ">
  
  <div class="card shadow p-3 w-50 mb-5 bg-body rounded m-2" >
  <div class="card-body">
    <h6 class="card-title" >Booking Date: 2022-10-31</h6>
    <h6 class="card-title" >Reference Number: OC-000-2</h6>
    <h4 class="card-title" style="color: #34AEAD;">Test Session</h4>
    <h5 class="card-title" >Appointment Number:</h5>
    <h3 class="card-title" >01</h3>
    <h6 class="card-subtitle mb-2 text-muted">Test Doctor</h6>
    <h6 class="card-subtitle mb-2 text-muted">2050-01-01</h6>
    
    <p class="card-text">Starts: @18:00 (24h)</p>
    <button class="btn btn w-100 "  style="background: #34AEAD; color:azure" type="button">Book Now</button>
  </div>
</div>

<div class="card shadow p-3 w-50 mb-5 bg-body rounded m-2" >
  <div class="card-body">
    <h6 class="card-title" >Booking Date: 2022-10-31</h6>
    <h6 class="card-title" >Reference Number: OC-000-2</h6>
    <h4 class="card-title" style="color: #34AEAD;">Test Session</h4>
    <h5 class="card-title" >Appointment Number:</h5>
    <h3 class="card-title" >02</h3>
    <h6 class="card-subtitle mb-2 text-muted">Test Doctor</h6>
    <h6 class="card-subtitle mb-2 text-muted">2050-01-01</h6>
    
    <p class="card-text">Starts: @18:00 (24h)</p>
    <button class="btn btn w-100 "  style="background: #34AEAD; color:azure" type="button">Book Now</button>
  </div>
</div>
  </div>
</section>





<?php require 'footer.php' ?>