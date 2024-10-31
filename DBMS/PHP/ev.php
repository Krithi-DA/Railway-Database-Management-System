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

<?php include('config/connection.php'); ?>
<div class="container-fluid py-4">
 <div class="row min-vh-80 h-100">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                <br>
                <br>
                    <h4>
                        <a href="eview.php" 
                        style="color:darkred; font-size:30px;font-weight: bold">Back</a>
                    </h4>
    </div>


                <?php
                $eid = $_GET['Employee_id'];
                $fetch_query = "SELECT * FROM employee WHERE Employee_id = '$eid'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
<div class="card-body">
<form action="evv.php" method="POST">
<br>

<div class="mb-3">
<label for="fname" class="form-label" style="font-size: 1.5em;"><strong>Firstname:</strong></label>
<input type="text" name='Employee_fname' value="<?php echo $row['Employee_fname']; ?>"style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="fname" required>
</div>

<br>             

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Middlename:</strong></label>
<input type="text" name='Employee_minit' value="<?php echo $row['Employee_minit']; ?>"style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;"class="form-control" id="Station_id" required>
</div>

<br>                           
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Lastname:</strong></label>
<input type="text" name='Employee_lname' value="<?php echo $row['Employee_lname'];?>"  style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
          
<br> 

<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Employee Id:</strong></label>
<input type="text" name='Employee_id' value="<?php echo $row['Employee_id'];?>"  style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
        
<br>                           
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Designation:</strong></label>
<input type="text" name='Designation' value="<?php echo $row['Designation'];?>"  style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
        
<br>                           
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Address:</strong></label>
<input type="text" name='Address' value="<?php echo $row['Address'];?>"  style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>
        
<br>                           
<div class="mb-3">
<label for="lname" class="form-label" style="font-size: 1.5em;"><strong>Phone Number:</strong></label>
<input type="number" name='Phone_Number' value="<?php echo $row['Phone_Number'];?>"  style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;" class="form-control" id="lname" required>
</div>

<br>

<div class="mb-3">
<label for="sid" class="form-label" style="font-size: 1.5em;"><strong>Alternate Number:</strong></label>
<input type="text" name='Alternate_Pnumber' value="<?php echo $row['Alternate_Pnumber']; ?>"  style="background-color:gold; padding-left: 50px; height: 30px;border: 2px solid black;font-size:17px;"class="form-control" id="sid" required>
</div>

<br> <br> 

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

        