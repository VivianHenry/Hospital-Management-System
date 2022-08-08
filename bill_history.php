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
                <div class="col-md-2">
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
                <div class="col-md-10">
                    <div class="card">
                    <div class="card-body" style="background-color:#08827F; border-color:#08827F">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 style="color:#ffffff">History</h5>
                                </div>
                                <div class="col-md-3">
                                    <form class="form-group" action="bill_history_search.php" method="post">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="text" name="search_bill" placeholder="Enter department name" class="form-control">
                                            </div>
                                            <div class="col-md-1">
                                                <input type="submit" name="search_bill_button" value="Search" class="btn btn-primary"> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">BID</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Date</th>
                                <th scope="col">Complaint</th>
                                <th scope="col">Department</th>
                                <th scope="col">Diagnosis</th>
                                <th scope="col">Prescription</th>
                                <th scope="col">Doc. Charge</th>
                                <th scope="col">Overnight</th>
                                <th scope="col">Room Charge</th>
                                <th scope="col">Medicine Charge</th>
                                <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php get_history();?>
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