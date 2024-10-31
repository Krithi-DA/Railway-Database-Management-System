<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelled Food Details</title>
    <style>
        body 
        {
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
        .table
         {
            border-collapse: collapse;
            width: 100%;
        }
        th, td 
        {
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
        td 
        {
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


<table class="table">
    <thead>
        <tr>
        <th scope="col">Log Id</th>
        <th scope="col">Order Number</th>
        <th scope="col">Passenger id</th>
        <th scope="col">Seat Number</th>
        <th scope="col">Cancelled Time</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        $fetch_query = "SELECT * FROM cancelled_food_log";
        $fetch_query_run = mysqli_query($connection, $fetch_query);
        if (mysqli_num_rows($fetch_query_run) > 0) {
            foreach ($fetch_query_run as $row) {
                ?>
                <tr>
                <td><?php echo $row['F_log_id'] ?></td>
                <td><?php echo $row['Order_Number'] ?></td>
                <td><?php echo $row['Passenger_id'] ?></td>
                <td><?php echo $row['Seat_Number'] ?></td>
                <td><?php echo $row['Cancelled_Time'] ?></td>
                
                <form action="cancelfv.php" method="GET">
                <input type="hidden" name="F_log_id" value="<?php echo $row['F_log_id'] ?>">
                </form>
                </tr>
                <?php
            }
        } 
        else 
        {
            ?>
            <tr>
                <td colspan="8">No data found</td>
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
                <a href="LogO.html" style="color: darkred; font-size: 30px; 
                font-weight: bold">Back</a>
            </h4>
        </div>
    </div>
</div>

</body>
</html>
