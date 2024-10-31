<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Details</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-image: url('view.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            
        }
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
            background-color: #f2f2f2; 
        }
        th {
            
            background-color: rgba(204, 204, 204, 0.7);
            font-weight: bold;
            font-size: 20px; 
    
        }
        td {
            font-size: 17px; 
        }
        .btn {
            background-color: gold;
            color: black; 
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 17px;
            border: 2px solid black; 
        border-radius: 4px; 
        width: 80px;
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

<table class="table">
    <thead>
        <tr>
            <th scope="col">Train Name</th>
            <th scope="col">Train Number</th>
            <th scope="col">Arrival Date</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Departure Date</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Total Seats</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        
        
        </tr>
    </thead>
    <tbody>
        <?php
        $fetch_query = "SELECT * FROM train";
        $fetch_query_run = mysqli_query($connection, $fetch_query);
        if (mysqli_num_rows($fetch_query_run) > 0) {
            foreach ($fetch_query_run as $row) {
                ?>
                <tr>
                    <td><?php echo $row['Train_Name'] ?></td>
                    <td><?php echo $row['Train_No'] ?></td>
                    <td><?php echo $row['Arrival_Date'] ?></td>
                    <td><?php echo $row['Arrival_Time'] ?></td>
                    <td><?php echo $row['Departure_Date'] ?></td>
                    <td><?php echo $row['Departure_Time'] ?></td>
                    <td><?php echo $row['No_of_Seats'] ?></td>
        
 <td>
 <form action="tv.php" method="GET">
<input type="hidden" name="Train_No" value="<?php echo $row['Train_No'] ?>">
<button type="submit" class="btn btn-warning">Edit</button>
</form>
 </td>
 <td>
  <form action="tvv.php" method="POST">
 <input type="hidden" name="Train_No" value="<?php echo $row['Train_No'] ?>">
 <button type="submit" name="dltstation" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
            <td colspan="16" style="text-align: center; vertical-align: middle; font-weight:bold; color: darkred;">No data found</td>    
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
        </div>

            </div>
            </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <br><br>
            <h4 class="text-center">
                <a href="trainT.html" style="color: darkred; font-size: 30px; font-weight: bold">Back</a>
            </h4>
        </div>
    </div>
</div>

</body>
</html>
