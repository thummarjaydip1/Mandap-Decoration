<?php
    session_start();
    if(isset($_SESSION['admin']))
    {
        include 'dbconnection.php';
        include 'header.php';

        $userQuery = mysqli_query($con, "SELECT COUNT(*) as all_users FROM registration");
        $userData = mysqli_fetch_assoc($userQuery);

        $decorationQuery = mysqli_query($con, "SELECT COUNT(*) as all_products FROM products");
        $decorationData = mysqli_fetch_assoc($decorationQuery);

        $bookingQuery = mysqli_query($con, "SELECT COUNT(*) as all_booking FROM booknow");
        $bookingData = mysqli_fetch_assoc($bookingQuery);
?>

    <style>
        .card { 
            width: 400px; 
            padding: 23px;
            font-size: 25px; 
            margin: 20px; 
            background-color: #eed2d2ff; 
            border-radius: 10px; 
            text-align: center;
            box-shadow: 2px 2px 3px 3px black;
        }
        .card:hover{
            box-shadow: 2px 5px 5px 3px black;            
        }
        .a1{
            display: inline-block;
        }
    </style>
    <center>
        <div class="card">
            <h3 class="a1">Total Users:</h3>&nbsp;&nbsp;&nbsp;
            <p class="a1"><?php echo $userData['all_users']; ?></p>
        </div><br>
        <div class="card">
            <h3 class="a1">Total Decorated Mandap:</h3>&nbsp;&nbsp;&nbsp;
            <p class="a1"><?php echo $decorationData['all_products']; ?></p>
        </div><br>
        <div class="card">
            <h3 class="a1">Total Booking:</h3>&nbsp;&nbsp;&nbsp;
            <p class="a1"><?php echo $bookingData['all_booking']; ?></p>
        </div>
        <br>    
    </center>
<?php
    include 'footer.php';
    }
    else
    {
        header("Location:index.php");
    }
?>