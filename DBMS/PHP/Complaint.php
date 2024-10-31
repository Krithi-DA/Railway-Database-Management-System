<?php
include('config/connection.php'); ?>
<?php

if (isset($_POST['cmpp'])) {

    $cno = $_POST['Complaint_Number'];
    $fname = $_POST['Passenger_fname'];
    $mname = $_POST['Passenger_minit'];
    $lname= $_POST['Passenger_lname'];
    $pid= $_POST['Passenger_id'];
    $phonenumber = $_POST['Phone_Number'];
    $alpno = $_POST['Alternate_Pnumber'];
    $ctype = $_POST['Complaint_Type'];
    
    
try
{

         $insert_query = "INSERT INTO complaint(Complaint_Number,Passenger_fname,Passenger_minit,Passenger_lname,Passenger_id,Phone_Number,Alternate_Pnumber,Complaint_Type)
         VALUES ('$cno','$fname','$mname','$lname','$pid','$phonenumber','$alpno','$ctype')";
         $insert_query_run = mysqli_query($connection, $insert_query);
        if ($insert_query_run) 
        {
            $_SESSION['status'] = "Station is inserted successfully";
            $_SESSION['status_code'] = "success";
            header('location:logout.html');
        } 
        else 
        {
            $_SESSION['status'] = "Station is not inserted";
            $_SESSION['status_code'] = "error";
            header('location: ComplaintT.html');
        }
    }
         catch (mysqli_sql_exception $e) 
         {
        
        exit; 
         }  

}

?> 


        
    

