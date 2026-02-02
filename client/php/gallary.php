<?php 
    include 'header.php';
    include 'dbconnection.php';
    $result=mysqli_query($con,"select * from gallary");
?>
<br>
<center><h1 class="text-2xl">Gallary</h1></center>

<div class="gallery-container">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    
    <div class="gallary1">
      <h2 style="font-weight: bold;"><?= $row['name']; ?></h2><br>
      <img src="../../gallary/<?= $row['image']; ?>" alt="Gallary image" class="l2">
    </div>

<?php } ?>
</div>

<hr><br>
<?php include 'footer.php'; ?>

<style>
.gallery-container
{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
    gap: 20px; 
    justify-items: center;
    margin: 20px;
}

.gallary1
{
    border: 2px solid black;
    padding: 10px;
    text-align: center;
    width: 100%;
    max-width: 400px;
}

.gallary1 img
{
  width: 100%;
  height: 300px;                
  display: block;
  margin: 0 auto;
  border-radius: 8px;     
  transition: transform 0.3s ease;
}

.gallary1 img:hover
{
  transform: scale(1.05);
}

</style>
