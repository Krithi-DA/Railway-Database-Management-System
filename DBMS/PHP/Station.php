<?php
include('config/connection.php'); ?>
<?php



if (isset($_POST['station'])) {

    $stationame = $_POST['Station_Name'];
    $stationid = $_POST['Station_id'];
    $stationlocation= $_POST['Station_Location'];
    $phonenumber = $_POST['Phone_Number'];
    
try
{

    
        $insert_query = "INSERT INTO station(Station_Name,Station_id,Station_Location,Phone_Number)
         VALUES ('$stationame', '$stationid','$stationlocation','$phonenumber')";
        $insert_query_run = mysqli_query($connection, $insert_query);
        
        if ($insert_query_run) {
            $_SESSION['status'] = "Station is inserted successfully";
            $_SESSION['status_code'] = "success";
            header('location: StationT.html');
        } else {
            $_SESSION['status'] = "Station is not inserted";
            $_SESSION['status_code'] = "error";
            header('location: Station.html');
        }
    }
         catch (mysqli_sql_exception $e) {
        
        exit; 
    }
       
            
    

}

?> 


        
    

