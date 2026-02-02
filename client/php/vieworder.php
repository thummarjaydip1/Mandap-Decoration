<?php
include 'header.php';
include 'dbconnection.php';

$userid = $_SESSION['userid'];

// Fetch Orders
$qry = "SELECT * FROM booknow WHERE user_id='$userid'";
$result = mysqli_query($con, $qry);
?>

<br>
<h2 style="text-align:center">View Booking Details...</h2>
<br>

<center>
<table style="border-collapse: collapse; border:2px solid black; width: 90%;" cellpadding="10">
    <tr>
        <th class="tb">Decoration name</th>
        <th class="tb">Image</th>
        <th class="tb">Price/day</th>
        <th class="tb">Decoration day</th>
        <th class="tb">Total</th>
        <th class="tb">Payment method</th>
        <th class="tb">Address</th>
        <th class="tb">Mobile no</th>
        <th class="tb">Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>  
        <tr>
            <td class="tb"><?= $row['name'] ?></td>
            <td class="tb">
                <img src="../../products/<?= $row['image']; ?>" alt="image" width="100" height="100">
            </td>
            <td class="tb"><?= $row['price'] ?></td>
            <td class="tb"><?= $row['dayofdecoration'] ?></td>
            <td class="tb"><?= $row['total'] ?></td>
            <td class="tb"><?= $row['payment'] ?></td>
            <td class="tb"><?= $row['address'] ?></td>
            <td class="tb"><?= $row['mobile'] ?></td>
            <td class="tb">
                <a href="delete_order.php?id=<?= $row['id'] ?>"
                   onclick="return confirm('Are you sure delete order?');"
                   style="color:red;">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</center>

<br><hr>
<?php include 'footer.php'; ?>

<style>
    .tb{
        border: 1px solid black;
        padding: 5px;
    }
</style>