<?php
  require("../connection.php");
  $uname=$_POST['username'];
  $qual=$_POST['qualification'];
  $cource=$_POST['cource'];
  $name=$_POST['name'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  
	$count=0;
	$sql="SELECT username from `student`";
	$res=mysqli_query($db,$sql);

	while ( $row=mysqli_fetch_assoc($res)) 
	{
		if($row['username']==$_POST['username'])
		{
			$count=$count+1;
		}
	}

	if($count==0)
	{

	  mysqli_query($db,"INSERT INTO  `student` VALUES('$uname', '$password', '$name', '$qual', '$cource', '$email', '$mobile', '$address');");
		
	?>

		<script type="text/javascript">
			alert("Registered successfully");
      window.location="../index.php";
		</script>

	<?php

		}
		else
		{
	?>
      <script type="text/javascript">
        alert("Username already exists");
        window.location="../index.php";
      </script>
	<?php
		}

?>