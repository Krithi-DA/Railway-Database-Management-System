
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body 
        {
            background-image: url('view.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .btn
         {
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
        .btn:hover
         {
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
                
                
                    <h4>
                        <a href="oview.php"
                        style="color:darkred; font-size:30px;font-weight: bold">Back</a></h4>
                </div>


                <?php
                $ono = $_GET['Order_Number'];
                $fetch_query = "SELECT * FROM food_order WHERE Order_Number = '$ono'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
 <div class="card-body">
<form action="ovv.php" method="POST">
<br>
<div class="mb-3">
<label for="fname" class="form-label" style="font-size: 1.5em;"><strong>Order No</strong></label>
<input type="text" name='Order_Number' value="<?php echo $row['Order_Number']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="fname" required>
</div>

<br>
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Break Fast</strong></label>
<input type="text" name='Break_Fast' value="<?php echo $row['Break_Fast']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="Station_id" required>
</div>
                                
<br>

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>B_Quantity</strong></label>
 <input type="number" name='B_Quantity' value="<?php echo $row['B_Quantity']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
                               
<br>

<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Lunch</strong></label>
<input type="text" name='Lunch' value="<?php echo $row['Lunch']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;
font-size:17px;" class="form-control" id="sid" required>
</div>

<br>

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>L_Quantity</strong></label>
<input type="number" name='L_Quantity' value="<?php echo $row['L_Quantity']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
                              
<br>

<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Snacks</strong></label>
<input type="text" name='Snacks' value="<?php echo $row['Snacks']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid" required>
</div>

<br>
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Snacks Quantity</strong></label>
<input type="number" name='Snacks_Quantity' value="<?php echo $row['Snacks_Quantity']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
 <br>

<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong> Dinner</strong></label>
<input type="text" name='Dinner' value="<?php echo $row['Dinner']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="sid" required>
</div>
 <br>

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Dinner Quantity</strong></label>
<input type="number" name='D_Quantity' value="<?php echo $row['D_Quantity']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div> <br>
                           
<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Seat Number</strong></label>
<input type="text" name='Seat_Number' value="<?php echo $row['Seat_Number']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;"class="form-control" id="sid" required>
</div> <br>
                              
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Passenger id</strong></label>
<input type="text" name='Passenger_id' value="<?php echo $row['Passenger_id']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div> <br> 

<button type="submit" name="updt" class="btn btn-primary">Update</button>
                               

  </form>
</div>
 <?php
}
} 
else 
{
  echo 'No record found';
}
?>

</div>
</div>
</div>
</div>
</body>
</html>