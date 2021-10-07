<?php
  require("../connection.php");
  $username=$_POST['username'];
  $password=$_POST['password'];
  $type=$_POST['types'];

  $count=0;
  $res=mysqli_query($db,"SELECT * FROM $type WHERE username='$_POST[username]' AND password='$_POST[password]';");
  $count=mysqli_num_rows($res);
  $row=mysqli_fetch_assoc($res);

  if($count==0)
  {
?>

  <script type="text/javascript">
    alert("Invalid username and password");
    window.location="../index.php";
  </script>
<?php
  }

  else
  {
    $_SESSION['login_user']=$_POST['username'];
    $_SESSION['types']=$type;
?>
  <script type="text/javascript">
    window.location="../index.php";
  </script>
<?php
  }
?>  