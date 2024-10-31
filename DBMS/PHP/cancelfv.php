
<?php include('config/connection.php') ?>

                <?php
                $fid = $_GET['F_log_id'];
                $fetch_query = "SELECT * FROM cancelled_food_log WHERE F_log_id = '$fid'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {

                ?>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="fname" class="form-label">Log Id</label>
                                    <input type="text" name='F_log_id' value="<?php echo $row['F_log_id']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="fname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fname" class="form-label">Order No</label>
                                    <input type="text" name='Order_Number' value="<?php echo $row['Order_Number']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="fname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lname" class="form-label">Passenger id</label>
                                    <input type="text" name='Passenger_id' value="<?php echo $row['Passenger_id']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="lname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sid" class="form-label">Seat Number</label>
                                    <input type="text" name='Seat_Number' value="<?php echo $row['Seat_Number']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="sid" required>
                                </div>
                                

                                <div class="mb-3">
                                    <label for="sid" class="form-label"> Cancelled Time</label>
                                    <input type="text" name='Cancelled_Time' value="<?php echo $row['Cancelled_Time']; ?>" style="background-color: lightGray; padding-left: 5px;" class="form-control" id="sid" required>
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

        