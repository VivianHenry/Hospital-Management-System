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
                        <a href="edit_cashier_details.php" class="list-group-item">Edit Details</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="" class="list-group-item active" style="background-color:#08827F; border-color:#08827F">Logistics</a>
                        <a href="bills.php" class="list-group-item">Pending Bills</a>
                        <a href="bill_history.php" class="list-group-item">Bill History</a>
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
                                    <h5 style="color:#ffffff">Bills</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" action="func.php" method="post">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                </div><br>
                                <h5 style="color:#08827F">Details</h5>
                                <div class="col-md-12">
                                    <label>Date</label><br>
                                    <input type="text" class="form-control" name="date" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="col-md-6">
                                    <label>Name of Patient</label><br>
                                    <?php $pname=get_patient_details_pname_bill();
                                    echo "$pname";?>
                                </div>
                                <div class="col-md-6">
                                    <label>Name of Doctor</label><br>
                                    <?php $dname=get_doctor_details_dname_bill();
                                    echo "$dname";?>
                                </div>
                                <div class="col-md-6">
                                    <label>Name of Cashier</label><br>
                                    <?php $caname=get_cashier_details_caname();
                                    echo "$caname";?>
                                </div>
                                <div class="col-md-6">
                                    <label>Contact Number</label><br>
                                    <?php $ca_phone_no=get_cashier_details_ca_phone_no();
                                    echo "$ca_phone_no";?>
                                </div>
                                <hr>
                                <h5 style="color:#08827F">Summary Of Visit</h5>
                                <div class="col-md-12">
                                    <label>Patient Complaint</label><br>
                                    <?php $descr=get_patient_complaint_bill();
                                    echo "$descr";?>
                                </div>
                                <div class="col-md-12">
                                    <label>Diagnosis</label><br>
                                    <?php $diagnosis=get_diagnosis_bill();
                                    echo "$diagnosis";?>
                                </div>
                                <div class="col-md-12">
                                    <label>Prescription</label><br>
                                    <?php $medicine=get_medicine_bill();
                                    echo "$medicine";?>
                                </div>
                                <hr>
                                <h5 style="color:#08827F">Charges</h5>
                                <div class="col-md-12">
                                    <label>Consultation Fee</label><br>
                                    <?php $cost=get_consultation_fee_bill();
                                    echo "$cost";?>
                                </div>
                                <div class="col-md-6">
                                    <label>Days Stayed</label><br>
                                    <?php $days=get_days_stayed_bill();
                                    echo "$days";?>
                                </div>
                                <div class="col-6">
                                    <label>Total Room Charge</label><br>
                                    <?php $cost=get_room_charge_bill();
                                    echo "$cost";?>
                                </div>
                                <div class="col-12">
                                    <label>Cost of Medicines</label><br>
                                    <input type="text" class="form-control" name="medicine_charge" placeholder="$">
                                </div>
                                <div class="col-12">
                                    <label>Total Amount Due</label><br>
                                    <input type="text" class="form-control" name="amount" placeholder="$">
                                </div>
                                <input type="submit" class="btn btn-primary" name="bills_3" value="Pay Now">
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