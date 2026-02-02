<?php
session_start();
include 'dbconnection.php';

if(!isset($_SESSION['userid'])){
    header("Location: login.php");
    exit;
}

$userid = $_SESSION['userid'];

// Check if id is passed
if(isset($_GET['id'])){
    $order_id = $_GET['id'];

    // Delete only if order belongs to this user
    $delete_qry = "DELETE FROM booknow WHERE id='$order_id' AND user_id='$userid'";
    mysqli_query($con, $delete_qry);
}

// Redirect back to vieworder page
header("Location: vieworder.php");
exit;
?>
