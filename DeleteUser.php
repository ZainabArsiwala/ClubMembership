<?php
include("connection.php");
error_reporting(0);

$id = $_GET['id'];

$deletequery = "DELETE FROM MEMBER WHERE MEMB_ID=$id";

$query = mysqli_query($conn, $deletequery);

if($query)
      {
        ?>
        <script>
                alert("Data deleted successfully!");
        </script>
      <?php
              header('location:DisplayUser.php');

     }
     
      else
      {?>
        <script>
                alert("Failed to delete the data.");
        </script>
      <?php
      }


?> 