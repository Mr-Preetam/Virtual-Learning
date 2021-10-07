<?php
  include "../connection.php";
  $user=$_POST['userid'];
  $ammount=$_POST['ammount'];

  $count=0;
  $res=mysqli_query($db,"SELECT username FROM `student` where username='$user';");
  $count=mysqli_num_rows($res);
  $row=mysqli_fetch_assoc($res);

  if($count==0){
    ?>
      <script type="text/javascript">
        alert("Payment failed !!!");
        window.location="../index.php";
      </script>
    <?php
  }
  else{
    $sql="INSERT INTO `bills` VALUES('$user',$ammount)";

    mysqli_query($db,$sql);

    ?>
      <script type="text/javascript">
        alert("Payment Successful !!!");
        window.location="../index.php";
      </script>
    <?php
  }
?>
