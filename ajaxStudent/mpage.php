<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<p id="heading" class="fs-2 fw-bold">My Details :</p>
<table class="table table-bordered border-primary">
  <tbody>
    <?php
      $user=$_SESSION['login_user'];
      $sql="SELECT * FROM `student` where username='$user'";
      $q=mysqli_query($db,$sql);
      $row=mysqli_fetch_assoc($q);
      echo "<tr>";
        echo "<td>Username :</td>";
        echo "<td>"; echo $row['username']; "</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Name :</td>";
        echo "<td>"; echo $row['name']; "</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Qualification :</td>";
        echo "<td>"; echo $row['qual']; "</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Cource :</td>";
        echo "<td>"; echo $row['cource']; "</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Email :</td>";
        echo "<td>"; echo $row['email']; "</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Mobile no:</td>";
        echo "<td>"; echo $row['mob']; "</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Address:</td>";
        echo "<td>"; echo $row['address']; "</td>";
      echo "</tr>";
      
    ?>
  </tbody>
</table>