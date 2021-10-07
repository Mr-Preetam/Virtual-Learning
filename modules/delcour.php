<?php
  include '../connection.php';
  $id=$_GET['id'];
  $sql="DELETE FROM `cource` WHERE id=$id";
  mysqli_query($db,$sql);
?>
<script type="text/javascript">
  alert("Cource Deleted Successfully");
  window.location="../index.php";
</script>