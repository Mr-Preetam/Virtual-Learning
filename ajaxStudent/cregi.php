<?php
  include "../connection.php";
?>
<style> 
  #heading{
    color:maroon;
  }
</style>
<p id="heading" class="fs-2 fw-bold">Cource Registered : </p>
<table class="table table-bordered border-primary">
  <tbody>
    <?php
        $user=$_SESSION['login_user'];
        $sql="SELECT cource FROM `student` where username='$user'";
        $q=mysqli_query($db,$sql);
        $res=mysqli_fetch_assoc($q);
        $cources=$res['cource'];  
      echo "<tr>";
        echo "<th>Cource Name :</th>";
        echo "<td>"; echo $cources; "</td>";
      echo "</tr>";      
    ?>
  </tbody>
</table>
<br/>