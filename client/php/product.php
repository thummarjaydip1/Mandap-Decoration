<?php
include 'dbconnection.php';
include 'header.php';

if (isset($_GET['sub_id']))
{
    $sub_id = $_GET['sub_id'];

    $sub_sql = "SELECT * FROM subcategory WHERE id = $sub_id";
    $sub_result = mysqli_query($con, $sub_sql);
    $sub = mysqli_fetch_assoc($sub_result);

    echo "<h2 style='color:#009933; text-align: center; font-size:20px; font-weight: bold;'>" . $sub['subcategory_name'] . "</h2>";

    $prod_sql = "SELECT * FROM products WHERE subcategory_id = $sub_id";
    $prod_result = mysqli_query($con, $prod_sql);

    if (mysqli_num_rows($prod_result) > 0)
    {
        echo "<div style='display:block; text-align:center;'>";
while ($prod = mysqli_fetch_assoc($prod_result))
{
    echo "
    <div style='border:1px solid #ccc; border-radius:8px; text-align:center; width:900px; margin:20px auto; padding:20px; box-shadow:0 2px 6px rgba(255, 8, 8, 0.1);'>

        <img src='../../products/" . $prod['image'] . "' width='800' height='800' style='display:block; margin:0 auto;'><br>

        <b style='font-weight:bold;'>" . $prod['name'] . "</b><br><br>

        <span style='color:#ff6600; font-weight:bold;'>₹" . $prod['price'] . "</span><br><br>
        
        <a href='booknow.php?id=" . $prod['id'] . "' 
        style='display:inline-block; background-color:#009933; color:white; padding:10px 20px; text-decoration:none; border-radius:5px; font-weight:bold; transition:0.3s;'>
        Book Now
        </a>
    </div>";

}
    echo "</div>";

    }
    else
    {
        echo "<p>No products found for this subcategory.</p>";
    }

}
else
{
    echo "<h3>Please select a subcategory from the menu.</h3>";
}

echo "<br>";
echo "<hr>";
echo "<br>";
include 'footer.php';
?>
