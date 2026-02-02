<?php
    include 'dbconnection.php';
?>

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <?php
        session_start();
        if(isset($_POST['submit']))
        {
            $username=$_POST['user'];
            $password=$_POST['pass'];
            $qry="SELECT * FROM admin where username='$username' and password='$password' ";
            $res=mysqli_query($con,$qry);
            if($r= mysqli_fetch_array($res))
            {
                $_SESSION['admin']= $r['username'];
                header("Location:dashboard.php");
            }
            else
            {
                echo "<div style='border: 1px solid red; background-color:yellow; color:red; text-align:center; 
                font-size: 18px; padding:10px;'>Please enter valid username=$username and password=$password</div>";
            }
        }
    ?>


    <div class="login-box">
        <h2 >Admin Login Here...</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" placeholder="Enter user name" class="box" name="user"><br><br>
            <input type="password" placeholder="Enter password" class="box" name="pass"><br><br>
            <input type="submit" name="submit" class="btn" value="Login">
        </form>
    </div>
</body>
</html>
<style>
    .login-box{
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
</style>