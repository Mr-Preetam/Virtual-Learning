<?php
  require("../connection.php");
  $id=$_POST['id'];
  $password=$_POST['password'];
  $userid=$_POST['userid'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mob'];
  $address=$_POST['address'];
  
	$count=0;
  $count1=0;
	$sql="SELECT username from `student`";
  $sql1="SELECT username from `parents`";
	
  $res=mysqli_query($db,$sql);

	while ( $row=mysqli_fetch_assoc($res)) 
	{
		if($row['username']==$_POST['userid'])
		{
			$count1=$count1+1;
		}
	}

  $res1=mysqli_query($db,$sql1);

	while ( $row1=mysqli_fetch_assoc($res1)) 
	{
		if($row1['username']==$_POST['id'])
		{
			$count=$count+1;
		}
	}

	if($count==0 && $count1>0)
	{

	  mysqli_query($db,"INSERT INTO  `parents` VALUES('$id', '$password', '$userid', '$name', '$mobile', '$email', '$address');");
		
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
        alert("Something Wrong occured");
        window.location="../index.php";
      </script>
	<?php
		}

?>