<?php
include('config/connection.php'); ?>
<?php


if (isset($_POST['updt'])) 
{
    $cno = $_POST['Complaint_Number'];
    $fname = $_POST['Passenger_fname'];
    $mname = $_POST['Passenger_minit'];
    $lname= $_POST['Passenger_lname'];
    $pid= $_POST['Passenger_id'];
    $phonenumber = $_POST['Phone_Number'];
    $alpno = $_POST['Alternate_Pnumber'];
    $ctype = $_POST['Complaint_Type'];
    
    $update_query = "UPDATE complaint SET Complaint_Number='$cno',Passenger_fname = '$fname',Passenger_minit= '$mname',Passenger_lname = '$lname', Passenger_id = '$pid',Phone_Number = '$phonenumber',Alternate_Pnumber = '$alpno', Complaint_Type = '$ctype' WHERE Complaint_Number = '$cno'";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) 
    {
        $_SESSION['status'] = "Data is updated successfully";
        $_SESSION['status_code'] = "success";
        header('location: cview.php');
    } 
    else
     {
        $_SESSION['status'] = "Data is not updated";
        $_SESSION['status_code'] = "error";
        header('location: cview.php');
    }
}

if (isset($_POST['dltstation'])) 
{
    $cno = $_POST['Complaint_Number'];
    $delete_query = "DELETE FROM complaint WHERE Complaint_Number = '$cno'";
    $delete_query_run = mysqli_query($connection, $delete_query);
    if ($delete_query_run) 
    {
        $_SESSION['status'] = "Data is deleted successfully";
        $_SESSION['status_code'] = "success";
        header('location: cview.php');
    }
     else
      {
        $_SESSION['status'] = "Data is not deleted";
        $_SESSION['status_code'] = "error";
        header('location:cv.php');
    }

    
}
?>
