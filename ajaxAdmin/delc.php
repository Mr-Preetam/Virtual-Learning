<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<div class="container" style="min-height:50vh;">
  <p id="heading" class="fs-2 fw-bold">Cource Details :</p>
  <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">Cource Name</th>
        <th scope="col">Faculty</th>
        <th scope="col">Starting Date</th>
        <th scope="col">Duration</th>
        <th scope="col">Fee</th>
        <th scope="col">Timming</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql="SELECT * FROM `cource`";
        $q=mysqli_query($db,$sql);
      
        while($row=mysqli_fetch_assoc($q)){
          echo "<tr>";
            echo "<th>"; echo $row['cname']; "</th>";
            echo "<td>"; echo $row['fac']; "</td>";
            echo "<td>"; echo $row['sdate']; "</td>";
            echo "<td>"; echo $row['cdur']; "</td>";
            echo "<td>"; echo $row['cfee']; "</td>";
            echo "<td>"; echo $row['ctime']; "</td>";
            echo '<td><a href="modules/delcour.php?id='; echo $row['id']; echo'" class="btn btn-danger">Delete</a></td>';
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>