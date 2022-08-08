<?php session_start();?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body style="background:url('images/bg.jpeg') no-repeat; background-size:cover" >
        <hr>
        <h1 style="color:#FFFFFF; font-family:calibri"><center>Hospital Management System</center></h1>
        <div class="row row-cols-2 row-cols-md-4 g-3" style="width:1200px; margin-top:50px; margin-left:360px">
            <div class="col">
                <div class="card">
                    <img src="images/admin.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Login for Admins</h5>
                        <form class="form-group" action="func.php" method="post">
                            <label>Enter Username</label><br>
                            <input type="text" name="username" class="form-control"><br>
                            <label>Enter Password</label><br>
                            <input type="password" name="password" class="form-control"><br>
                            <input type="submit" name="admin_login_submit" class="btn btn-primary"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/patient.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Login for Patients</h5>
                        <form class="form-group" action="func.php" method="post">
                            <label>Enter Username</label><br>
                            <input type="text" name="username" class="form-control"><br>
                            <label>Enter Password</label><br>
                            <input type="password" name="password" class="form-control"><br>
                            <input type="submit" name="patient_login_submit" class="btn btn-primary"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/doc.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Login for Doctors</h5>
                        <form class="form-group" action="func.php" method="post">
                            <label>Enter Username</label><br>
                            <input type="text" name="username" class="form-control"><br>
                            <label>Enter Password</label><br>
                            <input type="password" name="password" class="form-control"><br>
                            <input type="submit" name="doc_login_submit" class="btn btn-primary"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/cashier.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Login for Cashiers</h5>
                        <form class="form-group" action="func.php" method="post">
                            <label>Enter Username</label><br>
                            <input type="text" name="username" class="form-control"><br>
                            <label>Enter Password</label><br>
                            <input type="password" name="password" class="form-control"><br>
                            <input type="submit" name="cashier_login_submit" class="btn btn-primary"></button>
                        </form>
                    </div>
                </div>
            </div>     
        </div>
        <hr>
        <center><a href="register_new_patient.php" class="btn btn-primary" role="button">Register new patient</a></center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
   
</html>