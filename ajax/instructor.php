<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<p id="heading" class="fs-2 fw-bold">Professor details</p>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Qualification</th>
      <th scope="col">Experience</th>
      <th scope="col">Cource</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="SELECT * FROM `professor`";
      $q=mysqli_query($db,$sql);
    
      while($row=mysqli_fetch_assoc($q)){
        echo "<tr>";
          echo "<th>"; echo $row['name']; "</th>";
          echo "<td>"; echo $row['qual']; "</td>";
          echo "<td>"; echo $row['exp']; "</td>";
          echo "<td>"; echo $row['cource']; "</td>";
          echo "<td>"; echo $row['email']; "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>