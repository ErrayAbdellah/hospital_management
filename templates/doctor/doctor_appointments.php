<?php
      require 'doctor_sidebar.php';
      require '../header.php';

?>

<section class="container col-9 ">
  <div class="d-flex justify-content-between p-3">
    <div class="d-flex ">
      <button type="button" class="btn btn" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
      <h3 class="px-3">Appointment Manager</h3>
    </div>
    <div class="d-flex gap-2">
      <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
      <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
        <i class="fa fa-calendar" style="font-size:30px; "></i>
      </div>
    </div>
  </div>
  <h4 class="p-3">My Appointments (4)</h4>
  <div class="input-group mb-3 p-3 ">
    <span class="input-group-text d-flex justify-content-center w-25  " id="basic-addon1">Date :</span>
    <input type="text" class="form-control bg-white" placeholder="jj/mm/aaaa" aria-label="Recipient's username" aria-describedby="basic-addon2 ">
    <span class="btn input-group-text w-25 d-flex justify-content-center " id="basic-addon2" style="background: #34AEAD; color:azure"><i class="fa fa-filter "></i> Filter</span>
  </div>
  <div class="p-3">
    <table class="table p-3 " style="border-color: #34AEAD ;">
      <thead>
        <tr class="text-center">
          <th scope="col">Patient name</th>
          <th scope="col">Appointment number</th>
          <th scope="col">Session Title</th>
          <th scope="col">Session Date & Time</th>
          <th scope="col">Appointment Date</th>
          <th scope="col">Events</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <th scope="row">Issam</th>
          <td>2</td>
          <td>Test Session</td>
          <td>2050-01-01 @18:00</td>
          <td>2022-10-31</td>
          <td><button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
              Cancel
            </button></td>
        </tr>

        <tr>
          <th scope="row">Nadir</th>
          <td>3</td>
          <td>Test Session</td>
          <td>2050-01-01 @19:00</td>
          <td>2022-10-31</td>
          <td><button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
              Cancel

            </button></td>
        </tr>
        <tr>
          <th scope="row">Abdellah</th>
          <td>4</td>
          <td>Test Session</td>
          <td>2050-01-01 @20:00</td>
          <td>2022-10-31</td>
          <td><button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
              Cancel

            </button></td>
        </tr>
        <tr>
          <th scope="row">Nouhaila</th>
          <td>5</td>
          <td>Test Session</td>
          <td>2050-01-01 @21:00</td>
          <td>2022-10-31</td>
          <td><button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
              Cancel
            </button></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>





<?php require '../footer.php' ?>