<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Station Details</title>
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
            <th scope="col">Station Name</th>
            <th scope="col">Station Id</th>
            <th scope="col">Location</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        
        
        </tr>
    </thead>
    <tbody>
        <?php
        $fetch_query = "SELECT * FROM station";
        $fetch_query_run = mysqli_query($connection, $fetch_query);
        if (mysqli_num_rows($fetch_query_run) > 0) {
            foreach ($fetch_query_run as $row) {
                ?>
                <tr>
                    <td><?php echo $row['Station_Name'] ?></td>
                    <td><?php echo $row['Station_id'] ?></td>
                    <td><?php echo $row['Station_Location'] ?></td>
                    <td><?php echo $row['Phone_Number'] ?></td>
        
                    <td>
                        <form action="sv.php" method="GET">
                            <input type="hidden" name="Station_id" value="<?php echo $row['Station_id'] ?>">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="svv.php" method="POST">
                            <input type="hidden" name="Station_id" value="<?php echo $row['Station_id'] ?>">
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
                <a href="StationT.html" style="color: darkred; font-size: 30px; font-weight: bold">Back</a>
            </h4>
        </div>
    </div>
</div>

</body>
</html>
