

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




<?php include('config/connection.php') ?>
<div class="container-fluid py-4">

    <div class="row min-vh-80 h-100">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <br><br>
                    <h4>
                        <a href="tview.php" 
                        style="color:darkred; font-size:30px;font-weight: bold">Back</a>
                    </h4>
</div>

  <?php
 $tno = $_GET['Train_No'];
  $fetch_query = "SELECT * FROM train WHERE Train_No = '$tno'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
 <div class="card-body">
 <form action="tvv.php" method="POST">
 <br>
    <div class="mb-3">
 <label for="fname" class="form-label"  style="font-size: 1.5em;"><strong>Train Name:</strong></label>
 <input type="text" name='Train_Name' value="<?php echo $row['Train_Name']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;"class="form-control" id="fname" required>
 </div>
 <br>
                               
 <div class="mb-3">
  <label for="lname" class="form-label"  style="font-size: 1.5em;"><strong>Train Number:</strong></label>
<input type="text" name='Train_No' value="<?php echo $row['Train_No']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control"id="Station_id" required>
</div>
<br>                           
<div class="mb-3">
 <label for="lname" class="form-label"  style="font-size: 1.5em;"><strong>Arrival Date:</strong></label>
<input type="text" name='Arrival_Date' value="<?php echo $row['Arrival_Date']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
 </div>
 <br>

 <div class="mb-3">
 <label for="sid" class="form-label"  style="font-size: 1.5em;"><strong>Arrival Time:</strong></label>
 <input type="text" name='Arrival_Time' value="<?php echo $row['Arrival_Time']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid"required>
</div>
<br>
<div class="mb-3">
 <label for="sid" class="form-label"  style="font-size: 1.5em;"><strong>Departure Date:</strong></label>
 <input type="text" name='Departure_Date' value="<?php echo $row['Departure_Date']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid"required>
</div> <br>
<div class="mb-3">
 <label for="sid" class="form-label"  style="font-size: 1.5em;"><strong>Departure Time:</strong></label>
 <input type="text" name='Departure_Time' value="<?php echo $row['Departure_Time']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid"required>
</div> <br>

<div class="mb-3">
 <label for="sid" class="form-label"  style="font-size: 1.5em;"><strong>Total Seats:</strong></label>
 <input type="number" name='No_of_Seats' value="<?php echo $row['No_of_Seats']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid"required>
</div> <br> <br>
                                
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
        