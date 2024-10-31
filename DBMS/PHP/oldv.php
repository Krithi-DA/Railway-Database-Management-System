<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Old Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Add your background image URL here */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-image: url('view.jpg'); /* Add your background image URL here */
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
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background-color: #f2f2f2; /* Background color for table cells */
        }
        th {
            background-color: #ccc; /* Background color for table headers */
        }

        
    
        th {
            
            background-color: rgba(204, 204, 204, 0.7);
            font-weight: bold;
            font-size: 20px; 
    
        }
        td {
            font-size: 17px; /* Increase font size for table data */
        }
        .btn {
            background-color: gold; /* Change button color to yellow */
            color: black; /* Change text color */
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
        <th scope="col">Firstname</th>
            <th scope="col">Middlename</th>
            <th scope="col">Lastname</th>
            <th scope="col">Employee Id</th>
            <th scope="col">Designation</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Resigned Date</th>
        
        
        </tr>
    </thead>
    <tbody>
        <?php
        $fetch_query = "SELECT * FROM old_emp_details";
        $fetch_query_run = mysqli_query($connection, $fetch_query);
        if (mysqli_num_rows($fetch_query_run) > 0) {
            foreach ($fetch_query_run as $row) {
                ?>
                <tr>
                <td><?php echo $row['Employee_fname'] ?></td>
                    <td><?php echo $row['Employee_minit'] ?></td>
                    <td><?php echo $row['Employee_lname'] ?></td>
                    <td><?php echo $row['Employee_id'] ?></td>
                    <td><?php echo $row['Designation'] ?></td>
                    <td><?php echo $row['Phone_Number'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><?php echo $row['Resigned_Date'] ?></td>
        <form action="oldvv.php" method="GET">
                    <input type="hidden" name="Employee_id" value="<?php echo $row['Employee_id'] ?>">
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
                <a href="LogO.html" style="color: darkred; font-size: 30px; font-weight: bold">Back</a>
            </h4>
        </div>
    </div>
</div>

</body>
</html>
