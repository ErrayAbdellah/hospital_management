
<?php require 'sidebar.php';
      require 'header.php';
?>


<section class="container col-9 ">
    <div class="d-flex justify-content-between p-3  ">
<div class="d-flex  ">
<button type="button" class="btn btn h-75"  style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
<form action="" class="px-5">
    <div class="input-group  ">
      <input type="text" class="form-control" placeholder="Search Doctor " name="search">
      <div class="input-group-btn">
        <button type="button" class="btn btn h-100 mx-3"  style="background: #34AEAD; color:azure"> <i class="fa fa-search"></i> Search</button>

      </div>
    </div>
  </form></div>
<div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
                <i class="fa fa-calendar" style="font-size:30px; "></i>
            </div>
        </div>
</div>
<div class=" p-3 d-flex justify-content-between">
<h4 class="">Add New Doctor</h4>
<button type="button" class="btn btn"
        style="background: #34AEAD; color:azure">
        + Add New

</button>
</div>
<div class="p-3">
<h5 class="">All Doctor (2)</h5>
<table class="table p-3 " style="border-color: #34AEAD ;">
  <thead>
    <tr class="text-center">
      <th scope="col" >Doctor Name</th>
      <th scope="col">Email</th>
      <th scope="col">Specialties</th>
      <th scope="col">Events</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">Test Doctor</th>
      <td>doctor@youcode.ma</td>
      <td>Accident and emergen</td>
      
      <td><button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class='fas fa-pen'></i> Edit

</button>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-eye"></i> View


</button>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-trash"></i> Remove


</button></td>
    </tr>
    <tr>
      <th scope="row">Test Doctor</th>
      <td>doctor@youcode.ma</td>
      <td>Accident and emergen</td>
      
      <td><button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class='fas fa-pen'></i> Edit

</button>
<button type="button" class="btn btn"
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