<?php
session_start();
if(isset($_SESSION['admin']))
{
    include 'dbconnection.php';
?>

    <?php

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['update'])) 
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $sql = "UPDATE products SET name='$name', price='$price', description='$description' WHERE id = $id";

        if (mysqli_query($con, $sql)) 
        {
            echo "<script>alert('Update Successfully')</script>";
            header("Location: addproduct.php"); 
            exit;
        }
        else 
        {
            echo "Error updating record: ";
        }
    }
    ?>

    <div class="update-box">
        <h2>Update Product</h2>
        <form method="post">
            <?php echo "<td><img src='../../products/".$row['image']."' width='150' height='150'></td>"; ?>
            <h4>Decoration name </h4><input type="text" class="box" name="name" value="<?php echo $row['name']; ?>"><br><br>
            <h4>Decoration Price </h4><input type="text" class="box" name="price" value="<?php echo $row['price']; ?>"><br><br>
            <h4>Decoration Description </h4><input type="text" class="box" name="description" value="<?php echo $row['description']; ?>"><br><br>
            <input type="submit" name="update" class="btn" value="Update">
            <button class="btn1"><a href="addproduct.php">Close</a></button>
        </form><br><br><br>
    </div>
 
    
<?php
}
else
{
    header("Location:index.php");
}
?>
<style>
    .update-box{
        width: 350px;
        margin: 50px auto;
        border: 2px solid black;
        padding: 20px;
        border-radius: 10px;
        box-shadow:0 0 10px gray;
        background-color: #fff;
    }
    .box{
        padding: 5px;
        margin: 5px;
    }
    .btn{
        padding: 8px;
        margin: 5px;
        background-color: blue;
        color: white;
        border-radius: 7px;
        border: none;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
    }
    .btn:hover{
        box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
    }
    .btn1{
        padding: 8px;
        margin: 5px;
        background-color: blue;
        color: white;
        border-radius: 7px;
        border: none;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
    }
    .btn1:hover{
        box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
    }
    .btn1 a{
        color: white;
        text-decoration: none;
    }
    .btn1 a:hover{
        color: white;
        text-decoration: underline;
    }
</style>