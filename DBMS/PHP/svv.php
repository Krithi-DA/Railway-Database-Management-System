
<?php
include('config/connection.php'); ?>
<?php


if (isset($_POST['updt'])) {
    $sname = $_POST['Station_Name'];
    $sid = $_POST['Station_id'];
    $loc = $_POST['Station_Location'];
    $pno = $_POST['Phone_Number'];
    

    $update_query = "UPDATE station SET Station_Name = '$sname',Station_id= '$sid',Station_Location = '$loc', Phone_Number = '$pno' WHERE Station_id = '$sid'";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) {
        $_SESSION['status'] = "Data is updated successfully";
        $_SESSION['status_code'] = "success";
        header('location: sview.php');
    } else {
        $_SESSION['status'] = "Data is not updated";
        $_SESSION['status_code'] = "error";
        header('location: sview.php');
    }
}



if (isset($_POST['dltstation'])) {
    $sid = $_POST['Station_id'];
    $delete_query = "DELETE FROM station WHERE Station_id = '$sid'";
    $delete_query_run = mysqli_query($connection, $delete_query);
    if ($delete_query_run) {
        $_SESSION['status'] = "Data is deleted successfully";
        $_SESSION['status_code'] = "success";
        header('location: sview.php');
    } else {
        $_SESSION['status'] = "Data is not deleted";
        $_SESSION['status_code'] = "error";
        header('location: sv.php');
    }

    
}
?>
