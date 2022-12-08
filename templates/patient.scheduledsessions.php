<?php require 'sidebar.php';
require 'header.php';
?>


<section class="container col-9 ">
    <div class="d-flex justify-content-between p-3  ">
        <div class="d-flex  ">
            <button type="button" class="btn btn h-75" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
            <form action="" class="px-5">
                <div class="input-group  ">
                    <input type="text" class="form-control" placeholder=" Search Doctor name " name="search">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn h-100 mx-3" style="background: #34AEAD; color:azure"> <i class="fa fa-search"></i> Search</button>

                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex gap-2">
            <span><small class="text-muted">Today's Date</small><br><b style="color: #34AEAD;">2022-12-01</b></span>
            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                <!-- <img src="../img/icons/calendar.svg" alt="calender"> -->
                <i class="fa fa-calendar" style="font-size:30px; "></i>
            </div>
        </div>
    </div>
    <div class="p-3">
        <h5 class="m-4">All Sessions(1)</h5>
        <div class="card w-100 shadow p-3 mb-5 bg-body rounded" >
  <div class="card-body">
    <h4 class="card-title" style="color: #34AEAD;">Test Session</h4>
    <h6 class="card-subtitle mb-2 text-muted">Test Doctor</h6>
    <h6 class="card-subtitle mb-2 text-muted">2050-01-01</h6>
    
    <p class="card-text">Starts: @18:00 (24h)</p>
    <button class="btn btn w-100 "  style="background: #34AEAD; color:azure" type="button">Book Now</button>
  </div>
</div>
       
    </div>
</section>





<?php require 'footer.php' ?>