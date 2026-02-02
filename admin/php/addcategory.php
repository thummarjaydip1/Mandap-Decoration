<?php
session_start();
if(isset($_SESSION['admin']))
{
    include 'header.php';
    include 'dbconnection.php';

    if(isset($_POST['submit']))
    {
        $category=$_POST['category'];
        $qry="insert into category (category_name) values ('$category')";
        $res=mysqli_query($con,$qry);
        if($res)
        {
            echo "<script>alert('Add Category Successful');</script>";
        }
        else
        {
            echo "<script>alert('Add Category Unsuccessful');</script>";
        }
    }

    ?>
    <div class="category-box">
        <h2>Add Category</h2>
        <form action="" method="post">
            <label>Enter Category Name</label><br><br>
            <input type="text" name="category" placeholder="Enter Category Name" class="box" required><br><br>
            <button type="submit" class="btn" name="submit">Add Category</button>
        </form>
    </div>

    <hr>

    <h2 style="text-align:center">View Category</h2>
    <div style="justify-content:center; display:flex;">
    <?php
        $rem = mysqli_query($con, "SELECT * FROM category");

        echo "<table border='1' cellpadding='10' width:500px;>";
        echo "<tr>
            <th>Category Name</th>
            <th>Action</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($rem))
        {
            echo "<tr>";
                
            echo "<td>".$row['category_name']."</td>";

            echo "<td>
                <button class='add'><a href='delete_category.php?id=".$row['id']."' 
                onclick=\"return confirm('Are you sure ?')\">Delete</a></button>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
   </div>

<?php 
    include 'footer.php';
    }
    else
    {
        header("Location:index.php");
    }
?>
<style>
    .category-box{
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
    .add{
        padding: 8px;
        margin: 5px;
        background-color: blue;
        color: white;
        border-radius: 7px;
        border: none;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
    }
    .add:hover{
        box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
    }
    .add a{
        color: white;
        text-decoration:none;
    }
    .add a:hover{
        color: white;
        text-decoration: underline;
    }
</style>