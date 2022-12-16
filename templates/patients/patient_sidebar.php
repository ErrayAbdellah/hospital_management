<?php
    session_start() ;
    if(isset($_GET["action"]) && $_GET["action"] == "signOut"){
        session_destroy() ;
        header("location: http://localhost/hospital_management/") ;
    }
    $date =  new DateTime("", new DateTimeZone("Africa/Casablanca")) ;

?>
<div class="row">
<section class="d-flex flex-column flex-shrink-0 p-3 vh-100 border-end col-3">
    <div>
        <div class="d-flex justify-content-center align-items-center gap-4">
            <img src="../../img/user.png" width="75" class="rounded-circle text-center">
            <p class="mb-0"><b><?= $_SESSION["patient"] ?></b><br><span class="text-muted"><?= $_SESSION["email"] ?></span></p>
        </div>
        <div class="w-100 d-flex justify-content-center my-4">
            <button class="btn text-white w-75 d-flex justify-content-center" style="background: #34AEAD;"> <a href="<?= $_SERVER["PHP_SELF"]?>?&action=signOut">Log out</a></button>
        </div>
        <hr>
    </div>
    <div>
        <a href="patient.dashboard.php" class="text-decoration-none d-flex gap-4 ms-5 py-2" style="color: #34AEAD;">
            <img src="../../img/icons/dashboard.svg" alt=" dashboard">
            <p class="mb-0">Home</p>
        </a>
        <a href="patient.alldoctor.php" class="text-decoration-none d-flex gap-4 ms-5 py-2" style="color: #34AEAD;">
            <img src="../../img/icons/doctors.svg" alt=" doctors">
            <p class="mb-0">All Doctors</p>
        </a>
        <a href="patient.scheduledsessions.php" class="text-decoration-none d-flex gap-4 ms-5 py-2" style="color: #34AEAD;">
            <img src="../../img/icons/session.svg" alt=" schedule">
            <p class="mb-0">Scheduled Sessions</p>
        </a>
        <a href="patient.bookings.php" class="text-decoration-none d-flex gap-4 ms-5 py-2" style="color: #34AEAD;">
            <img src="../../img/icons/book.svg" alt=" book">
            <p class="mb-0">My booking</p>
        </a>
        <a href="patient.settings.php" class="text-decoration-none d-flex gap-4 ms-5 py-2" style="color: #34AEAD;">
            <img src="../../img/icons/settings.svg" alt=" doctors">
            <p class="mb-0">Settings</p>
        </a>
        
    </div> 
</section>