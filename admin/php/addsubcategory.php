<?php
session_start();
if(isset($_SESSION['admin']))
{
    include 'header.php';
    include 'dbconnection.php';

    $cat_result=mysqli_query($con,"select * from category");

    if(isset($_POST['submit']))
    {
        $category=$_POST['category'];
        $subcategory=$_POST['subcategory'];
        $qry="insert into subcategory (category_id, subcategory_name) values ('$category','$subcategory')";
        $res=mysqli_query($con,$qry);
        if($res)
        {
            echo "<script>alert('Add Subcategory Successful');</script>";
        }
        else
        {
            echo "<script>alert('Add Subcategory Unsuccessful');</script>";
        }
    }

    ?>

    <div class="subcategory-box">
    <h2>Add Category</h2>
        <form action="" method="post">
            <label>Category</label><br><br>
            <select class="box" name="category">
                <option value="">--Select Category--</option>
                <?php while($row=mysqli_fetch_assoc($cat_result)) { ?>
                        <option value="<?= $row['id'] ?>"><?= $row['category_name'] ?></option>
                <?php } ?>
            </select><br><br>
            <label>Enter Subcategory Name</label><br><br>
            <input type="text" name="subcategory" class="box" placeholder="Enter Subcategory Name" required><br><br>
            <button type="submit" name="submit" class="btn">Add Subcategory</button>
        </form>
    </div>

    <hr>

    <h2 style="text-align:center">View Subcategory</h2>
    <div style="justify-content:center; display:flex;">
    <?php
        $rem = mysqli_query($con, "SELECT * FROM subcategory");

        echo "<table border='1' cellpadding='10' width:500px;>";
        echo "<tr>
            <th>Subcategory Name</th>
            <th>Action</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($rem))
        {
            echo "<tr>";
                
            echo "<td>".$row['subcategory_name']."</td>";

            echo "<td>
                <button class='add'><a href='delete_subcategory.php?id=".$row['id']."' 
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
    .subcategory-box{
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