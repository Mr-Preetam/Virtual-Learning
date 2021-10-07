 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database_name = "virtual_learning";
  // Create connection
  $db = new mysqli($servername, $username, $password, $database_name);

  // Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  if(!isset($_SESSION)){
		session_start();
	}
?> 