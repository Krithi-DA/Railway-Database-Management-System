<?php
include('config/connection.php'); ?>
<?php

if (isset($_POST['emp'])) {

    $fname = $_POST['Employee_fname'];
    $mname = $_POST['Employee_minit'];
    $lname= $_POST['Employee_lname'];
    $eid = $_POST['Employee_id'];
    $des = $_POST['Designation'];
    $Address = $_POST['Address'];
    $pno = $_POST['Phone_Number'];
    $apno = $_POST['Alternate_Pnumber'];
    
    try
    {

    
    $insert_query = "INSERT INTO employee(Employee_fname,Employee_minit,Employee_lname,Employee_id,Designation,Address,Phone_Number,Alternate_Pnumber)
    VALUES ( '$fname','$mname','$lname','$eid','$des', '$Address','$pno','$apno')";
    $insert_query_run = mysqli_query($connection, $insert_query);
       
 if ($insert_query_run) 
 {
    $_SESSION['status'] = "Station is inserted successfully";
    $_SESSION['status_code'] = "success";
    header('location:EmployeeT.html');
} 
else 
{
    $_SESSION['status'] = "Station is not inserted";
    $_SESSION['status_code'] = "error";
    header('location:Station.html');
}
}
 catch (mysqli_sql_exception $e) 
 {

exit; 
}

}

?> 