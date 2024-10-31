
<?php
include('config/connection.php'); ?>
<?php


if (isset($_POST['updt'])) 
{
    $fname = $_POST['Employee_fname'];
    $mname = $_POST['Employee_minit'];
    $lname= $_POST['Employee_lname'];
    $eid = $_POST['Employee_id'];
    $des = $_POST['Designation'];
    $Address = $_POST['Address'];
    $pno = $_POST['Phone_Number'];
    $apno = $_POST['Alternate_Pnumber'];

   $update_query = "UPDATE employee SET Employee_fname = '$fname',Employee_minit= '$mname',Employee_lname = '$lname', Employee_id = '$eid',Designation = '$des',Address = '$Address',Phone_Number = '$pno',Alternate_Pnumber = '$apno'WHERE Employee_id = '$eid'";
    $update_query_run = mysqli_query($connection, $update_query);
    if ($update_query_run) 
    {
        $_SESSION['status'] = "Data is updated successfully";
        $_SESSION['status_code'] = "success";
        header('location: eview.php');
    }
     else
      {
        $_SESSION['status'] = "Data is not updated";
        $_SESSION['status_code'] = "error";
        header('location: eview.php');
    }
}

if (isset($_POST['dltstation'])) {
$eid = $_POST['Employee_id'];
$delete_query = "DELETE FROM employee WHERE Employee_id = '$eid'";
$delete_query_run = mysqli_query($connection, $delete_query);
if ($delete_query_run)
 {
        $_SESSION['status'] = "Data is deleted successfully";
        $_SESSION['status_code'] = "success";
        header('location: eview.php');
    } 
    else 
    {
        $_SESSION['status'] = "Data is not deleted";
        $_SESSION['status_code'] = "error";
        header('location:ev.php');
    }

    
}
?>
