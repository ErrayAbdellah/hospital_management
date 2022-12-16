<?php 
require 'admin_sidebar.php';
require "../header.php";
// require "../../includes/autoloader.php";
require "../../services/patientServices.php";
require "../../_classes/AdminCrud.php" ;

$patients = selectAllPatients();
?>

<section class="container col-9 ">
  <div class="d-flex justify-content-between p-3  ">
    <div class="d-flex  ">
      <button type="button" class="btn btn h-75" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
      <form action="" class="px-5">
        <div class="input-group  ">
          <input type="text" class="form-control" placeholder="Search Patient  " name="search">
          <div class="input-group-btn">
            <button type="button" class="btn btn h-100 mx-3" style="background: #34AEAD; color:azure"> <i class="fa fa-search"></i> Search</button>

          </div>
        </div>
      </form>
    </div>
    <div class="d-flex gap-2">
      <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;"><?php echo date('Y-m-d'); ?></b></span>
      <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
        <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
        <i class="fa fa-calendar" style="font-size:30px; "></i>
      </div>
    </div>
  </div>

  <h4 class="">All Patients (<?= AdminCrud::counter("patients") ?>)</h4>


  <div class="p-3">

    <table class="table p-3 " style="border-color: #34AEAD ;">
      <thead>
        <tr class="text-center">
          <th scope="col">Name</th>
          <th scope="col">patient Id</th>
          <th scope="col">CIN</th>
          <th scope="col">Email</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Events</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach ($patients as $patient) : ?>
          <tr>
            <th scope="row"><?= $patient["fullName"];  ?> </th>
            <td><?= $patient["id_patient"];  ?> </td>
            <td><?= $patient["CIN"];  ?> </td>
            <td><?= $patient["email"];  ?> </td>
            <td><?= $patient["birthDate"];  ?> </td>
            <td>
              <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
                <i class="fa fa-eye"></i> View
              </button>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>





<?php require '../footer.php' ?>