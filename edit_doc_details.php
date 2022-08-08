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
                        <a href="edit_doc_details.php" class="list-group-item">Edit Details</a>
                        <a href="complaints_for_doc.php" class="list-group-item">Patient Complaints</a>
                        <a href="doc_diagnosis.php" class="list-group-item">Diagnosis</a>
                        <a href="in_house.php" class="list-group-item">Admitted Patients</a>
                        <a href="doc_history.php" class="list-group-item">History</a>
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
                                <?php $dname=$_SESSION['username'];
                                echo "<h5>Name </h5> $dname";?>
                                <hr>
                                <label>Password</label>
                                <input type="password" name="dpass" class="form-control"><br>
                                <label>Gender</label>
                                <select class="form-control" name="dgender">
                                    <option value="N/A">Make a selection</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Unwilling to disclose">Unwiling to disclose</option>
                                </select> <br>
                                <label>Phone Number</label>
                                <input type="number" name="d_phone_no" min="1000000000" max="9999999999" class="form-control"><br>
                                <input type="submit" class="btn btn-primary" name="doc_details_submit" value="Confirm Changes">
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