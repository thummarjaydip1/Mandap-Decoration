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

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = '$id' ";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row)
        {
    ?>
    <html>
        <head>
            <script>
                function updateTotal()
                {
                    let price = parseFloat(document.getElementById("price").value);
                    let day = parseInt(document.getElementById("day").value);

                    if (isNaN(day) || day < 1) day = 1;

                    document.getElementById("total").value = price * day;
                }
            </script>
        </head>
        <body>
        <div class="booking-box">
            <form action="placeorder.php" method="post">

                <p><b><?= $row['name'] ?></b></p>    

                <img src="../../products/<?= $row['image'] ?>" width="200px" height="200px"><br><br>

                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="hidden" id="price" name="price" value="<?= $row['price'] ?>">
                <input type="hidden" name="image" value="<?= $row['image'] ?>">
                <input type="hidden" name="name" value="<?= $row['name'] ?>">

                <p><b>Decoration Name:</b> <?= $row['name'] ?></p><br>
                <p><b>Price:</b> ₹<?= $row['price'] ?> rupees/day</p><br>

                <?php 
                    $day = 1; 
                    $price = $row['price'];
                    $total = $price * $day; 
                ?>

                <p>
                    <label><b>Enter decoration day:</b></label>
                    <input type="number" id="day" class="box" name="day" value="<?php echo $day; ?>" min="1" oninput="updateTotal()">
                </p><br>

                <p>
                    <label><b>Total:</b></label>
                    <input type="text" id="total" name="total" class="box" value="<?php echo $total; ?>" readonly>
                </p><br>

                <p>
                    <label><b>Payment Method:</b></label>
                    <select name="payment_method" class="box" required>
                        <option value="" class="box">Select Payment Method</option>
                        <option value="Cash on Delivery" class="box">Cash on Delivery</option>
                    </select>
                </p><br>

                <p>
                    <label><b>Address:</b></label>
                    <input type="text" class="box" name="address"  placeholder="Enter Address" required style="width:70%;">
                </p><br>

                <p>
                    <label><b>Mobile No:</b></label>
                    <input type="number" class="box" name="mobile" placeholder="Enter mobile no" required style="width:70%;">
                </p><br>

                <button type="submit" name="booknow" class="btn">Book Now</button>
            </form>
        </div>
        </body>
    </html>
    <?php
        }
        else
        {
            echo "Product not found.";
        }
    }
    else
    {
        echo "Invalid request (ID missing).";
    }
    echo "<hr>";
    include 'footer.php';
}
?>

<style>
    .booking-box{
        width: 500px;
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
    .box{
        padding: 7px;
        border: 1px solid black;
    }
</style>