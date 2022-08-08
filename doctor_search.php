<?php 
include("func.php");
if(isset($_POST["search_button"])){
        $dname=$_POST["search"];
        $query="SELECT did, dname, since, d_phone_no FROM Doctor WHERE dname='$dname'";
        $result=mysqli_query($con,$query);
        echo "<div class='card-body'>
            <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Name</th>
                <th scope='col'>DOJ</th>
                <th scope='col'>Contact</th>
                </tr>
            </thead>";
        if(mysqli_num_rows($result)>=1){
            while($row=mysqli_fetch_array($result)){
                $did=$row['did'];
                $dname=$row['dname'];
                $since=$row['since'];
                $d_phone_no=$row['d_phone_no'];
                echo "<tr>
                <td>$did</td>
                <td>$dname</td>
                <td>$since</td>
                <td>$d_phone_no</td>
                </tr>";
            }
        }
        else{
            echo "<script>alert('No such doctor exists')</script>";
            echo "<script>window.open('doctor_details.php', 'self')</script>";
        }
    }
?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron" style="background:url('images/banner.jpeg') no-repeat; background-size:cover; height:200px;"></div>
    <hr>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>