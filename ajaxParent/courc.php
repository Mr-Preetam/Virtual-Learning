<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<p id="heading" class="fs-2 fw-bold">Cource Detail</p>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">CName</th>
      <th scope="col">Faculty</th>
      <th scope="col">Start Date</th>
      <th scope="col">Duration</th>
      <th scope="col">Fee</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql1="SELECT userid FROM `parents`";
      $q1=mysqli_query($db,$sql1);
      $res=mysqli_fetch_assoc($q1);
      $beta=$res['userid'];

      $sql2="SELECT cource FROM `student` where username='$beta'";
      $q2=mysqli_query($db,$sql2);
      $res2=mysqli_fetch_assoc($q2);
      $cource=$res2['cource'];

      $sql="SELECT * FROM `cource` where cname='$cource'";
      $q=mysqli_query($db,$sql);
    
      while($row=mysqli_fetch_assoc($q)){
        echo "<tr>";
          echo "<th>"; echo $row['cname']; "</th>";
          echo "<td>"; echo $row['fac']; "</td>";
          echo "<td>"; echo $row['sdate']; "</td>";
          echo "<td>"; echo $row['cdur']; "</td>";
          echo "<td>"; echo $row['cfee']; "</td>";
          echo "<td>"; echo $row['ctime']; "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>