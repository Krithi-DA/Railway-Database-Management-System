<?php
include('config/connection.php'); ?>
<?php

if (isset($_POST['order'])) {

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
    
    
    try
    {

    
    $insert_query = "INSERT INTO food_order(Order_Number,Break_Fast,B_Quantity,Lunch,L_Quantity,Snacks,Snacks_Quantity,Dinner,D_Quantity,Seat_Number,Passenger_id)
    VALUES ('$ono','$bf','$bq','$l','$lq','$s','$sq','$d','$dq','$sno','$pid')";
     $insert_query_run = mysqli_query($connection, $insert_query);

    if ($insert_query_run) 
    {
    $_SESSION['status'] = "Station is inserted successfully";
    $_SESSION['status_code'] = "success";
    header('location: lout.html');
} 
else
 {
    $_SESSION['status'] = "Station is not inserted";
    $_SESSION['status_code'] = "error";
    header('location: Food.html');
}
}
 catch (mysqli_sql_exception $e)
  {

    exit; 
}

 
}
?>