<?php 
    include 'dbconnection.php';
    include 'header.php';
?>

<?php
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
    <div class="contact-box">
    <h2>Contact Us</h2>
    <br>
    <form action="" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" class="l1" placeholder="Enter Your Name" required><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" class="l1" placeholder="Enter Your Email" required><br><br>
        
        <label>Phone:</label><br>
        <input type="number" name="phone" class="l1" placeholder="Enter Your Phone No" maxlength="10" required><br><br>
        
        <label>Subject:</label><br>
        <input type="text" name="subject" class="l1" placeholder="Enter Your Subject" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" row="5" class="l1" placeholder="Enter Any Message" required></textarea><br><br>

        <button type="submit" name="submit" class="btn">Send Message</button>
    </form>
    </div>
<hr>

<?php
    if (isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        $qry="insert into contactus (name, email, phone, subject, message) values ('$name', '$email', '$phone', '$subject', '$message') ";
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

    include 'footer.php';
}
?>

<style>
    .l1{
        border :1px solid black;
        padding: 7px;
    }
    .contact-box{
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