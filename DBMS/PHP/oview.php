<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Details</title>
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
            <th scope="col">Order Number</th>
            <th scope="col">Break Fast</th>
            <th scope="col">B_Quantity</th>
            <th scope="col">Lunch</th>
            <th scope="col">L_Qunatity</th>
            <th scope="col">Snacks</th>
            <th scope="col">S_Quantity</th>
            <th scope="col">Dinner</th>
            <th scope="col">D_Quantity</th>
            <th scope="col">Seat Number</th>
            <th scope="col">Passenger id</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        
        
        </tr>
    </thead>
    <tbody>
        <?php
        $fetch_query = "SELECT * FROM food_order";
        $fetch_query_run = mysqli_query($connection, $fetch_query);
        if (mysqli_num_rows($fetch_query_run) > 0) {
            foreach ($fetch_query_run as $row) {
                ?>
                <tr>
                    <td><?php echo $row['Order_Number'] ?></td>
                    <td><?php echo $row['Break_Fast'] ?></td>
                    <td><?php echo $row['B_Quantity'] ?></td>
                    <td><?php echo $row['Lunch'] ?></td>
                    <td><?php echo $row['L_Quantity'] ?></td>
                    <td><?php echo $row['Snacks'] ?></td>
                    <td><?php echo $row['Snacks_Quantity'] ?></td>
                    <td><?php echo $row['Dinner'] ?></td>
                    <td><?php echo $row['D_Quantity'] ?></td>
                    <td><?php echo $row['Seat_Number'] ?></td>
                    <td><?php echo $row['Passenger_id'] ?></td>
                    
        
        
                    <td>
                        <form action="ov.php" method="GET">
                            <input type="hidden" name="Order_Number" value="<?php echo $row['Order_Number'] ?>">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="ovv.php" method="POST">
                            <input type="hidden" name="Order_Number" value="<?php echo $row['Order_Number'] ?>">
                            <button type="submit" name="dltstation" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                <?php
            }
        } 
        else {
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
                <a href="LogO.html" style="color: darkred; font-size: 30px; font-weight: bold">Back</a>
            </h4>
        </div>
    </div>
</div>


</body>
</html>
