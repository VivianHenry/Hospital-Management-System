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
                                <div class="col-md-12">
                                    <h5 style="color:#ffffff">Patient History</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Department</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Complaint</th>
                                <th scope="col">Diagnosis</th>
                                <th scope="col">Medication</th>
                                <th scope="col">Amt.</th>
                                <th scope="col">Cashier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php get_history_patient();?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>