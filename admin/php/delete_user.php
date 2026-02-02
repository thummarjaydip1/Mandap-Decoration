<?php
include 'dbconnection.php';

if (isset($_GET['user_id'])) {
    $id = (int) $_GET['user_id'];  // typecast for safety

    // Query to delete user
    $sql = "DELETE FROM registration WHERE user_id = '$id'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // Redirect back after successful delete
        header("Location: manageuser.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "No user ID provided.";
}
?>
