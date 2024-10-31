<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            background-image: url('view.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .btn {
            background-color: gold; 
            color: black; 
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 17px;
            font-weight: bold;
            border: 2px solid black; 
        border-radius: 4px; 
        width: 100px;
        }
        .btn:hover {
            background-color: #ffff00;
             
        }
    </style>
</head>
<body>

<?php include('config/connection.php'); ?>
<div class="container-fluid py-4">

    <div class="row min-vh-80 h-100">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                <br>
                <br>
                    <h4>
    <a href="tiview.php" style="color:darkred; font-size:30px;font-weight: bold">Back</a>
 </h4>
</div>


                <?php
                $pid = $_GET['Passenger_id'];
                $sno = $_GET['Seat_Number'];
                
                $fetch_query = "SELECT * FROM ticket_booking WHERE
                 Passenger_id ='$pid' and Seat_Number='$sno'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
     <div class="card-body">
     <form action="tivv.php" method="post">
     <br>
  <div class="mb-3">
<label for="fname" class="form-label"  style="font-size: 1.5em;"><strong>Passenger fname:</strong></label>
<input type="text" name='Passenger_fname' value="<?php echo$row['Passenger_fname']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;"class="form-control" id="fname">
</div>

<br>

<div class="mb-3">
<label for="minit" class="form-label" style="font-size: 1.5em;"><strong>Passenger mname</strong></label>
<input type="text" name='Passenger_minit' value="<?php echo $row['Passenger_minit']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control"id="Station_id">
</div>

<br>   

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Passenger lname</strong></label>
<input type="text" name='Passenger_lname' value="<?php echo $row['Passenger_lname']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
</div>

<br>                           

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>From</strong></label>
<input type="text" name='Start_Location' value="<?php echo $row['Start_Location']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 <br>
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>To</strong></label>
<input type="text" name='Dest_Location' value="<?php echo $row['Dest_Location']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 
 <br>
 
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Arrival Date</strong></label>
<input type="text" name='Arrival_Date' value="<?php echo $row['Arrival_Date']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 <br>       

 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Arrival Time</strong></label>
<input type="text" name='Arrival_Time' value="<?php echo $row['Arrival_Time']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 
 <br>       
 
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Departure Date</strong></label>
<input type="text" name='Departure_Date' value="<?php echo $row['Departure_Date']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>
 
 <br>       
 
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Departure Time</strong></label>
<input type="text" name='Departure_Time' value="<?php echo $row['Departure_Time']; ?>"style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
 </div>

 
 <br>      
 
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Passenger id</strong></label>
<input type="text" name='Passenger_id ' value="<?php echo $row['Passenger_id']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 
 <br>
 
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Seat Number</strong></label>
<input type="text" name='Seat_Number' value="<?php echo $row['Seat_Number']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 <br>   
 
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Train No</strong></label>
<input type="text" name='Train_No' value="<?php echo $row['Train_No']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 <br>    

           
 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Seat Type</strong></label>
<input type="text" name='Seat_Type' value="<?php echo $row['Seat_Type']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>

 <br> 

 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Price</strong></label>
<input type="number" name='Price' value="<?php echo $row['Price']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>
  <br>

 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Address</strong></label>
<input type="text" name='Home_Location' value="<?php echo $row['Home_Location']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div> <br>
           
  
                               
 <div class="mb-3">
 <label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Phone Number</strong></label>
 <input type="number" name='Phone_Number' value="<?php echo$row['Phone_Number']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid">
 </div>
 <br>

 <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Email id</strong></label>
<input type="text" name='Email_id' value="<?php echo $row['Email_id']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname">
 </div>
                              
 <br>
 
 
 
 <br>
 <button type="submit" name="updt" class="btn btn-primary">Update</button>
                               

                            
                            </form>
                           
                        </div>
                <?php
                    }
                } else {
                    echo 'No record found';
                }
                ?>

            </div>
        </div>

        
        </div>
            </div>
</body>
</html>