<?php require 'doctor_sidebar.php';
require 'header.php';

?>

<section class="container col-9 ">
    <div class="d-flex justify-content-between p-3">
        <div class="d-flex ">
            <button type="button" class="btn btn h-75" style="background: #34AEAD; color:azure"> <i class="fa fa-arrow-left"></i> Back</button>
            <form action="" class="px-5">
                <div class="input-group  ">
                    <input type="text" class="form-control" placeholder="Search Patient " name="search">
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

    <h5>My Patients (2)</h5>
    <div class="input-group mb-3 p-3 ">
        <!-- <span class="input-group-text d-flex justify-content-center  " id="basic-addon1">Date :</span> -->

        <!-- <input type="text" class="form-control bg-white" placeholder="jj/mm/aaaa" aria-label="Recipient's username" aria-describedby="basic-addon2 "> -->
        <label class="input-group-text w-50" for="inputGroupSelect01">Show Details About :</label>
        <select class="form-select" id="inputGroupSelect01">
            <option selected>My patients Only :</option>
            <option value="1">Nadir</option>
            <option value="2">Issam</option>
            <option value="3">Abdellah</option>
        </select>
        <span class="btn input-group-text   d-flex justify-content-center " id="basic-addon2" style="background: #34AEAD; color:azure"><i class="fa fa-filter "></i> Filter</span>
    </div>
    <div class="p-3">
        <table class="table p-3 " style="border-color: #34AEAD ;">
            <thead>
                <tr class="text-center">
                    <th scope="col"> Name</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Events</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th scope="row">nohaila</th>
                    <td>1345</td>
                    <td>noha@youcode.ma</td>
                    <td>2001-01-01</td>
                    <td>065968473</td>

                    <td><button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
                            <i class="fa fa-eye"></i> View


                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Issam</th>
                    <td>1345</td>
                    <td>issam@youcode.ma</td>
                    <td>2001-01-01</td>
                    <td>065968473</td>

                    <td><button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure">
                            <i class="fa fa-eye"></i> View
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php require 'footer.php' ?>