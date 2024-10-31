
<?php include('config/connection.php') ?>
<?php
    $lid = $_GET['Log_id'];
    $fetch_query = "SELECT * FROM cancelled_ticket_log WHERE Log_id = '$lid'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);
    if ($fetch_query_run) 
    {
    foreach ($fetch_query_run as $row)
     {
       ?>
     <div class="card-body">
     <form action="tivv.php" method="POST">

     <div class="mb-3">
     <label for="sid" class="form-label">Log id</label>
    <input type="number" name='Log_id' value="<?php echo $row['Log_id']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="sid" required>
    </div>

          
     <div class="mb-3">
        <label for="lname" class="form-label">Passenger id</label>
        <input type="text" name='Passenger_id ' value="<?php echo $row['Passenger_id']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
    </div>
           
 
<div class="mb-3">
    <label for="fname" class="form-label">Passenger fname</label>
    <input type="text" name='Passenger_fname' value="<?php echo $row['Passenger_fname']; ?>" style="background-color: lightGray; padding-left:5px;"class="form-control" id="fname" required>
</div>
                               
<div class="mb-3">
    <label for="minit" class="form-label">Passenger mname</label>
    <input type="text" name='Passenger_Minit' value="<?php echo $row['Passenger_Minit']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control"id="Station_id" required>
</div>
                               
<div class="mb-3">
    <label for="lname" class="form-label">Passenger lname</label>
    <input type="text" name='Passenger_lname' value="<?php echo $row['Passenger_lname']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
 </div>

 <div class="mb-3">
    <label for="lname" class="form-label">Seat Number</label>
    <input type="text" name='Seat_Number' value="<?php echo $row['Seat_Number']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
 </div>

 <div class="mb-3">
    <label for="lname" class="form-label">Cancelled Time</label>
    <input type="text" name='Cancelled_Time' value="<?php echo $row['Cancelled_Time']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
 </div>
 </form>
                           
</div>
<?php
        }
    } else
     {
     echo 'No record found';
    }
        ?>

            </div>
        </div>

        