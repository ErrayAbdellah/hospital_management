<?php require 'admin_sidebar.php';
      require 'header.php';


?>

<section class="container col-9 ">
  <div class="d-flex justify-content-between p-3">
    <div class="d-flex ">
      <button type="button" class="btn btn" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
      <h3 class="px-3">Shedule Manager</h3>
    </div>
    <div class="d-flex gap-2">
      <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
      <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
        <i class="fa fa-calendar" style="font-size:30px; "></i>
      </div>
    </div>
  </div>
  <div class="d-flex p-3">
  <h4 class="">Schedule a Session</h4>
  <button type="button" class="btn btn mx-3 " style="background: #34AEAD; color:azure">+ Add a Session</button>
  </div>
  <h5>All Sessions (2)</h5>
  <div class="input-group mb-3 p-3 ">
    <span class="input-group-text d-flex justify-content-center  " id="basic-addon1">Date :</span>
    
    <input type="text" class="form-control bg-white" placeholder="jj/mm/aaaa" aria-label="Recipient's username" aria-describedby="basic-addon2 ">
    <label class="input-group-text" for="inputGroupSelect01">Doctor:</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Choose Doctor Name from the list</option>
    <option value="1">Nadir</option>
    <option value="2">Issam</option>
    <option value="3">Abdellah</option>
  </select>
    <span class="btn input-group-text   d-flex justify-content-center " id="basic-addon2" style="background: #34AEAD; color:azure"><i class="fa fa-filter "></i> Filter</span>
  </div>
  <div class="p-3">
    <table class="table p-3 " style="border-color: #34AEAD ;">
      <thead>
        <tr class="text-center">
          <th scope="col">Session Title</th>
          <th scope="col">Doctor</th>
          <th scope="col">Sheduled Date & Time</th>
          <th scope="col">Max num that can be booked</th>
          <th scope="col">Events</th>
          
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <th scope="row">Test Session</th>
          <td>Test Doctor</td>
          <td>2050-01-01 18:00</td>
          <td>50</td>
          
          <td><button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-eye"></i> View


</button>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-trash"></i> Remove


</button></td>
        </tr>
        <tr>
          <th scope="row">Test Session</th>
          <td>Test Doctor</td>
          <td>2050-01-01 18:00</td>
          <td>50</td>
          
          <td><button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-eye"></i> View


</button>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-trash"></i> Remove


</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>





<?php require 'footer.php' ?>