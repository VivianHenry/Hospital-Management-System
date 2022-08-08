<?php
    session_start();
    $con=mysqli_connect("localhost","root","","hms_db");
    $verify_main=1; // Used while booking an appointment

    if(isset($_POST["admin_login_submit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $query="SELECT * FROM Admin WHERE aname='$username' AND apass='$password'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            header("Location:admin.php");
        }
        else{
            header("Location:index.php");
        }
    }

    if(isset($_POST["patient_login_submit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $_SESSION['username']=$username;
        $query="SELECT * FROM Patient WHERE pname='$username' AND ppass='$password'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $_SESSION['pid']=$row['pid'];
            header("Location:patient.php");
        }
        else{
            header("Location:index.php");
        }
    }

    if(isset($_POST["doc_login_submit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $_SESSION['username']=$username;
        $query="SELECT * FROM Doctor WHERE dname='$username' AND dpass='$password'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $_SESSION['did']=$row['did'];
            header("Location:doc.php");
        }
        else{
            header("Location:index.php");
        }
    }

    if(isset($_POST["cashier_login_submit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $_SESSION['username']=$username;
        $query="SELECT * FROM Cashier WHERE caname='$username' AND capass='$password'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $_SESSION['caid']=$row['caid'];
            header("Location:cashier.php");
        }
        else{
            header("Location:index.php");
        }
    }

    if(isset($_POST["home_button"])){
        header("Location:index.php");
    }

    if(isset($_POST["home_register_new_patient_button"])){
        header("Location:register_new_patient.php");
    }

    if(isset($_POST["pat_submit"])){
        $pname=$_POST['pname'];
        $ppass=$_POST['ppass'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $weight=$_POST['weight'];
        $address=$_POST['address'];
        $phone_no=$_POST['phone_no'];
        $query="INSERT INTO Patient(pname, ppass, age, gender, weight, address, phone_no) VALUES ('$pname', '$ppass', '$age', '$gender', '$weight', '$address', '$phone_no')";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Patient added')</script>";
            echo "<script>window.open('add_patient.php', 'self')</script>";
        }
    }

    if(isset($_POST["register_pat_submit"])){
        $pname=$_POST['pname'];
        $ppass=$_POST['ppass'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $weight=$_POST['weight'];
        $address=$_POST['address'];
        $phone_no=$_POST['phone_no'];
        $query="INSERT INTO Patient(pname, ppass, age, gender, weight, address, phone_no) VALUES ('$pname', '$ppass', '$age', '$gender', '$weight', '$address', '$phone_no')";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Account created')</script>";
            echo "<script>window.open('index.php', 'self')</script>";
        }
    }

    function get_patient_details(){
        global $con;
        $query="SELECT pid, pname, age, gender, weight, address, phone_no FROM Patient";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $pid=$row['pid'];
            $pname=$row['pname'];
            $age=$row['age'];
            $gender=$row['gender'];
            $weight=$row['weight'];
            $address=$row['address'];
            $phone_no=$row['phone_no'];
            echo "<tr>
            <td>$pid</td>
            <td>$pname</td>
            <td>$age</td>
            <td>$gender</td>
            <td>$weight</td>
            <td>$address</td>
            <td>$phone_no</td>
            </tr>";
        }
    }

    if(isset($_POST["pat_delete"])){
        $selection=$_POST['selection_criteria'];
        $value=$_POST['selection'];
        $query="DELETE FROM Patient WHERE pid='$value' OR pname='$value'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Patient deleted')</script>";
            echo "<script>window.open('remove_patient.php', 'self')</script>";
        }
    }

    function get_doctor_details(){
        global $con;
        $query="SELECT did, dname, since, d_phone_no FROM Doctor";
        $result=mysqli_query($con,$query);
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

    if(isset($_POST["doc_submit"])){
        $dname=$_POST['dname'];
        $dpass=$_POST['dpass'];
        $since=$_POST['since'];
        $dgender=$_POST['dgender'];
        $depname=$_POST['depname'];
        $d_phone_no=$_POST['d_phone_no'];
        $query="INSERT INTO Doctor(dname, dpass, dgender, since, depname, d_phone_no) VALUES ('$dname', '$dpass', '$dgender', '$since', '$depname', '$d_phone_no')";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Doctor added')</script>";
            echo "<script>window.open('add_doctor.php', 'self')</script>";
        }
    }

    if(isset($_POST["doc_delete"])){
        $selection=$_POST['selection_criteria'];
        $value=$_POST['selection'];
        $query="DELETE FROM Doctor WHERE did='$value' OR dname='$value'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Doctor deleted')</script>";
            echo "<script>window.open('remove_doctor.php', 'self')</script>";
        }
    }

    function get_department_details(){
        global $con;
        $query="SELECT depname, dname FROM Doctor ORDER BY depname";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $depname=$row['depname'];
            $dname=$row['dname'];
            echo "<tr>
            <td>$depname</td>
            <td>$dname</td>
            </tr>";
        }
    }

    function get_cashier_details(){
        global $con;
        $query="SELECT caid, caname, ca_phone_no FROM Cashier";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $caid=$row['caid'];
            $caname=$row['caname'];
            $ca_phone_no=$row['ca_phone_no'];
            echo "<tr>
            <td>$caid</td>
            <td>$caname</td>
            <td>$ca_phone_no</td>
            </tr>";
        }
    }

    if(isset($_POST["cashier_submit"])){
        $caname=$_POST['caname'];
        $capass=$_POST['capass'];
        $cagender=$_POST['cagender'];
        $ca_phone_no=$_POST['ca_phone_no'];
        $query="INSERT INTO Cashier(caname, capass, cagender, ca_phone_no) VALUES ('$caname', '$capass', '$cagender', '$ca_phone_no')";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Cashier added')</script>";
            echo "<script>window.open('add_cashier.php', 'self')</script>";
        }
    }

    if(isset($_POST["cashier_delete"])){
        $selection=$_POST['selection_criteria'];
        $value=$_POST['selection'];
        $query="DELETE FROM Cashier WHERE caid='$value' OR caname='$value'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Cashier deleted')</script>";
            echo "<script>window.open('remove_cashier.php', 'self')</script>";
        }
    }

    function get_in_house_details_admin(){
        global $con;
        $query="SELECT pid, descr, did, diagnosis, medicine, date_of_admission FROM Decides_In_Patient WHERE date_of_discharge='0000-00-00'";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $pid=$row['pid'];
            $descr=$row['descr'];
            $did=$row['did'];
            $diagnosis=$row['diagnosis'];
            $medicine=$row['medicine'];
            $date_of_admission=$row['date_of_admission'];

            $query1="SELECT pname FROM Patient WHERE pid='$pid'";
            $result1=mysqli_query($con,$query1);
            $row1=mysqli_fetch_array($result1);
            $pname=$row1['pname'];

            $query2="SELECT dname FROM Doctor WHERE did='$did'";
            $result2=mysqli_query($con,$query2);
            $row2=mysqli_fetch_array($result2);
            $dname=$row2['dname'];

            echo "<tr>
            <td>$pname</td>
            <td>$descr</td>
            <td>$dname</td>
            <td>$diagnosis</td>
            <td>$medicine</td>
            <td>$date_of_admission</td>
            </tr>";
        }
    }

    function get_patient_details_pname(){
        $pname=$_SESSION['username'];
        return $pname;
    }

    function get_patient_details_age(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT pid, age FROM Patient WHERE pid='$pid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $age=$row['age'];
        return $age;
    }

    function get_patient_details_gender(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT pid, gender FROM Patient WHERE pid='$pid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $gender=$row['gender'];
        return $gender;
    }

    function get_patient_details_weight(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT pid, weight FROM Patient WHERE pid='$pid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $weight=$row['weight'];
        return $weight;
    }

    function get_patient_details_address(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT pid, address FROM Patient WHERE pid='$pid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $address=$row['address'];
        return $address;
    }

    function get_patient_details_phone_no(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT pid, phone_no FROM Patient WHERE pid='$pid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $phone_no=$row['phone_no'];
        return $phone_no;
    }

    if(isset($_POST["pat_details_submit"])){
        $pname=$_SESSION['username'];
        $pid=$_SESSION['pid'];
        $ppass=$_POST['ppass'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $weight=$_POST['weight'];
        $address=$_POST['address'];
        $phone_no=$_POST['phone_no'];
        $query="UPDATE Patient SET ppass='$ppass', age='$age', gender='$gender', weight='$weight', address='$address', phone_no='$phone_no' WHERE pid='$pid'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Patient details updated')</script>";
            echo "<script>window.open('edit_patient_details.php', 'self')</script>";
        }
    }

    function dropdown_for_booking_appointment(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT did, dname FROM Doctor";
        $result=mysqli_query($con,$query);
        return $result;
    }

    if(isset($_POST["appointment_submit"])){
        global $con;
        global $verify_main;
        $verify=$verify_main;
        $pid=$_SESSION['pid'];
        $pname=$_SESSION['username'];
        $c_date=$_POST['c_date'];
        $c_time=$_POST['c_time'];
        $dname=$_POST['dname'];
        $descr=$_POST['descr'];
        
        $query="SELECT did FROM Doctor WHERE dname='$dname'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
        $did=$row['did'];

        $query="SELECT c_date, c_time FROM Consults_Complaint WHERE did='$did'";
        $result=mysqli_query($con, $query);

        while($row=mysqli_fetch_array($result)){
            if($row['c_date']==$c_date && $row['c_time']==$c_time){
                $verify=0;
            }
        }
        if($verify==1){
            $query="INSERT INTO Consults_Complaint(c_date, c_time, descr, pid, did) VALUES ('$c_date', '$c_time', '$descr', '$pid', '$did')";
            $result=mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Appointment confirmed')</script>";
                echo "<script>window.open('make_appointment.php', 'self')</script>";
            }
            else{
                echo "<script>window.open('make_appointment.php', 'self')</script>";
            } 
        }
        else{
            echo "<script>alert('This timeslot is unavailable. Kindly choose another time.')</script>";
            echo "<script>window.open('make_appointment.php', 'self')</script>";
        }
    }

    function get_doc_details_dgender(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT did, dgender FROM Doctor WHERE did='$did'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $dgender=$row['dgender'];
        return $dgender;
    }

    function get_doc_details_did(){
        $did=$_SESSION['did'];
        return $did;
    }

    function get_doc_details_depname(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT did, depname FROM Doctor WHERE did='$did'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $depname=$row['depname'];
        return $depname;
    }

    function get_doc_details_since(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT did, since FROM Doctor WHERE did='$did'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $since=$row['since'];
        return $since;
    }

    function get_doc_details_d_phone_no(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT did, d_phone_no FROM Doctor WHERE did='$did'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $d_phone_no=$row['d_phone_no'];
        return $d_phone_no;
    }

    if(isset($_POST["doc_details_submit"])){
        $dname=$_SESSION['username'];
        $did=$_SESSION['did'];
        $dpass=$_POST['dpass'];
        $dgender=$_POST['dgender'];
        $d_phone_no=$_POST['d_phone_no'];
        $query="UPDATE Doctor SET dpass='$dpass', dgender='$dgender', d_phone_no='$d_phone_no' WHERE did='$did'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Doctor details updated')</script>";
            echo "<script>window.open('edit_doc_details.php', 'self')</script>";
        }
    }

    if(isset($_POST["cashier_details_submit"])){
        $caname=$_SESSION['username'];
        $caid=$_SESSION['caid'];
        $capass=$_POST['capass'];
        $cagender=$_POST['cagender'];
        $ca_phone_no=$_POST['ca_phone_no'];
        $query="UPDATE Cashier SET capass='$capass', cagender='$cagender', ca_phone_no='$ca_phone_no' WHERE caid='$caid'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Cashier details updated')</script>";
            echo "<script>window.open('edit_cashier_details.php', 'self')</script>";
        }
    }

    function get_complaint_details(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT pname, age, gender, weight, descr FROM Patient P, Doctor D, Consults_Complaint C WHERE C.pid=P.pid AND C.did=D.did AND d.did='$did'";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $pname=$row['pname'];
            $age=$row['age'];
            $gender=$row['gender'];
            $weight=$row['weight'];
            $descr=$row['descr'];
            echo "<tr>
            <td>$pname</td>
            <td>$age</td>
            <td>$gender</td>
            <td>$weight</td>
            <td>$descr</td>
            </tr>";
        }
    }

    function dropdown_for_diagnosis(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT pname FROM Patient P, Doctor D, Consults_Complaint C WHERE C.pid=P.pid AND C.did=D.did AND d.did='$did'";
        $result=mysqli_query($con,$query);
        return $result;
    }

    if(isset($_POST["diagnosis_1"])){
        global $con;
        $pname=$_POST['pname'];
        $query="SELECT pid FROM Patient WHERE pname='$pname'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
        $pid=$row['pid'];
        $_SESSION['pname_diagnosis']=$pname;
        $_SESSION['pid']=$pid;
        header("Location:doc_diagnosis_2.php");
    }

    function get_patient_complaint(){
        global $con;
        $did=$_SESSION['did'];
        $pid=$_SESSION['pid'];
        $query="SELECT cid, descr FROM Consults_Complaint WHERE did='$did' AND pid='$pid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $descr=$row['descr'];
        $cid=$row['cid'];
        $_SESSION['cid']=$cid;
        $_SESSION['descr']=$descr;
        return $descr;
    }

    if(isset($_POST["diagnosis_2"])){
        global $con;
        $diagnosis=$_POST['diagnosis'];
        $medicine=$_POST['medicine'];
        $decides=$_POST['decides'];
        $time_spent=$_POST['time_spent'];
        $date_of_admission=$_POST['date_of_admission'];
        $descr=$_SESSION['descr'];
        $pid=$_SESSION['pid'];
        $did=$_SESSION['did'];
        $cid=$_SESSION['cid'];
        if($decides=="walk"){
            $query="INSERT INTO Decides_Out_Patient(descr, diagnosis, medicine, time_spent, pid, did) VALUES ('$descr', '$diagnosis', '$medicine', '$time_spent', '$pid', '$did')";
            $result=mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Patient Served')</script>";
                echo "<script>window.open('doc_diagnosis_3.php', 'self')</script>";
            }
        }
        if($decides=="admit"){
            $query="INSERT INTO Decides_IN_Patient(descr, diagnosis, medicine, time_spent, date_of_admission, pid, did) VALUES ('$descr', '$diagnosis', '$medicine', '$time_spent', '$date_of_admission', '$pid', '$did')";
            $result=mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Patient Served. Added to admitted patients.')</script>";
                echo "<script>window.open('doc_diagnosis_3.php', 'self')</script>";
            }
        }
        $query="DELETE FROM Consults_Complaint WHERE cid='$cid'";
        $result=mysqli_query($con, $query);
    }

    if(isset($_POST["diagnosis_3"])){
        header("Location:doc_diagnosis.php");
    }

    function get_count_in_house(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT COUNT(*) AS count FROM Decides_In_Patient WHERE did='$did' AND date_of_discharge='0000-00-00'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $count=$row['count'];
        return $count;
    }

    function dropdown_for_in_house(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT P.pname FROM Patient P, Decides_In_Patient DP WHERE DP.pid=P.pid AND DP.did='$did' AND DP.date_of_discharge='0000-00-00'";
        $result=mysqli_query($con,$query);
        return $result;
    }

    if(isset($_POST["in_house_1"])){
        global $con;
        $pname=$_POST['pname'];
        $query="SELECT pid FROM Patient WHERE pname='$pname'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
        $pid=$row['pid'];
        $_SESSION['pname_in_house']=$pname;
        $_SESSION['pid']=$pid;
        header("Location:in_house_2.php");
    }

    function get_diagnosis(){
        global $con;
        $did=$_SESSION['did'];
        $pid=$_SESSION['pid'];
        $query="SELECT iid, diagnosis FROM Decides_In_Patient WHERE did='$did' AND pid='$pid' AND date_of_discharge='0000-00-00'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $diagnosis=$row['diagnosis'];
        $iid=$row['iid'];
        $_SESSION['iid']=$iid;
        return $diagnosis;
    }

    function get_medicine(){
        global $con;
        $iid=$_SESSION['iid'];
        $query="SELECT medicine FROM Decides_In_Patient WHERE iid='$iid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $medicine=$row['medicine'];
        return $medicine;
    }

    function get_date_of_admission(){
        global $con;
        $iid=$_SESSION['iid'];
        $query="SELECT date_of_admission FROM Decides_In_Patient WHERE iid='$iid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $date_of_admission=$row['date_of_admission'];
        return $date_of_admission;
    }

    if(isset($_POST["in_house_2"])){
        global $con;
        $iid=$_SESSION['iid'];
        $date_of_discharge=$_POST['date_of_discharge'];
        $query="UPDATE Decides_In_Patient SET date_of_discharge='$date_of_discharge' WHERE iid='$iid'";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Patient discharged')</script>";
            echo "<script>window.open('in_house.php', 'self')</script>";
        }
    }

    function get_cashier_details_caname(){
        $caname=$_SESSION['username'];
        return $caname;
    }

    function get_cashier_details_caid(){
        $caid=$_SESSION['caid'];
        return $caid;
    }

    function get_cashier_details_ca_phone_no(){
        global $con;
        $caid=$_SESSION['caid'];
        $query="SELECT ca_phone_no FROM Cashier WHERE caid='$caid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $ca_phone_no=$row['ca_phone_no'];
        return $ca_phone_no;
    }

    function get_count_bills(){
        global $con;
        $caid=$_SESSION['caid'];
        $query="SELECT COUNT(Temp.ID) AS total FROM ((SELECT oid AS ID FROM Decides_Out_Patient) UNION (SELECT iid AS ID FROM Decides_In_Patient WHERE date_of_discharge!='0000-00-00')) AS Temp;";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $count=$row['total'];
        return $count;
    }

    function dropdown_for_bills_patient(){
        global $con;
        $query="SELECT pname FROM Patient WHERE pid IN ((SELECT pid AS ID FROM Decides_Out_Patient) UNION (SELECT pid AS ID FROM Decides_In_Patient WHERE date_of_discharge!='0000-00-00'))";
        $result=mysqli_query($con,$query);
        return $result;
    }

    if(isset($_POST["bills_1"])){
        global $con;
        $pname=$_POST['pname'];
        $query="SELECT pid FROM Patient WHERE pname='$pname'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
        $pid=$row['pid'];
        $_SESSION['pname_bill']=$pname;
        $_SESSION['pid']=$pid;
        $caname=$_SESSION['username'];
        $caid=$_SESSION['caid'];
        header("Location:bills_2.php");
    }

    function dropdown_for_bills_doctor(){
        global $con;
        $pname=$_SESSION['pname_bill'];
        $pid=$_SESSION['pid'];
        $query="SELECT D.did, D.dname FROM Doctor D, Decides_Out_Patient DOP WHERE D.did=DOP.did AND DOP.pid=$pid UNION ALL SELECT D.did, D.dname FROM Doctor D, Decides_In_Patient DIP WHERE D.did=DIP.did AND DIP.date_of_discharge!='0000-00-00' AND DIP.pid=$pid";
        $result=mysqli_query($con,$query);
        return $result;
    }

    function get_patient_details_pname_bill(){
        $pname=$_SESSION['pname_bill'];
        return $pname;
    }

    if(isset($_POST["bills_2"])){
        global $con;
        $dname=$_POST['dname'];
        $query="SELECT did FROM Doctor WHERE dname='$dname'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
        $did=$row['did'];
        $_SESSION['dname_bill']=$dname;
        $_SESSION['did']=$did;
        header("Location:bills_3.php");
    }

    function get_doctor_details_dname_bill(){
        $dname=$_SESSION['dname_bill'];
        return $dname;
    }

    function get_patient_complaint_bill(){
        global $con;
        $did=$_SESSION['did'];
        $pid=$_SESSION['pid'];
        $query="SELECT descr FROM Decides_Out_Patient WHERE pid='$pid' AND did='$did' UNION SELECT descr FROM Decides_In_Patient WHERE pid='$pid' AND did='$did'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $descr=$row['descr'];
        $_SESSION['descr_bill']=$descr;
        return $descr;
    }

    function get_diagnosis_bill(){
        global $con;
        $did=$_SESSION['did'];
        $pid=$_SESSION['pid'];
        $descr=$_SESSION['descr_bill'];
        $query="SELECT diagnosis FROM Decides_Out_Patient WHERE pid='$pid' AND did='$did' AND descr='$descr' UNION SELECT diagnosis FROM Decides_In_Patient WHERE pid='$pid' AND did='$did' AND descr='$descr'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $diagnosis=$row['diagnosis'];
        return $diagnosis;
    }

    function get_medicine_bill(){
        global $con;
        $did=$_SESSION['did'];
        $pid=$_SESSION['pid'];
        $descr=$_SESSION['descr_bill'];
        $query="SELECT medicine FROM Decides_Out_Patient WHERE pid='$pid' AND did='$did' AND descr='$descr' UNION SELECT medicine FROM Decides_In_Patient WHERE pid='$pid' AND did='$did' AND descr='$descr'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $medicine=$row['medicine'];
        return $medicine;
    }

    function get_consultation_fee_bill(){
        global $con;
        $pid=$_SESSION['pid'];
        $did=$_SESSION['did'];
        $query="SELECT time_spent FROM Decides_Out_Patient WHERE pid='$pid' AND did='$did' UNION ALL SELECT time_spent FROM Decides_In_Patient WHERE date_of_discharge!='0000-00-00' AND pid='$pid' AND did='$did'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $time_spent=$row['time_spent'];
        $cost=$time_spent*0.80;
        return $cost;
    }

    function get_days_stayed_bill(){
        global $con;
        $pid=$_SESSION['pid'];
        $did=$_SESSION['did'];
        $query="SELECT date_of_admission, date_of_discharge FROM Decides_In_Patient WHERE pid=$pid AND did=$did";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $date_of_admission=$row['date_of_admission'];
            $date_of_discharge=$row['date_of_discharge'];
            $start=new DateTime($date_of_admission);
            $end=new DateTime($date_of_discharge);
            $days=$end->diff($start)->format("%a");
            $_SESSION['days_bill']=$days;
            return $days;
        }
        else{
            $days=0;
            $_SESSION['days_bill']=$days;
            return $days;
        }
    }

    function get_room_charge_bill(){
        $days=$_SESSION['days_bill'];
        $cost=$days*10500;
        return $cost;
    }

    if(isset($_POST["bills_3"])){
        global $con;
        $pid=$_SESSION['pid'];
        $did=$_SESSION['did'];
        $caid=$_SESSION['caid'];
        $date=$_POST['date'];
        $descr=$_SESSION['descr_bill'];
        $diagnosis=get_diagnosis_bill();
        $medicine=get_medicine_bill();
        $doc_charge=get_consultation_fee_bill();
        $no_days=$_SESSION['days_bill'];
        $room_charge=get_room_charge_bill();
        $medicine_charge=$_POST['medicine_charge'];
        $amount=$_POST['amount'];
        $query="SELECT depname FROM Doctor WHERE did='$did'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
        $depname=$row['depname'];
        $query="INSERT INTO Bills(pid, did, caid, date, complaint, depname, diagnosis, medicine, doc_charge, no_days, room_charge, medicine_charge, amount) VALUES ('$pid', '$did', '$caid', '$date', '$descr', '$depname', '$diagnosis', '$medicine', '$doc_charge', '$no_days', '$room_charge', '$medicine_charge', '$amount')";
        $result=mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Bill has been cleared')</script>";
            echo "<script>window.open('bills_4.php', 'self')</script>";
            if($no_days==0){
                $query="DELETE FROM Decides_Out_Patient WHERE pid='$pid' AND did='$did' AND descr='$descr'";
                $result=mysqli_query($con, $query);
            }
            else{
                $query="DELETE FROM Decides_In_Patient WHERE pid='$pid' AND did='$did' AND descr='$descr'";
                $result=mysqli_query($con, $query);
            }
        }
    }

    if(isset($_POST["bills_4"])){
        header("Location:bills.php");
    }

    function get_history(){
        global $con;
        $caid=$_SESSION['caid'];
        $query="SELECT * FROM Bills WHERE caid='$caid' ORDER BY bid";
        $result=mysqli_query($con,$query);
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
            $date=$row['date'];
            $complaint=$row['complaint'];
            $depname=$row['depname'];
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
            <td>$date</td>
            <td>$complaint</td>
            <td>$depname</td>
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

    function get_history_admin(){
        global $con;
        $query="SELECT * FROM Bills ORDER BY bid";
        $result=mysqli_query($con,$query);
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
            $depname=$row['depname'];
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
            <td>$depname</td>
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

    function get_history_patient(){
        global $con;
        $pid=$_SESSION['pid'];
        $query="SELECT * FROM Bills WHERE pid='$pid' ORDER BY bid";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
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
            $depname=$row['depname'];
            $diagnosis=$row['diagnosis'];
            $medicine=$row['medicine'];
            $amount=$row['amount'];
            echo "<tr>
            <td>$date</td>
            <td>$depname</td>
            <td>$dname</td>
            <td>$complaint</td>
            <td>$diagnosis</td>
            <td>$medicine</td>
            <td>$amount</td>
            <td>$caname</td>
            </tr>";
        }
    }

    function get_history_doctor(){
        global $con;
        $did=$_SESSION['did'];
        $query="SELECT * FROM Bills WHERE did='$did' ORDER BY bid";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result)){
            $date=$row['date'];
            $pid=$row['pid'];
            $query1="SELECT pname FROM Patient WHERE pid='$pid'";
            $result1=mysqli_query($con,$query1);
            $row1=mysqli_fetch_array($result1);
            $pname=$row1['pname'];
            $complaint=$row['complaint'];
            $diagnosis=$row['diagnosis'];
            $medicine=$row['medicine'];
            $status=$row['no_days'];
            echo "<tr>
            <td>$date</td>
            <td>$pname</td>
            <td>$complaint</td>
            <td>$diagnosis</td>
            <td>$medicine</td>
            <td>$status</td>
            </tr>";
        }
    }
?>