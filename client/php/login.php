<?php 
    include 'dbconnection.php';
    include 'header.php';
?>
<div class="login-box">
<h2>Login</h2><br>
<form action="" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" class="l1" placeholder="Enter Your Name" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" class="l1" placeholder="Enter Your Password" required><br><br>
    
    <button type="submit" class="btn" name="submit">Login</button>
</form>
</div>
<?php
    if (isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $qry="select * from registration where name='$name' and password='$password' ";
        $res=mysqli_query($con,$qry);

        if(mysqli_num_rows($res) > 0)
        {
            $row= mysqli_fetch_assoc($res);
            
            $_SESSION['userid'] = $row['user_id'];
            
            $_SESSION['username'] = $row['name'];

            echo "<script>
            alert('Login Successful');
            window.location.href='index.php';
            </script>";
            exit;
        }
        else
        {
            echo "<script>
            alert('Invalid username or password');
            window.location.href='login.php';
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
    .login-box{
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