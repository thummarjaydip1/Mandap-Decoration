<?php
include 'header.php';
include 'dbconnection.php';

$qry="select * from booknow";
$result= mysqli_query($con,$qry);
?>
<br>
<h2 style="text-align:center">All User Booking Details...</h2>
<br>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<?php while($row= mysqli_fetch_assoc($result)){ ?>  
    <center>
        <table cellpadding="10" style="border:2px solid black;">
            <tr>
                <th>Decoration name</th>
                <th>Image</th>
                <th>Price/day</th>
                <th>Decoration day</th>
                <th>Total</th>
                <th>Payment method</th>
                <th>Address</th>
                <th>Mobile no</th>
            </tr>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><img src="../../products/<?= $row['image']; ?>" alt="image" width="150" height="150"></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['dayofdecoration'] ?></td>
                <td><?= $row['total'] ?></td>
                <td><?= $row['payment'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['mobile'] ?></td>
            </tr>
        </table>
    </center>
<?php } ?>

<br><hr>
<?php include 'footer.php'; ?>
