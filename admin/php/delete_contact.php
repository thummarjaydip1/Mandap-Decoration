<?php
include 'dbconnection.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM contactus WHERE id = $id";

    if (mysqli_query($con, $sql))
    {
        echo "yes";
        header("Location: viewcontact.php");
        exit;
    }
    else
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
else
{
    echo "No product ID provided.";
}
?>