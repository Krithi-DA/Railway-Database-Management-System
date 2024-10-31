
<?php include('config/connection.php'); ?>
<?php



if (isset($_POST['ticket'])) {

    $fname = $_POST['Passenger_fname'];
    $mname = $_POST['Passenger_minit'];
    $lname= $_POST['Passenger_lname'];
    $from = $_POST['Start_Location'];
    $to = $_POST['Dest_Location'];
    $ad = $_POST['Arrival_Date'];
    $at= $_POST['Arrival_Time'];
    $dd = $_POST['Departure_Date'];
    $dt = $_POST['Departure_Time'];
    $pid = $_POST['Passenger_id'];
    $sno = $_POST['Seat_Number'];
    $tno= $_POST['Train_No'];
    $st = $_POST['Seat_Type'];
    $price= $_POST['Price'];
    $add = $_POST['Home_Location'];
    $pno= $_POST['Phone_Number'];
    $email = $_POST['Email_id'];


    try{

    
    
$insert_query = "INSERT INTO ticket_booking(Passenger_fname,Passenger_minit,Passenger_lname,Start_Location,Dest_Location,Arrival_Date,Arrival_Time,Departure_Date,Departure_Time,Passenger_id,Seat_Number,Train_No,Seat_Type,Home_Location,Price,Phone_Number,Email_id)
VALUES ('$fname', '$mname','$lname','$from','$to','$ad','$at','$dd','$dt','$pid','$sno',
'$tno','$st','$add','$price','$pno','$email')";
$insert_query_run = mysqli_query($connection, $insert_query);
           
if ($insert_query_run) {
    $_SESSION['status'] = "Station is inserted successfully";
    $_SESSION['status_code'] = "success";
    header('location:ticketbookT.html');
} else {
    $_SESSION['status'] = "Station is not inserted";
    $_SESSION['status_code'] = "error";
    header('location: ticketbook.html');
}
}
 catch (mysqli_sql_exception $e) {

exit; 
}
    
       
            
    
}


?> 


        
    

