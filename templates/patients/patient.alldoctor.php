<?php
require "../../_classes/DbConnection.php";
require 'patient_sidebar.php';
require '../header.php';
require "../../services/doctorServices.php";

$doctors = selectAllOfDoctors();
?>

<section class="container col-9 ">
    <div class="d-flex justify-content-between p-3  ">
        <div class="d-flex  ">
            <button type="button" class="btn btn h-75" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
            <form action="" class="px-5">
                <div class="input-group  ">
                    <input type="text" class="form-control" placeholder="Search Doctor " name="search">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn h-100 mx-3" style="background: #34AEAD; color:azure"> <i class="fa fa-search"></i> Search</button>

                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><?= $date->format("y/m/d"); ?></b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <i class="fa fa-calendar" style="font-size:30px; "></i>
            </div>
        </div>
    </div>
    <div class="p-3">
        <h5 class="">All Doctor (2)</h5>
        <table class="table p-3 " style="border-color: #34AEAD ;">
            <thead>
                <tr class="text-center">
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Specialties</th>
                    <th scope="col">Events</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($doctors as $doctor) : ?>
                    <tr>
                        <th scope="row"><?= $doctor["fullName"] ?></th>
                        <td><?= $doctor["email"] ?></td>
                        <td><?= $doctor["speciality"] ?></td>
                        <td>
                            <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
                                <i class="fa fa-eye"></i> View
                            </button>
                            <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
                                <i class="fa fa-heartbeat"></i> session
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php require '../footer.php' ?>