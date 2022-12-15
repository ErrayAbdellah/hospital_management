<?php require "../header.php" ;
    require '../../_classes/DbConnection.php';
    require '../../_classes/AdminCrud.php';
    require '../../services/AdminServices.php';
    require "admin_sidebar.php" ;
?>

<div class="container col-8 pt-3">
    <div class="d-flex justify-content-between">
        <div class="w-50 d-flex gap-2 ">
            <input type="search" placeholder="Search doctor name or email" class="form-control position-relative">
            <button type="submit" class="btn text-white" style="background: #34AEAD;">Search</button>
        </div>
        <div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;"><?php echo date('Y-m-d'); ?>
        </b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <img src="../../img/icons/calendar.svg" alt="calender">
            </div>
        </div>
    </div>
    <h2 class="fw-semibold my-4">Status</h2>
    <div class="d-flex gap-3">
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;"><?= $admin->counter("doctors") ?></b><br><small class="text-muted">Doctors</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../../img/icons/doctors.svg" alt="doctor">
            </div>
        </div>
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">3</b><br><small class="text-muted">Patients</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../../img/icons/patients.svg" alt="patients">
            </div>
        </div>
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">0</b><br><small class="text-muted">newBooking</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../../img/icons/book.svg" alt="book">
            </div>
        </div>
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">0</b><br><small class="text-muted">Today sessions</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../../img/icons/session.svg" alt="session">
            </div>
        </div>
    </div>
    <div class="d-flex gap-4">
        <div class="w-50 py-4">
            <h4 class="pb-3 fw-semibold" style="color: #34AEAD">Upcoming Appointments until Next Tuesday</h4>
            <p>Here's Quick access to Upcoming Appointments until 7 days More details Available in @Appointment section</p>
            <div class="border rounded">
                <table class="table" style="display: block; height: 180px; overflow: auto;">
                    <thead class="position-sticky top-0 bg-white" style="border-bottom: 3px solid #34AEAD;">
                        <tr>
                        <th scope="col" class="fw-semibold">Appointment number</th>
                        <th scope="col" class="fw-semibold">Patient name</th>
                        <th scope="col" class="fw-semibold">Doctor</th>
                        <th scope="col" class="fw-semibold">Session</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn text-white w-100" style="background: #34AEAD;">Show all appointments</button>
            </div>
        </div>
        <div class="w-50 py-4">
            <h4 class="pb-3 fw-semibold" style="color: #34AEAD">Upcoming Sessions until Next Tuesday</h4>
            <p>Here's Quick access to Upcoming Session that Schedule until 7 days add, Remove and Many features Available in @Schedule section</p>
            <div class="border rounded">
                <table class="table" style="display: block; height: 180px; overflow: auto;">
                    <thead class="position-sticky top-0 bg-white" style="border-bottom: 3px solid #34AEAD;">
                        <tr>
                        <th scope="col" class="fw-semibold">Session Title</th>
                        <th scope="col" class="fw-semibold">Doctor</th>
                        <th scope="col" class="fw-semibold">Schedule Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn text-white w-100" style="background: #34AEAD;">Show all appointments</button>
            </div>
        </div>
    </div>
</div>

<?php require "../footer.php" ; ?>