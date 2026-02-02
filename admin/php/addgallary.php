<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Image to Gallery</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['admin']))
{
  include 'dbconnection.php';
  include 'header.php';

  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $images = $_FILES['img']['name'];
      $temp_name = $_FILES['img']['tmp_name'];
      $uploadpath = '../../gallary/' . $images;

      // Move file first
      $res = move_uploaded_file($temp_name, $uploadpath);

      if ($res)
      {
          $qry = "INSERT INTO gallary (name, image) VALUES ('$name', '$images')";
          $result = mysqli_query($con, $qry);

          if ($result)
          {
              echo "<script>alert('Add Gallary Image Successful');</script>";
          }
          else
          {
              echo "<script>alert('Add Gallary Image Unsuccessful');</script>";
          }
      }
      else
      {
          echo "<script>alert('Image Upload Failed');</script>";
      }
  }
  ?>
  <div class="gallary-box">
    <h2>Add Gallery Image</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Enter product name" name="name" class="box" required><br><br>
      <input type="file" name="img" class="box" required><br><br>
      <button type="submit" class="btn" name="submit">Add Product</button>
    </form>
  </div>
  <hr>
    <h2 style="text-align:center;">View Gallary</h2>
    <div style=" justify-content:center; display:flex;">
      <?php
      $rem = mysqli_query($con, "SELECT * FROM gallary");

      echo "<table border='1' cellpadding='10' width:500px;>";
      echo "<tr>
        <th>Decoration Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>";

      while ($row = mysqli_fetch_assoc($rem))
      {
        echo "<tr>";
            
        echo "<td>".$row['name']."</td>";

        echo "<td><img src='../../gallary/".$row['image']."' width='100' height='100'></td>";
            

        echo "<td>
          <button class='add'><a href='delete_gallary.php?id=".$row['id']."' 
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

</body>
</html>

<style>
  .gallary-box{
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