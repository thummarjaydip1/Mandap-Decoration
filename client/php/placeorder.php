<?php
session_start();
include 'dbconnection.php';

if (isset($_POST['booknow']))
{
    $decoration_name   = $_POST['name'];
    $decoration_price = $_POST['price'];
    $decoration_image  = $_POST['image'];
    $day_of_decoration            = $_POST['day'];
    $total          = $_POST['total'];
    $payment_method = $_POST['payment_method'];
    $decoration_address        = $_POST['address'];
    $mobile         = $_POST['mobile'];

    $qry = "INSERT INTO booknow (name, image, price, dayofdecoration, total, payment, address, mobile, user_id) 
            VALUES ('$decoration_name', '$decoration_image','$decoration_price', '$day_of_decoration', 
            '$total', '$payment_method', '$decoration_address', '$mobile', '{$_SESSION['userid']}')";

    $res = mysqli_query($con, $qry);

    if ($res)
    {
        echo "<script>alert('Order placed successful');</script>";
        header("Location:vieworder.php");
        exit;
    }
    else
    {
        echo "Error: ";
    }
}
else
{
    echo "Invalid request.";
}
?>