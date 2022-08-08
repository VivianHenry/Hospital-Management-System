<?php 
include("func.php");
if(isset($_POST["search_button"])){
        $depname=$_POST["search"];
        $query="SELECT depname, dname FROM Doctor WHERE depname='$depname' ORDER BY depname";
        $result=mysqli_query($con,$query);
        echo "<div class='card-body'>
            <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>Department</th>
                <th scope='col'>Available Doctors</th>
                </tr>
            </thead>";
        if(mysqli_num_rows($result)>=1){
            while($row=mysqli_fetch_array($result)){
                $depname=$row['depname'];
                $dname=$row['dname'];
                echo "<tr>
                <td>$depname</td>
                <td>$dname</td>
                </tr>";
            }
        }
        else{
            echo "<script>alert('No such department exists')</script>";
            echo "<script>window.open('departments.php', 'self')</script>";
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