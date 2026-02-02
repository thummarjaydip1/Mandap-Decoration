<?php
session_start();
if(isset($_SESSION['admin']))
{ 
  include 'header.php';
  include 'dbconnection.php';

?>
  <center>
    <h2 style="text-align:center">All User Contact Details...</h2>
    <?php
      echo "<table border='1' cellpadding='10' >";
      echo "<tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Action</th>
      </tr>";

        $qry="SELECT * from contactus";
        $result=mysqli_query($con,$qry);
        while($row=mysqli_fetch_assoc($result))
        {
          echo "<tr>
            <td> {$row['name']} </td>
            <td> {$row['email']} </td>
            <td> {$row['phone']} </td>
            <td> {$row['subject']} </td>
            <td> {$row['message']} </td>
            <td> 
              <button class='add'><a href='delete_contact.php?id=".$row['id']."' onclick=\"return confirm('Are you sure ?')\">Delete</a></button>
            </td>
          </tr>";
        }
        echo "</table>";
    ?>
  </center>
  <br>
<?php
  include 'footer.php';
  }
  else
  {
    header("Location:index.php");
  }
?>
<style>
  .add{
    padding: 8px;
    margin: 5px;
    background-color: blue;
    color: white;
    border-radius: 7px;
    border: none;
    box-shadow:3px 2px 6px rgba(8, 1, 1, 0.5);
  }
  .add:hover{
    box-shadow:3px 2px 6px rgba(8, 1, 1, 1.5);
  }
  .add a{
    color: white;
    text-decoration:none;
  }
  .add a:hover{
    color: white;
    text-decoration: underline;
  }
</style>