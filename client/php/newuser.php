<?php 
    include 'dbconnection.php';
    include 'header.php';
?>
<div class="registration-box">
<h2>New User</h2><br>
<form action="" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" class="l1" placeholder="Enter Your Name" required><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" class="l1" placeholder="Enter Your Email" required><br><br>
    
    <label>Phone:</label><br>
    <input type="text" name="phone" class="l1" placeholder="Enter Your Phone No" maxlength="10" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" class="l1" placeholder="Enter Your Password" required><br><br>

    <label>Gender</label><br>
    <input type="radio" name="gender" value="male" required><label>Male</label>
    <input type="radio" name="gender" value="female" required><label>Female</label><br><br>

    <button type="submit" name="submit" class="btn">Register</button>
</form>
</div>

<?php
    if (isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $qry="insert into registration (name, email, phone, password, gender) values ('$name', '$email', '$phone', '$password', '$gender') ";
        $res=mysqli_query($con,$qry);
        if($res > 0)
        {
            echo "<script>
            alert('Registration Successful');
            </script>";
            exit;
        }
        else
        {
            echo "<script>
            alert('Registration Unsuccessful');
            </script>";
            exit;
        }
    }
?><hr><?php
    include 'footer.php';
?>

<style>
    .l1{
        border :1px solid black;
        padding: 7px;
    }
    .registration-box{
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