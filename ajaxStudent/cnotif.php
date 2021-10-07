<?php
  include "../connection.php";
?>

<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">From</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Attachments</th>
      <th scope="col">#</th>
    </tr>
  </thead>

  <tbody>
    <?php
        $sql="SELECT * FROM `mail` where `to`='students'";
        $q=mysqli_query($db,$sql);
      
        while($row=mysqli_fetch_assoc($q)){
          echo "<tr>";
            echo "<th>"; echo $row['from_s']; "</th>";
            echo "<td>"; echo $row['subject']; "</td>";
            echo "<td>"; echo $row['date']; "</td>";
            echo "<td>"; echo "<a href='modules/pdfd.php?file="; echo $row['attachments']; echo"'>"; echo $row['attachments']; echo"</a>"; echo"</td>";
            echo '<td><a href="modules/readm.php?id='; echo $row['id']; echo'" class="btn btn-primary">View</a></td>';
          echo "</tr>";
        }
      ?>
  </tbody>
</table>
