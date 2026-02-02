<?php
include 'dbconnection.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM feedback WHERE id = $id";

    if (mysqli_query($con, $sql))
    {
        echo "yes";
        header("Location: viewfeedback.php");
        exit;
    }
    else
    {
        echo "Error deleting record: " ;
    }
}
else
{
    echo "No product ID provided.";
}
?>