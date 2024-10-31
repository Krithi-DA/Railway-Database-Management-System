


<?php
include('config/connection.php'); ?>
<?php


if (isset($_POST['updt']))
 {
    $tname = $_POST['Train_Name'];
    $tno = $_POST['Train_No'];
    $arrivald = $_POST['Arrival_Date'];
    $arrivalt = $_POST['Arrival_Time'];
    $departd = $_POST['Departure_Date'];
    $departt = $_POST['Departure_Time'];
    $nos = $_POST['No_of_Seats'];
    

    $update_query = "UPDATE train SET Train_Name = '$tname',Train_No= '$tno',Arrival_Date = '$arrivald', Arrival_Time = '$arrivalt',Departure_Date= '$departd',Departure_Time = '$departt', No_of_Seats = '$nos'WHERE Train_No = '$tno'";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) {
        $_SESSION['status'] = "Data is updated successfully";
        $_SESSION['status_code'] = "success";
        header('location: tview.php');
    } else {
        $_SESSION['status'] = "Data is not updated";
        $_SESSION['status_code'] = "error";
        header('location: tview.php');
    }
}



if (isset($_POST['dltstation'])) {
    $tno = $_POST['Train_No'];
    $delete_query = "DELETE FROM train WHERE Train_No = '$tno'";
    $delete_query_run = mysqli_query($connection, $delete_query);
    if ($delete_query_run) {
        $_SESSION['status'] = "Data is deleted successfully";
        $_SESSION['status_code'] = "success";
        header('location: tview.php');
    } else {
        $_SESSION['status'] = "Data is not deleted";
        $_SESSION['status_code'] = "error";
        header('location: tview.php');
    }

    
}
?>
