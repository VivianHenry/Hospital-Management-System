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
                                    <h5 style="color:#ffffff">Book An Appointment</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="from-group" action="func.php" method="post">
                                <?php $pname = get_patient_details_pname();
                                echo "<h5>Name </h5> $pname";?>
                                <hr>
                                <label>Date</label>
                                <input type="text" name="c_date" placeholder="YYYY-MM-DD" class="form-control"><br>
                                <label>Time</label>
                                <select class="form-control" name="c_time">
                                    <option value="N/A">Make a selection</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:20">09:20</option>
                                    <option value="09:40">09:40</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:20">10:20</option>
                                    <option value="10:40">10:40</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:20">11:20</option>
                                    <option value="11:40">11:40</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:20">12:20</option>
                                    <option value="12:40">12:40</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:20">13:20</option>
                                    <option value="13:40">13:40</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:20">14:20</option>
                                    <option value="14:40">14:40</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:20">15:20</option>
                                    <option value="15:40">15:40</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:20">16:20</option>
                                    <option value="16:40">16:40</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:20">17:20</option>
                                    <option value="17:40">17:40</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:20">18:20</option>
                                    <option value="18:40">18:40</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:20">19:20</option>
                                    <option value="19:40">19:40</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:20">20:20</option>
                                    <option value="20:40">20:40</option>
                                    <option value="21:00">21:00</option>
                                </select><br>
                                <label>Which doctor would you like to consult with?</label>
                                <select class="form-control" name="dname">
                                    <?php $result=dropdown_for_booking_appointment();?>
                                    <?php while ($row=mysqli_fetch_array($result)):;?>
                                    <option value="<?php echo $row['dname'];?>"><?php echo $row['dname'];?></option>
                                    <?php endwhile; ?>
                                </select> <br>
                                <label>Kindly describe your problem</label>
                                <input type="text" name="descr" class="form-control"><br>
                                <input type="submit" class="btn btn-primary" name="appointment_submit" value="Confirm Appointment">
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