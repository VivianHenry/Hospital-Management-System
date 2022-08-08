<?php include("func.php");?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class="jumbotron" style="background:url('images/banner.jpeg') no-repeat; background-size:cover; height:200px;"></div>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Navigation Bar</a>
                        <a href="edit_patient_details.php" class="list-group-item">Edit Details</a>
                        <a href="departments_for_patients.php" class="list-group-item">View Specialities</a>
                        <a href="make_appointment.php" class="list-group-item">Make an Appointment</a>
                        <a href="patient_history.php" class="list-group-item">View History</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="logout.php" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Log Out</a>
                    </div>
                    <hr>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body" style="background-color:#08827F; border-color:#08827F">
                        </div>
                        <div class="card-body">
                            <h2 style="color:#08827F">Welcome!</h2>
                            <hr>
                            <?php $pname = get_patient_details_pname();
                            echo "<h5>Name </h5> $pname";?>
                            <hr>
                            <?php $age = get_patient_details_age();
                            echo "<h5>Age </h5> $age";?>
                            <hr>
                            <?php $gender = get_patient_details_gender();
                            echo "<h5>Gender </h5> $gender";?>
                            <hr>
                            <?php $weight = get_patient_details_weight();
                            echo "<h5>Weight </h5> $weight";?>
                            <hr>
                            <?php $address = get_patient_details_address();
                            echo "<h5>Address </h5> $address";?>
                            <hr>
                            <?php $phone_no = get_patient_details_phone_no();
                            echo "<h5>Contact Number </h5> $phone_no";?>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>