
<?php 
      require '../header.php';
      require 'admin_sidebar.php';
      require '../../_classes/AdminCrud.php';
      if(isset($_POST['addDoctor'])) $admin->addDoctor();
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
<button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn"
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

<form action="admin_doctors.php" method="POST" name="addDoctor"><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Doctor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full name :</label>
            <input type="text" class="form-control" name="fullName">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Specialties :</label>
            <input type="text" class="form-control" name="specialties">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">E-mail :</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password :</label>
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn" style="background: #34AEAD; color:azure">Save</button>
      </div>
    </div>
  </div>
</div></form>




<?php require '../footer.php' ?>