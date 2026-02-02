<?php 
  include 'dbconnection.php';
  include 'header.php';

if (!isset($_SESSION['userid']))
{
  echo "<script>
    alert('Please login first.');
    window.location.href='login.php';
  </script>";
  exit;
}
else
{
?>
  <html>
  <body>
    <div class="feedback-box">
    <form action="" method="post">
      <h2>Feedback Form</h2><br>
      
      <label>Your Name</label><br>
      <input type="text" name="name" class="l1" placeholder="Enter Your Name" required><br><br>
      
      <label>Your Email</label><br>
      <input type="email" name="email" class="l1" placeholder="Enter Your Email" required><br><br>
      
      <label>Rate Us</label><br>
      <select name="rating" class="l1" required>
        <option value="">-- Select --</option>
        <option value="5 star" class="l1">⭐⭐⭐⭐⭐ Excellent</option>
        <option value="4 star" class="l1">⭐⭐⭐⭐ Good</option>
        <option value="3 star" class="l1">⭐⭐⭐ Average</option>
        <option value="2 star" class="l1">⭐⭐ Poor</option>
        <option value="1 star" class="l1">⭐ Very Bad</option>
      </select><br><br>
      
      <label for="message">Your Feedback</label><br>
      <textarea name="message" class="l1" placeholder="Enter Your Feedback" required></textarea><br><br>
      
      <button type="submit" name="submit" class="btn">Submit Feedback</button>
    </form>
    </div>
  </body>
  </html>

<?php 
  if (isset($_POST['submit']))
  {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $rating  = $_POST['rating'];
    $message = $_POST['message'];

    $qry = "INSERT INTO feedback (name, email, rating, message) VALUES ('$name', '$email', '$rating', '$message') ";
    $res=mysqli_query($con,$qry);
    if($res > 0)
    {
        echo "<script>
        alert('Send Message Successful');
        </script>";
        exit;
    }
    else
    {
        echo "<script>
        alert('Send Message Unsuccessful');
        </script>";
        exit;
    }
  }
  echo "<hr>";
  echo "<br>";
  include 'footer.php';
}
?>

<style>
  .l1{
    border :1px solid black;
        padding: 7px;
  }
  .feedback-box{
    width: 350px;
    margin: 50px auto;
    border: 2px solid black;
    padding: 20px;
    border-radius: 10px;
    box-shadow:0 0 10px gray;
    background-color: #fff;
  }
  .btn{
    background-color: blue;
    color: white;
  }
  .btn:hover{
    background-color: green;
    color: white;
  }
</style>