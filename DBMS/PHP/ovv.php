
<?php
include('config/connection.php'); ?>
<?php


if (isset($_POST['updt'])) {
    
    $ono = $_POST['Order_Number'];
    $bf = $_POST['Break_Fast'];
    $bq= $_POST['B_Quantity'];
    $l = $_POST['Lunch'];
    $lq = $_POST['L_Quantity'];
    $s = $_POST['Snacks'];
    $sq = $_POST['Snacks_Quantity'];
    $d = $_POST['Dinner'];
    $dq = $_POST['D_Quantity'];
    $sno = $_POST['Seat_Number'];
    $pid = $_POST['Passenger_id'];
    

    $update_query = "UPDATE food_order SET Order_Number = '$ono',Break_Fast= '$bf',B_Quantity = '$bq', Lunch = '$l',L_Quantity = '$lq',Snacks= '$s', Snacks_Quantity = '$sq', Dinner = '$d',D_Quantity='$dq',Seat_Number = '$sno',Passenger_id='$pid'
    WHERE Order_Number = '$ono'";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) 
    {
        $_SESSION['status'] = "Data is updated successfully";
        $_SESSION['status_code'] = "success";
        header('location: oview.php');
    } else
     {
        $_SESSION['status'] = "Data is not updated";
        $_SESSION['status_code'] = "error";
        header('location: oview.php');
    }
}



if (isset($_POST['dltstation'])) {
    $ono = $_POST['Order_Number'];
    $delete_query = "DELETE FROM food_order WHERE Order_Number = '$ono'";
    $delete_query_run = mysqli_query($connection, $delete_query);
    if ($delete_query_run)
     {
        $_SESSION['status'] = "Data is deleted successfully";
        $_SESSION['status_code'] = "success";
        header('location: oview.php');
    }
     else {
        $_SESSION['status'] = "Data is not deleted";
        $_SESSION['status_code'] = "error";
        header('location: ov.php');
    }

    
}
?>
