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
        <h2>status</h2>
        <div class="w-50">
            <div class="card d-felx justify-content-around  crd_dctr_dashbrd ">
                <h3>1</h3>
                <i class="fa fa-user ps-5 ms-5" style="font-size: 12px;"></i> 
                <p>All Doctors</p>
            </div>
        </div>
    </div>
</main>

</section>
<?php require 'footer.php' ?>