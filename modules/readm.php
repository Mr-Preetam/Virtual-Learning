<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
  include "../connection.php";
  $id=$_GET['id'];
  $sql="SELECT * FROM `mail` where `id`=$id";
  $q=mysqli_query($db,$sql);

  $row=mysqli_fetch_assoc($q);
  ?>
  <div style="border : 2px outset blue; min-height : 300px; margin : 20px 100px; padding : 20px 50px;">
    <?php echo $row['message']; ?>
  </div>
  <script type="text/javascript">
    function returned(){
      window.location="../index.php";
    }
  </script>
  <div style="margin : 20px 100px; text-align : center;">
    <button class="btn btn-primary"onclick="returned()">back</button>
  </div>

  
  