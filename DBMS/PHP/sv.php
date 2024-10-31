
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
                    <a href="sview.php" style="color:darkred;font-size:30px;font-weight: bold">Back</a>

                    </h4>
</div>


                <?php
                $sid = $_GET['Station_id'];
                $fetch_query = "SELECT * FROM station WHERE Station_id = '$sid'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
<div class="card-body">
<form action="svv.php" method="POST">
<br>

     <div class="mb-3"> 
    <label for="fname" class="form-label" style="font-size: 1.5em;"><strong>Station Name:</strong></label>
    <input type="text" name='Station_Name' value="<?php echo $row['Station_Name']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="fname" required>
</div>
<br>

    <div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Station id:</label>
<input type="text" name='Station_id' value="<?php echo $row['Station_id']; ?>" style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="Station_id" required>
</div>
<br>

<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Station Location:</strong></label>
<input type="text" name='Station_Location' value="<?php echo $row['Station_Location']; ?>" style="background-color:gold; padding-left: 50px;  height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
<br>

<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Phone Number:</strong></label>
<input type="number" name='Phone_Number' value="<?php echo $row['Phone_Number']; ?>"style="background-color:gold; padding-left: 50px; height: 30px; border: 2px solid black;font-size:17px;" class="form-control" id="sid" required>
</div>
<br><br>

<button type="submit" name="updt" class="btn btn-lg btn-success">Update</button>
                               

 </form>
                           
</div>
<?php
}
} 
else {
                    echo 'No record found';
                }
                ?>

            </div>
        </div>

            </div>
            </div>
          
</body>
</html>