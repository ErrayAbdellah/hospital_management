
<?php 
      require '../header.php';
      require 'admin_sidebar.php';
      require '../../_classes/DbConnection.php';
      require '../../_classes/AdminCrud.php';
      require '../../services/AdminServices.php';
      if(isset($_POST['addDoctor'])) createDoctor();
      if(isset($_POST['updateDoctor'])) $admin->updateDoctor();
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
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;"><?php echo date('Y-m-d'); ?></b></span>
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
<h5 class="">All Doctor <?= $admin->counter("doctors") ?></h5>
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
    <?php
      $admin->displayDoctor();
    ?>
  </tbody>
</table>
</div>
</section>

<form action="admin_doctors.php" method="POST" ><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Doctor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="doctorId" name="doctorId" value="">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full name :</label>
            <input type="text" class="form-control" name="fullName" id="doctorName" value="">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Specialties :</label>
            <input type="text" class="form-control" name="specialties" id="doctorSpeciality" value="">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email :</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="doctorEmail" value="">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password :</label>
            <input type="password" class="form-control" aria-describedby="passwordHelpInline" name="password" id="doctorPassword" value="">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn" style="background: #34AEAD; color:azure" name="addDoctor">Save</button>
        <button type="submit" class="btn btn" style="background: #34AEAD; color:azure" name="updateDoctor">Update</button>
      </div>
    </div>
  </div>
</div></form>


<script>
  function editDoctor(id){
    send_data({id:id}, 'edit-doctor');
  }

function send_data(obj, type){
  var form = new FormData();
  for(key in obj){form.append(key,obj[key]);}
  form.append('data_type',type);

  var ajax = new XMLHttpRequest();
  ajax.addEventListener('readystatechange',function(){
    if(ajax.readyState == 4){
      if(ajax.status == 200){
        handle_result(ajax.responseText);
      }else{
        alert("an error occurred");
      }
    }
  });
  ajax.open('POST','controller.php',true);
  ajax.send(form);
}

function handle_result(result){
  let object = JSON.parse(result);
  document.getElementById('doctorId').value = object.data.id;
  document.getElementById('doctorName').value = object.data.name;
  document.getElementById('doctorSpeciality').value = object.data.specialties;
  document.getElementById('doctorEmail').value = object.data.email;
  document.getElementById('doctorPassword').value = object.data.pwd;
}
</script>

<?php require '../footer.php' ?>