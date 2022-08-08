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
                                    <h5 style="color:#ffffff">In-House Patients</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="from-group" action="func.php" method="post">
                                <div class="card-body">
                                    <?php $pname=$_SESSION['pname_in_house'];
                                    echo "<h5>Patient Name </h5> $pname";?>
                                    <hr>
                                    <?php $age=get_patient_details_age();
                                    echo "<h5>Age </h5> $age";?>
                                    <hr>
                                    <?php $gender=get_patient_details_gender();
                                    echo "<h5>Gender </h5> $gender";?>
                                    <hr>
                                    <?php $weight=get_patient_details_weight();
                                    echo "<h5>Weight </h5> $weight";?>
                                    <hr>
                                    <?php $descr=get_patient_complaint();
                                    echo "<h5>Complaint </h5> $descr";?>
                                    <hr>
                                    <?php $diagnosis=get_diagnosis();
                                    echo "<h5>Diagnosis </h5> $diagnosis";?>
                                    <hr>
                                    <?php $medicine=get_medicine();
                                    echo "<h5>Medication </h5> $medicine";?>
                                    <hr>
                                    <?php $date_of_admission=get_date_of_admission();
                                    echo "<h5>Date of Admission </h5> $date_of_admission";?>
                                    <hr>
                                    <label><h5>Date of Discharge</h5></label>
                                    <input type="text" name="date_of_discharge" placeholder="YYYY-MM-DD" class="form-control"><br>
                                    <input type="submit" class="btn btn-primary" name="in_house_2" value="Next">
                                </div>
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