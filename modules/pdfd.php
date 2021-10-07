<?php
  $file = $_GET["file"];
  $filename = "../assets/attachment/$file";
  header("Content-type: application/pdf");
  header("Content-Length: " . filesize($filename));
  readfile($filename);
?>
<script type="text/javascript">
  window.location="../index.php";
</script>