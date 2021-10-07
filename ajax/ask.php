
<section>
 <div class="container">
    <p id="heading" class="fs-2 fw-bold text-danger mb-4">Select the appropriate user type : </p>
    <div class="row ps-5">
        <div class="col-12 mt-5 d-flex justify-content-center">
          <button type="button" class="btn btn-primary" id="signup">Student</button>
        </div>
        <div class="col-12 mt-5 d-flex justify-content-center">
          <button type="button" class="btn btn-success" id="psignup">Parent</button>
        </div>
    </div>
 </div>
</section>
<script>
    $('#signup').click(function() {
      $.ajax({
        url: 'ajax/signup.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
  });
  $('#psignup').click(function() {
      $.ajax({
        url: 'ajax/psignup.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
  });
  </script>