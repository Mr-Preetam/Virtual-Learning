<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<p id="heading" class="fs-2 fw-bold">Student details</p>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Qualification</th>
      <th scope="col">Cource</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="SELECT * FROM `student`";
      $q=mysqli_query($db,$sql);
    
      while($row=mysqli_fetch_assoc($q)){
        echo "<tr>";
          echo "<th>"; echo $row['username']; "</th>";
          echo "<td>"; echo $row['name']; "</td>";
          echo "<td>"; echo $row['qual']; "</td>";
          echo "<td>"; echo $row['cource']; "</td>";
          echo "<td>"; echo $row['email']; "</td>";
          echo "<td>"; echo $row['mob']; "</td>";
          echo "<td>"; echo $row['address']; "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>