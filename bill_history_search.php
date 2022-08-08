<?php 
include("func.php");
if(isset($_POST["search_bill_button"])){
        $depname=$_POST["search_bill"];
        $query="SELECT * FROM Bills WHERE depname='$depname' ORDER BY bid";
        $result=mysqli_query($con,$query);
        echo "<div class='card-body'>
            <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>BID</th>
                <th scope='col'>Patient</th>
                <th scope='col'>Doctor</th>
                <th scope='col'>Cashier</th>
                <th scope='col'>Date</th>
                <th scope='col'>Complaint</th>
                <th scope='col'>Diagnosis</th>
                <th scope='col'>Prescription</th>
                <th scope='col'>Doc. Charge</th>
                <th scope='col'>Overnight</th>
                <th scope='col'>Room Charge</th>
                <th scope='col'>Medicine Charge</th>
                <th scope='col'>Total</th>
                </tr>
            </thead>";
        if(mysqli_num_rows($result)>=1){
            while($row=mysqli_fetch_array($result)){
                $bid=$row['bid'];
                $pid=$row['pid'];
                $query1="SELECT pname FROM Patient WHERE pid='$pid'";
                $result1=mysqli_query($con,$query1);
                $row1=mysqli_fetch_array($result1);
                $pname=$row1['pname'];
                $did=$row['did'];
                $query2="SELECT dname FROM Doctor WHERE did='$did'";
                $result2=mysqli_query($con,$query2);
                $row2=mysqli_fetch_array($result2);
                $dname=$row2['dname'];
                $caid=$row['caid'];
                $query3="SELECT caname FROM Cashier WHERE caid='$caid'";
                $result3=mysqli_query($con,$query3);
                $row3=mysqli_fetch_array($result3);
                $caname=$row3['caname'];
                $date=$row['date'];
                $complaint=$row['complaint'];
                $diagnosis=$row['diagnosis'];
                $medicine=$row['medicine'];
                $doc_charge=$row['doc_charge'];
                $no_days=$row['no_days'];
                $room_charge=$row['room_charge'];
                $medicine_charge=$row['medicine_charge'];
                $amount=$row['amount'];
                echo "<tr>
                <td>$bid</td>
                <td>$pname</td>
                <td>$dname</td>
                <td>$caname</td>
                <td>$date</td>
                <td>$complaint</td>
                <td>$diagnosis</td>
                <td>$medicine</td>
                <td>$doc_charge</td>
                <td>$no_days</td>
                <td>$room_charge</td>
                <td>$medicine_charge</td>
                <td>$amount</td>
                </tr>";
            }
        }
        else{
            echo "<script>alert('No such department exists')</script>";
            echo "<script>window.open('bill_history.php', 'self')</script>";
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