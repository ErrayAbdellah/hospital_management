<?php require 'sidebar.php'?>
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
        <h4 class="d-flex align-items-center">Doctor</h4>
        <div class="d-flex ">
            <div>
                <span class="text-secondary" style="font-size:12px;">Today's Date </span>
                <h6>2022-12-05 </h6>
            </div>
            <i class="far fa-calendar-alt d-flex align-items-center ms-2"  style="font-size: 2rem;"></i>
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

<main class="_title">
    <div>
    <h3 class="fw-bold" style="color: #007A69;"><i
                    class="uil uil-chart-bar fs-4 me-2"></i> Status</h3>
        <div class="row g-3 d-flex justify-content-around">
                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded border">
                            <div>                      
                                <h3 class="fs-2 mycolor">3</h3>
                                <p class="fs-5 text-black">Doctors</p>
                            </div>    
                            <i class="uil uil-medkit fs-3 mycolor box rounded py-2  px-3"></i>           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded border">
                            <div>
                         
                                <h3 class="fs-2 mycolor">3</h3>
                                <p class="fs-5 text-black">Patients</p>
                            </div>
                            <i class="uil uil-accessible-icon-alt fs-3 mycolor box rounded py-2  px-3 "></i>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center rounded  border"> 
                            <div>
                                <h3 class="fs-2 mycolor">2</h3>
                                <p class="fs-5 text-black">New Booking</p>
                            </div>
                            <i class="uil uil-bookmark fs-3 mycolor rounded py-2  px-3 box"></i>
                        </div>
                    </div>

                    
                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center rounded border"> 
                            <div>
                                <h3 class="fs-2 mycolor">2</h3>
                                <p class="fs-5 text-black">Today sessions</p>
                            </div>
                            <i class="uil uil-heart-rate fs-3 mycolor  rounded py-2  px-3 box"></i>
                        </div>
                    </div>
                </div>
    </div>
</main>
<main>
    <form method="post" style="width: 49%; height: 25em;" class="position-relative appointment-table rounded shadowborder" >
        <div class="card-body table-responsive position-relative" style="height: 15em; overflow: scroll; background-image:  url(../img/icons/notfound.svg);
            background-repeat: no-repeat;
            background-size:15em;
            background-position: bottom;">
            <table class="table border-secondary text-center table-hover">
            <tr class="">
                <td class="mycolor fw-bold ">Session Title</td>
                <td class="mycolor fw-bold">Doctor</td>
                <td class="mycolor fw-bold">Scheduled Date & Time</td>
                </tr>
            
            </table>
        </div>
    <button class="w-100 btn mycolor button1 position-absolute bottom-0" name="allSessions" type="submit">Show all Sessions</button>
    </form>
</main>
</section>

<?php require 'footer.php' ?>