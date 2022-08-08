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
                        <a href="" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Patients</a>
                        <a href="patient_details.php" class="list-group-item">Patient Details</a>
                        <a href="add_patient.php" class="list-group-item">Add New Patient</a>
                        <a href="remove_patient.php" class="list-group-item">Remove Patient</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Doctors</a>
                        <a href="doctor_details.php" class="list-group-item">Doctor Details</a>
                        <a href="add_doctor.php" class="list-group-item">Add New Doctor</a>
                        <a href="remove_doctor.php" class="list-group-item">Remove Doctor</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Cashiers</a>
                        <a href="cashier_details.php" class="list-group-item">Cashier Details</a>
                        <a href="add_cashier.php" class="list-group-item">Add New Cashier</a>
                        <a href="remove_cashier.php" class="list-group-item">Remove Cashier</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Logistics</a>
                        <a href="departments.php" class="list-group-item">View Departments</a>
                        <a href="in_house_admin.php" class="list-group-item">View In-House Patients</a>
                        <a href="bill_history_admin.php" class="list-group-item">View Bill History</a>
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
                            <h5 style="color:#ffffff">Enter Patient Details</h5>
                        </div>
                        <div class="card-body">
                            <form class="from-group" action="func.php" method="post">
                                <label style="color:#08827F">Patient Name</label>
                                <input type="text" name="pname" class="form-control"><br>
                                <label style="color:#08827F">Password</label>
                                <input type="password" name="ppass" class="form-control"><br>
                                <label style="color:#08827F">Age</label>
                                <input type="number" name="age" min="1" max="100" class="form-control"><br>
                                <label style="color:#08827F">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="N/A">Make a selection</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Unwilling to disclose">Unwiling to disclose</option>
                                </select><br>
                                <label style="color:#08827F">Weight (kgs)</label>
                                <input type="number" name="weight" min="1" max="200" class="form-control"><br>
                                <label style="color:#08827F">Address</label>
                                <input type="text" name="address" class="form-control"><br>
                                <label style="color:#08827F">Phone Number</label>
                                <input type="number" name="phone_no" min="1000000000" max="9999999999" class="form-control"><br>
                                <input type="submit" class="btn btn-primary" name="pat_submit" value="Submit">
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