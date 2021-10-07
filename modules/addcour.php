<?php
  include '../connection.php';
  $cname=$_POST['cname'];
  $fac=$_POST['fac'];
  $sdate=$_POST['sdate'];
  $cdur=$_POST['cdur'];
  $cfee=$_POST['cfee'];
  $ctime=$_POST['ctime'];

  $sql="INSERT INTO `cource` VALUES('','$cname', '$fac', '$sdate', '$cdur', '$cfee', '$ctime')";

  mysqli_query($db,$sql);
  header("Location:../index.php");
?>