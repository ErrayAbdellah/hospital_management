<?php require 'doctor_sidebar.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hospital Management</title>
</head>

<body>
    <section class="col-9 ">
        <nav class="nav d-flex justify-content-between">
            <h4 class="d-flex align-items-center">Hi Doctor</h4>
            <div class="d-flex ">
                <div>
                    <span class="text-secondary" style="font-size:12px;">Today's Date </span>
                    <h6>2022-12-05 </h6>
                </div>
                <i class="far fa-calendar-alt d-flex align-items-center ms-2" style="font-size: 2rem;"></i>
            </div>
        </nav>
        <div class=" rounded-3" id="bg_img_dashboard_dctr">
            <div class="ps-5 pt-5 w-sm-50 pb-1">
                <h5>Welcome !</h5>
                <h4 class="mt-4 fw-bold">Test Doctor</h4>
                <p class="h-25 mt-3 mb-5">
                    Thanks for joinnig with us. We are always trying to get you a complete service
                    You can view your dailly schedule, Reach Patients Appointment at home!
                </p>
                <button type="button" class="btn text-light w-50" style="background-color:#34AEAD;">
                    View My Appointmants
                </button>
            </div>
        </div>

        <div class="d-flex">
         <main class="w-50" class="">
                <h3 class="fw-bold" style="color: #007A69;"><i class="uil uil-chart-bar fs-4 me-2"></i> Status</h3>
                   <div class="position-relative h-75 py-5 m-3 pb-5 mb-5">

                    <div class="position-absolute top-0 start-0" style="height: 3rem; width:15rem; "  >
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded border">
                            <div>
                                <h5 class="">3</h5>
                                <p class="fs-6 text-black">Doctors</p>
                            </div>
                            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                                <i class="fa fa-medkit" style="font-size:30px; "></i>
                            </div>
                        </div>
                    </div>
                    
                    <div  class="position-absolute top-0 end-0" style="height: 3rem; width:15rem; ">
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded border">
                            <div>
                                <h5 class="">3</h5>
                                <p class="fs-6 text-black">Patients</p>
                            </div>
                            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                                <i class="fa fa-wheelchair" style="font-size:30px; "></i>
                            </div>
                        </div>
                    </div>
                    
                    <div   class="position-absolute bottom-0 start-0 py-5 mb-5" style="height: 3rem; width:15rem; border-color: #34AEAD ;">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center rounded  border">
                            <div>
                                <h5 class="">2</h5>
                                <p class="fs-6 text-black">New Booking</p>
                            </div>
                            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                                <i class="fa fa-book" style="font-size:30px; "></i>
                            </div>
                        </div>
                    </div>

                    
                    <div  class="position-absolute bottom-0 end-0 py-5 mb-5" style="height: 3rem; width:15rem; ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center rounded border">
                            <div>
                                <h5 class="">2</h5>  
                                <p class="fs-6 text-black">Today sessions</p>
                            </div>
                            <div class="border rounded d-flex justify-content-center align-items-center" style="width: 42px; height: 42px;">
                                <i class="fa fa-heartbeat" style="font-size:30px; "></i>
                            </div>
                        </div>
                    </div>
                
            </div>
            
        </main> 
        <main class="w-50">
            <form method="post" style="height: 25em;" class="position-relative appointment-table rounded shadowborder ">
                <div class="card-body table-responsive position-relative" style="height: 25em; overflow: scroll; background-image:  url(../img/notfound.svg);
            background-repeat: no-repeat;
            background-size:15em;
            background-position: bottom;">
                    <table class="table border-secondary text-center table-hover">
                        <tr class="">
                            <td class=" fw-bold ">Session Title</td>
                            <td class=" fw-bold">Doctor</td>
                            <td class=" fw-bold">Scheduled Date & Time</td>
                        </tr>
                    </table>
                </div>
                <button class="w-100 btn bottom-0 text-light" name="" type="submit" style="background-color:#34AEAD;">Show all Sessions</button>
            </form>
        </main>
    </div>
    </section>
    
    <?php require 'footer.php' ?>
