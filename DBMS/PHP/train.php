<?php
include('config/connection.php'); ?>
<?php

if (isset($_POST['train'])) {

    $tname = $_POST['Train_Name'];
    $tno = $_POST['Train_No'];
    $arrivald = $_POST['Arrival_Date'];
    $arrivalt = $_POST['Arrival_Time'];
    $departd = $_POST['Departure_Date'];
    $departt = $_POST['Departure_Time'];
    $nos = $_POST['No_of_Seats'];

    
try{


    
$insert_query = "INSERT INTO train(Train_Name,Train_No,Arrival_Date,Arrival_Time,Departure_Date,Departure_Time,No_of_Seats)
VALUES ( '$tname','$tno','$arrivald','$arrivalt','$departd','$departt','$nos')";
 $insert_query_run = mysqli_query($connection, $insert_query);
 if ($insert_query_run) {
    $_SESSION['status'] = "Station is inserted successfully";
    $_SESSION['status_code'] = "success";
    header('location: trainT.html');
} else {
    $_SESSION['status'] = "Station is not inserted";
    $_SESSION['status_code'] = "error";
    header('location: train.html');
}
}
 catch (mysqli_sql_exception $e) {

exit; 
}

 
}
?>