<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<div class="container" style="min-height:50vh;">
  <p id="heading" class="fs-2 fw-bold">Cource Calender : </p>
  <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">Cource Name</th>
        <th scope="col">Faculty</th>
        <th scope="col">Starting Date</th>
        <th scope="col">Duration</th>
        <th scope="col">Fee</th>
        <th scope="col">Timming</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $user=$_SESSION['login_user'];
        $sql="SELECT cource FROM `student` where username='$user'";
        $q=mysqli_query($db,$sql);
        $res=mysqli_fetch_assoc($q);
        $cources=$res['cource'];  

        $sql1="SELECT * FROM `cource` where cname='$cources'";
        $q1=mysqli_query($db,$sql1);
      
        while($row=mysqli_fetch_assoc($q1)){
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
</div>