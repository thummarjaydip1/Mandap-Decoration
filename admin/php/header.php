<header>
<nav class="four">
    <h2 class="five">Admin Panel</h2>
    <ul class="one">
        <li class="two">
            <a href="dashboard.php" class="three">Dashboard</a>
        </li>
        <li class="two">
            <a href="manageuser.php" class="three">Manage User</a>
        </li>
        <li class="two">
            <a href="addcategory.php" class="three">Add Category</a>
        </li>
        <li class="two">
            <a href="addsubcategory.php" class="three">Add Subcategory</a>
        </li>
        <li class="two">
            <a href="addproduct.php" class="three">Add Product</a>
        </li>
        <li class="two">
            <a href="addgallary.php" class="three">Add Gallary</a>
        </li>
        <li class="two">
            <a href="viewbooking.php" class="three">All Booking</a>
        </li>
        <li class="two">
            <a href="viewcontact.php" class="three">View Contact</a>
        </li>
        <li class="two">
            <a href="viewfeedback.php" class="three">View Feedback</a>
        </li>
        <li class="two">
            <a href="logout.php" class="three">Logout</a>
        </li>
    </ul>
</nav>
</header>

<style>
    .one{
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style-type: none;
    }
    .three{
        text-decoration: none;
        color: white;
    }
    .four{
        background-color: red;
        padding: 10px;
    }
    .five{
        text-align: center;
        color: green;
    }
    .five:hover{
        color: white;
        transition: 1s;
    }
    .two{
        background-color: green;
        padding: 8px;
        border-radius: 7px;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
    }
    .two:hover{
        background-color: green;
        border-radius: 7px;
        box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
    }

</style>