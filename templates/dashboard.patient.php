<?php require 'patient_sidebar.php';
require 'header.php';
?>


<section class="container col-9 ">
    <div class="d-flex justify-content-between py-3 ">
        <div class="d-flex  ">
            <h3 >Home</h3>
        </div>
        <div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <i class="fa fa-calendar" style="font-size:30px; "></i>
            </div>
        </div>
    </div>
    <div style=" margin-right: auto;margin-left: auto;background-image: url(../img/b3.jpg);height: 20rem;background-size: cover;background-position: center; padding-right: 1rem;  ">
        <div class="ps-5 pt-5 w-sm-50 pb-1" id="imgPatient">
            <h5>Welcome !</h5>
            <h4 class="mt-3 fw-bold">hanane hanane.</h4>
            <p class=" mt-2 mb-3 text-muted">
                Haven't any idea about doctors? no problem let's jumping to "All Doctors"
                section or "Sessions" Track your past and future appointments history.
                Also find out the expected arrival time of your doctor or medical consultant.
            </p>
            <h4>Channel a Doctor Here</h4>
            <form action="">
                <div class="input-group w-75   ">
                    <input type="text" class="form-control" placeholder=" Search Doctor and We will Find The Session Available " name="search">
                    <div class="input-group-btn ">
                        <button type="button" class="btn btn h-100 mx-3 " style="background: #34AEAD; color:azure"> <i class="fa fa-search"></i> Search</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
   
   
  

    <div class=" d-flex justify-content-between my-3 ">
        <div class="w-50 py-3">
        <h5 class="mb-2">Status</h5>
    <div class="container text-center" >
        
  <div class=" row row-cols-2 d-flex justify-content-around">
    <div class="col card mb-3" style="width: 45%;">  <div class="d-flex justify-content-between p-3" >
            <span><small class="text-muted">1</small><br><b style="color: #34AEAD; font-size:small;">All Doctors</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <i class="fa fa-medkit" style="font-size:30px; "></i>
            </div>
        </div></div>
    <div class="col card mb-3" style="width: 45%;">  <div class="d-flex justify-content-between p-3 ">
            <span><small class="text-muted">3</small><br><b style="color: #34AEAD;font-size:small;">All Patients</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <i class="fa fa-wheelchair" style="font-size:30px; "></i>
            </div>
        </div></div>
    <div class="col card" style="width: 45%;">  <div class="d-flex  justify-content-between p-3">
            <span><small class="text-muted">5</small><br><b style="color: #34AEAD; font-size:small;">NewBooking</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <i class="fa fa-book" style="font-size:30px; "></i>
            </div>
        </div></div>
    <div class="col card" style="width: 45%;">  <div class="d-flex justify-content-between p-3">
            <span><small class="text-muted">2</small><br><b style="color: #34AEAD; font-size:small;">Today Sessions</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <i class="fa fa-heartbeat" style="font-size:30px; "></i>
            </div>
        </div></div>
  </div>
</div>
</div>
<div class="w-50 p-3">
<h5 class="mb-4" >Your Upcoming Booking</h5>

<table class="table"  style="border-color: #34AEAD ; font-size:smaller">

  <thead>
 
    <tr class="text-muted">
      <th scope="col">Appoint. Number</th>
      <th scope="col">Session Title</th>
      <th scope="col">Name Doctor</th>
      <th scope="col">Sheduled Date & Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Test Session</td>
      <td>Test Doctor</td>
      <td>2050-01-01 18:00</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Test Session</td>
      <td>Test Doctor</td>
      <td>2050-01-01 18:00</td>
    </tr>

  </tbody>
</table>
</div>

    </div>








    <?php require 'footer.php' ?>