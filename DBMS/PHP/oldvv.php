<?php include('config/connection.php') ?>

<?php
    $eid = $_GET['Employee_id'];
    $fetch_query = "SELECT * FROM old_emp_details WHERE Employee_id = '$eid'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);
    if ($fetch_query_run) {
    foreach ($fetch_query_run as $row) {
?>
<div class="card-body">
<form action="" method="POST">

<div class="mb-3">
<label for="fname" class="form-label">Employee Firstname</label>
<input type="text" name='Employee_fname' value="<?php echo $row['Employee_fname']; ?>"style="background-color: lightGray; padding-left: 5px;" class="form-control" id="fname" required>
</div>
                               
<div class="mb-3">
<label for="lname" class="form-label">Employee Middlename</label>
<input type="text" name='Employee_minit' value="<?php echo $row['Employee_minit']; ?>"style="background-color: lightGray; padding-left: 5px;" class="form-control" id="Station_id" required>
</div>
                               
<div class="mb-3">
<label for="lname" class="form-label">Employee Lastname</label>
<input type="text" name='Employee_lname' value="<?php echo $row['Employee_lname'];?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
</div>
          
                               
<div class="mb-3">
<label for="lname" class="form-label">Employee Id</label>
<input type="text" name='Employee_id' value="<?php echo $row['Employee_id'];?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
</div>
        
                               
<div class="mb-3">
<label for="lname" class="form-label">Designation</label>
<input type="text" name='Designation' value="<?php echo $row['Designation'];?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
</div>
        

        
                               
<div class="mb-3">
<label for="lname" class="form-label">Phone Number</label>
<input type="number" name='Phone_Number' value="<?php echo $row['Phone_Number'];?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
</div>

                               
<div class="mb-3">
<label for="lname" class="form-label">Address</label>
<input type="text" name='Address' value="<?php echo $row['Address'];?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
</div>
        
<div class="mb-3">
<label for="sid" class="form-label">Resigned Date</label>
<input type="text" name='Resigned_Date' value="<?php echo $row['Resigned_Date']; ?>" style="background-color: lightGray;padding-left: 5px;" class="form-control" id="sid" required>
</div>        
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

        