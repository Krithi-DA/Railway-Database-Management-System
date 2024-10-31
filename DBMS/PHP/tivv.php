


<?php
include('config/connection.php'); ?>
<?php


if (isset($_POST['updt'])) {
    $fname = $_POST['Passenger_fname'];
    $mname = $_POST['Passenger_minit'];
    $lname= $_POST['Passenger_lname'];
    $from = $_POST['Start_Location'];
    $to = $_POST['Dest_Location'];
    $arrivald = $_POST['Arrival_Date'];
    $arrivalt = $_POST['Arrival_Time'];
    $departd = $_POST['Departure_Date'];
    $departt = $_POST['Departure_Time'];
    $pid = $_POST['Passenger_id'];
    $sno = $_POST['Seat_Number'];
    $tno = $_POST['Train_No'];
    $stype = $_POST['Seat_Type'];
    $price = $_POST['Price'];
    $hom = $_POST['Home_Location'];
  $pno = $_POST['Phone_Number'];
    $eid = $_POST['Email_id'];

    $update_query = "UPDATE ticket_booking SET Passenger_fname = '$fname',Passenger_minit= '$mname', Passenger_lname = '$lname',Start_Location = '$from',Dest_Location = '$to',Arrival_Date= '$arrivald', Arrival_Time = '$arrivalt',Departure_Date = '$departd', Departure_Time = '$departt',Passenger_id= '$pid', Seat_Number = '$sno', Train_No = '$tno',Seat_Type = '$stype',Price= '$price',Home_Location='$hom', Phone_Number = '$pno', Email_id='$eid'WHERE Passenger_id = '$pid' and Seat_Number='$sno' ";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) {
        $_SESSION['status'] = "Data is updated successfully";
        $_SESSION['status_code'] = "success";
        header('location: tiview.php');
    } else {
        $_SESSION['status'] = "Data is not updated";
        $_SESSION['status_code'] = "error";
        header('location: tiview.php');
    }
}



if (isset($_POST['dltstation'])) {
    $pid = $_POST['Passenger_id'];
    $sno = $_POST['Seat_Number'];
    $delete_query = "DELETE FROM ticket_booking WHERE Passenger_id = '$pid' and Seat_Number='$sno'";
    $delete_query_run = mysqli_query($connection, $delete_query);
    if ($delete_query_run) {
        $_SESSION['status'] = "Data is deleted successfully";
        $_SESSION['status_code'] = "success";
        header('location: tiview.php');
    } else {
        $_SESSION['status'] = "Data is not deleted";
        $_SESSION['status_code'] = "error";
        header('location: tiv.php');
    }

    
}
?>
