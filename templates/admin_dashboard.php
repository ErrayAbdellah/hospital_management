<?php require "header.php" ; ?>

<div class="container pt-3">
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
</div>

<?php require "footer.php" ; ?>