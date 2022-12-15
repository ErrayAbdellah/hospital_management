
<?php require 'admin_sidebar.php';
      require '../header.php';
      require "../../services/patientServices.php" ;


      $data = displayData() ;
      // echo "<pre>" ;
      //   var_dump($data) ;
      // echo "</pre>" ;
      // echo $data[0]["email"] ;
?>


<section class="container col-9 ">
    <div class="d-flex justify-content-between p-3  ">
<div class="d-flex  ">
<button type="button" class="btn btn h-75"  style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
<form action="" class="px-5">
    <div class="input-group  ">
      <input type="text" class="form-control" placeholder="Search Patient  " name="search">
      <div class="input-group-btn">
        <button type="button" class="btn btn h-100 mx-3"  style="background: #34AEAD; color:azure"> <i class="fa fa-search"></i> Search</button>

      </div>
    </div>
  </form></div>
<div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;"><?php echo date('Y-m-d'); ?></b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
                <i class="fa fa-calendar" style="font-size:30px; "></i>
            </div>
        </div>
</div>

<h4 class="">All Patients (3)</h4>


<div class="p-3">

<table class="table p-3 " style="border-color: #34AEAD ;">
  <thead>
    <tr class="text-center">
      <th scope="col" >Name</th>
      <th scope="col">CIN</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Events</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php foreach($data as $key => $value) : ?>
    <tr>
      <th scope="row"><?= $value ?> </th>
      <td><?= $value ?> </td>
      <td><?= "06-78-98-45-67" ?> </td>
      <td><?= $value ?> ?></td>
      <td><?= $value  ?></td>

      <td>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-eye"></i> View
</button>
    <?php endforeach ; ?>
<!-- </td>
    </tr>
    <tr>
      <th scope="row">Issam </th>
      <td>1244</td>
      <td>0712458769</td>
      <td>emhashenudara@gmail.</td>
      <td>2021-12-10</td>


      <td>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-eye"></i> View


</button>
</td>
    </tr>
    <tr>
      <th scope="row">Nadir</th>
      <td>1244</td>
      <td>0712458769</td>
      <td>emhashenudara@gmail.</td>
      <td>2021-12-10</td>


      <td>
<button type="button" class="btn btn"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
        <i class="fa fa-eye"></i> View


</button>
</td>
    </tr> -->
    
  </tbody>
</table>
</div>
</section>





<?php require '../footer.php' ?>