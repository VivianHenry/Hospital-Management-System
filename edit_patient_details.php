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
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 style="color:#ffffff">Edit Your Details</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="from-group" action="func.php" method="post">
                                <?php $pname = get_patient_details_pname();
                                echo "<h5>Name </h5> $pname";?>
                                <hr>
                                <label>Password</label>
                                <input type="password" name="ppass" class="form-control"><br>
                                <label>Age</label>
                                <input type="number" name="age" min="1" max="100" class="form-control"><br>
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="N/A">Make a selection</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Unwilling to disclose">Unwiling to disclose</option>
                                </select> <br>
                                <label>Weight (kgs)</label>
                                <input type="number" name="weight" min="1" max="200" class="form-control"><br>
                                <label>Address</label>
                                <input type="text" name="address" class="form-control"><br>
                                <label>Phone Number</label>
                                <input type="number" name="phone_no" min="1000000000" max="9999999999" class="form-control"><br>
                                <input type="submit" class="btn btn-primary" name="pat_details_submit" value="Confirm Changes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>