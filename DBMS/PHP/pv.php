
<?php include('config/connection.php') ?>

  <?php
                $pid = $_GET['Passenger_id'];
                $fetch_query = "SELECT * FROM passenger WHERE Passenger_id = '$pid'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="fname" class="form-label">first Name</label>
                                    <input type="text" name='Passenger_fname' value="<?php echo $row['Passenger_fname']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="fname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lname" class="form-label" >Middle Name</label>
                                    <input type="text" name='Passenger_minit' value="<?php echo $row['Passenger_minit']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lname" class="form-label" >Last Name</label>
                                    <input type="text" name='Passenger_lname' value="<?php echo $row['Passenger_lname']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sid" class="form-label" >Passenger ID</label>
                                    <input type="text" name='Passenger_id' value="<?php echo $row['Passenger_id']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="sid" required>
                                </div>
                                <div class="mb-3">
                                    <label for="relation" class="form-label" >Address</strong></label>
                                    <input type="text" name='Home_Location' value="<?php echo $row['Home_Location']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="relation" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label" >Phone Number</strong></label>
                                    <input type="number" name='Phone_Number' value="<?php echo $row['Phone_Number']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label" >Email id</strong></label>
                                    <input type="number" name='Email_id' value="<?php echo $row['Email_id']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="date" required>
                                </div>
                            
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

      