<?php
    include 'dbconnection.php';

    $cat_id= $_POST['category_id'];
    $result= mysqli_query($con,"select * from subcategory where category_id='$cat_id' ");
    echo "<option value=''>--Select Subcategory--</option>";
    
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<option value='".$row['id']."'>".$row['subcategory_name']."</option>";
    }
?>