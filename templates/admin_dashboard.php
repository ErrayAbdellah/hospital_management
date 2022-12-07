<?php require "header.php" ; ?>
<?php require "sidebar.php" ; ?>

<div class="container col-9 pt-3">
    <div class="d-flex justify-content-between">
        <div class="w-50 d-flex gap-2 ">
            <input type="search" placeholder="Search doctor name or email" class="form-control position-relative">
            <button type="submit" class="btn text-white" style="background: #34AEAD;">Search</button>
        </div>
        <div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <img src="../img/icons/calendar.svg" alt="calender">
            </div>
        </div>
    </div>
    <h2 class="fw-semibold my-4">Status</h2>
    <div class="d-flex gap-3">
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">1</b><br><small class="text-muted">Doctors</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../img/icons/doctors.svg" alt="doctor">
            </div>
        </div>
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">3</b><br><small class="text-muted">Patients</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../img/icons/patients.svg" alt="patients">
            </div>
        </div>
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">0</b><br><small class="text-muted">newBooking</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../img/icons/book.svg" alt="book">
            </div>
        </div>
        <div class="d-flex gap-2 col rounded p-2 justify-content-between" style="border: 1px solid #34AEAD;">
            <span> <b style="color: #34AEAD;">0</b><br><small class="text-muted">Today sessions</small></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px; background: #D9D9D9;">
                <img src="../img/icons/session.svg" alt="session">
            </div>
        </div>
    </div>
    <div>
        <h2>Upcoming Appointments until Next Tuesday</h2>
        <p>Here's Quick access to Upcoming Appointments until 7 days More details Available in @Appointment section</p>
    </div>
</div>

<?php require "footer.php" ; ?>