<?php
    session_start();
    if(isset($_SESSION['admin']))
    {
        include 'header.php';
        include 'dbconnection.php';

        $cat_query= mysqli_query($con,"select * from category");
        
        if(isset($_POST['submit']))
        {
            $cat= $_POST['category'];
            $sub= $_POST['subcategory'];
            $name= $_POST['product_name'];
            $price= $_POST['price'];
            $description= $_POST['description'];
            $images = $_FILES['img']['name'];
            $temp_name = $_FILES['img']['tmp_name'];
            $uploadpath = '../../products/' . $images;
            move_uploaded_file($temp_name, $uploadpath);

            $qry = "INSERT INTO products (category_id, subcategory_id, name, price, description, image) VALUES ('$cat', '$sub', '$name', '$price', '$description', '$images')";
            $rem= mysqli_query($con,$qry);
            if ($rem)
            {
                echo "<script>alert('Add Product Successful');</script>";
            }
            else
            {
                echo "<script>alert('Add Product Unsuccessful');</script>";
            }
        }
?>

    <div class="product-box">
        <h2>Add Mandap Decoration</h2>
        <form action="" method="post" enctype="multipart/form-data">

            <label>Category:</label><br><br>
            <select name="category" class="box" id="category">
                <option value=""  class="box">--Select Category--</option>
                <?php while($cat=mysqli_fetch_assoc($cat_query)) { ?>
                    <option class="box" value="<?= $cat['id'] ?>"><?= $cat['category_name'] ?></option>
                <?php }?>
            </select><br><br>

            <label>Subcategory:</label><br><br>
            <select name="subcategory" class="box" id="subcategory">
                <option value="" class="box">--Select Subcategory</option>
            </select><br><br>

            <label>Decoration Name:</label><br><br>
            <input type="text" class="box" name="product_name" placeholder="Decoration Name" required><br><br>

            <label>Decoration price:</label><br><br>
            <input type="number" class="box" name="price" placeholder="Decoration price" required><br><br>

            <label>Decoration Description:</label><br><br>
            <textarea name="description" class="box" rows="4" placeholder="Decoration Description"></textarea><br><br>

            <label>Decoration Image:</label><br><br>
            <input type="file" class="box" name="img" required><br><br>

            <button type="submit" class="btn" name="submit">Add Product</button>

        </form>
    </div>

    <hr>
    
    <h2 style="text-align:center">View Category</h2>
    <div style="justify-content:center; display:flex;">
    <?php
        $rem = mysqli_query($con, "SELECT * FROM products");

        echo "<table border='1' cellpadding='10' width:500px;>";
        echo "<tr>
            <th>Decoration Name</th>
            <th>Decoration Image</th>
            <th>Decoration Price</th>
            <th>Decoration Description</th>
            <th>Action</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($rem))
        {
            echo "<tr>";
                
            echo "<td>".$row['name']."</td>";

            echo "<td><img src='../../products/".$row['image']."' width='150' height='150'></td>";

            echo "<td>".$row['price']."</td>";

            echo "<td>".$row['description']."</td>";

            echo "<td>
                <button class='update'><a href='update_product.php?id=".$row['id']."'>Update</a></button?> <br>
                <button class='delete'><a href='delete_product.php?id=".$row['id']."' 
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

<script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#category').change(function(){
        var cat_id = $(this).val();
        $.ajax({
            url: 'fetch_subcategory.php',
            method: 'POST',
            data: {category_id: cat_id},
            success:function(data){
                $('#subcategory').html(data);
            }
        });
    });
</script>

<style>
    .product-box{
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
    .update{
        padding: 8px;
        margin: 5px;
        background-color: blue;
        color: white;
        border-radius: 7px;
        border: none;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
    }
    .update:hover{
        box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
    }
    .update a{
        color: white;
        text-decoration:none;
    }
    .update a:hover{
        color: white;
        text-decoration: underline;
    }
    .delete{
        padding: 8px;
        margin: 5px;
        background-color: blue;
        color: white;
        border-radius: 7px;
        border: none;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
    }
    .delete:hover{
        box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
    }
    .delete a{
        color: white;
        text-decoration:none;
    }
    .delete a:hover{
        color: white;
        text-decoration: underline;
    }
</style>