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
                                    <h5 style="color:#ffffff">Diagnosis</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="from-group" action="func.php" method="post">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%"></div>
                                </div>
                                <hr>
                                <label>Select patient</label>
                                <select class="form-control" name="pname">
                                    <?php $result=dropdown_for_diagnosis();?>
                                    <?php while ($row=mysqli_fetch_array($result)):;?>
                                    <option value="<?php echo $row['pname'];?>"><?php echo $row['pname'];?></option>
                                    <?php endwhile; ?>
                                </select> <br>
                                <input type="submit" class="btn btn-primary" name="diagnosis_1" value="Next">
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