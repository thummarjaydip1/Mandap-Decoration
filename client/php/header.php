<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.site-header{
    position: relative;
    z-index: 9999;
    background: #fff;
    padding-bottom: 10px;
}

.two{
    font-family: cursive;
    color: red;
    font-size: 18px;
}

.login-area{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px;
    margin: 10px 0;
}

.one{
    background: black;
    color: white;
    padding: 6px 14px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 14px;
}
.one:hover{
    background: white;
    color: black;
    border: 1px solid black;
}

.main-menu{
    list-style: none;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: 10px;
}

.five{
    background-color: red;
    padding: 10px 18px;
    border-radius: 15px;
    position: relative;
}

.five a{
    color: white;
    text-decoration: none;
    font-weight: 600;
}

.dropdown{
    display: none;
    position: absolute;
    top: 110%;
    left: 0;
    background: white;
    min-width: 220px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    z-index: 10000;
}

.dropdown li{
    list-style: none;
}

.dropdown li a{
    display: block;
    padding: 8px 12px;
    color: black;
    text-decoration: none;
    font-weight: 500;
}

.dropdown li a:hover{
    background: #f2f2f2;
    border-radius: 10px;
}

.five:hover > .dropdown{
    display: block;
}
</style>
</head>

<body>

<header class="site-header">

<div class="flex justify-between items-center px-5 py-3">
    <img src="../image/logo.png" width="190">

    <div>
        <h5 class="two">112 Sai Krupa Society</h5>
        <h5 class="two">Junagadh</h5>
    </div>

    <div>
        <h5 class="two">Email: thummarjaydip26@gmail.com</h5>
        <h5 class="two">Phone: 9714032218</h5>
    </div>
</div>

<hr>

<div class="login-area">
<?php if(isset($_SESSION['userid'])){ ?>
    <span style="font-weight:bold;">
        Hello <?php echo $_SESSION['username']; ?>
    </span>
    <a href="vieworder.php" class="one">View Order</a>
    <a href="logout.php" class="one">Logout</a>
<?php } else { ?>
    <a href="newuser.php" class="one">New User</a>
    <a href="login.php" class="one">Login</a>
<?php } ?>
</div>

<ul class="main-menu">
    <li class="five"><a href="index.php">HOME</a></li>
    <li class="five"><a href="about.php">ABOUT</a></li>

    <li class="five">
        <a href="product.php?sub_id=18">WEDDING</a>
        <ul class="dropdown">
            <li><a href="product.php?sub_id=5">HALDI</a></li>
            <li><a href="product.php?sub_id=6">RAS-GARBA</a></li>
            <li><a href="product.php?sub_id=7">WEDDING</a></li>
        </ul>
    </li>

    <li class="five">
        <a href="product.php?sub_id=17">PARTY</a>
        <ul class="dropdown">
            <li><a href="product.php?sub_id=1">GAME</a></li>
            <li><a href="product.php?sub_id=2">ANNIVERSARY</a></li>
            <li><a href="product.php?sub_id=3">KITTY</a></li>
            <li><a href="product.php?sub_id=4">BIRTHDAY</a></li>
        </ul>
    </li>

    <li class="five">
        <a href="product.php?sub_id=19">FESTIVAL</a>
        <ul class="dropdown">
            <li><a href="product.php?sub_id=8">DIWALI</a></li>
            <li><a href="product.php?sub_id=9">HOLI</a></li>
            <li><a href="product.php?sub_id=10">GANPATI</a></li>
            <li><a href="product.php?sub_id=11">JANMASHTAMI</a></li>
            <li><a href="product.php?sub_id=12">NAVRATRI</a></li>
        </ul>
    </li>

    <li class="five"><a href="gallary.php">GALLERY</a></li>
    <li class="five"><a href="contact.php">CONTACT</a></li>
    <li class="five"><a href="feedback.php">FEEDBACK</a></li>
</ul>

</header>

</body>
</html>
<hr>