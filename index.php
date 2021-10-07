<?php
  include "header.php";
?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      .users_item{
        border:none !important;
        text-decoration:underline !important;
      }
    </style>
</head>

<body>

    <section class="container">
      <div class="row">
          <div class="col-lg-8">
            <div class="container-fluid px-5" id="userdashboard_data" style="min-height:60vh;">
            <!--Load the content here through ajax-->
            </div>
          </div>
          <div class="col-lg-4">
              <h3 class="px-4 lh-1 pb-4">Users of system</h3>
              <ul style="list-style-type: none;">
                <li class="text-capitalize users_item">Admin</li>
                <hr />
                <li class="text-capitalize users_item">Professor</li>
                <hr />
                <li class="text-capitalize users_item">Student</li>
                <hr />
                <li class="text-capitalize users_item">Parent</li>
              </ul>
          </div>
      </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
        document.getElementById("homepage").click();
        });
    </script>
    <script type="text/javascript" src="assets/js/ajaxcall.js"></script>
</body>
</html>
<?php
  include "footer.php";
?>