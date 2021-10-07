<?php
  include "../connection.php";
  $from=$_SESSION['login_user'];
  $to=$_POST['recive'];
  $date=date("d-m-Y");
  $subject=$_POST['subject'];
  $message=$_POST['msg'];

  // echo $from;
  // echo "<br/>";
  // echo $to;
  // echo "<br/>";
  // echo $date;
  // echo "<br/>";
  // echo $subject;
  // echo "<br/>";
  // echo $message;
  // echo "<br/>";

  $attach=$_FILES['attm']['name'];
  $time = date("d-m-Y");

  $newname=$time."-".$attach;

  $filename=$_FILES['attm']['tmp_name'];
  move_uploaded_file($filename,"../assets/attachment/".$newname);

  $sql = "INSERT INTO `mail` VALUES('', '$from', '$to', '$date', '$subject', '$message', '$newname')";
  mysqli_query($db,$sql);
?>

<script>
  alert("Mail sent successfully");
  window.location="../index.php";
</script>