<style>
.login_box{
  width:80%;
  padding:30px;
  background:linear-gradient(#2980B9,#6DD5FA);
}
#signup {
  background: transparent;
  box-shadow: 0px 0px 0px transparent;
  border: 0px solid transparent;
  text-shadow: 0px 0px 0px transparent;
	color:blue;
	border-bottom: 1px solid blue;
}

#signup:hover {
  background: transparent;
  box-shadow: 0px 0px 0px transparent;
  border: 0px solid transparent;
  text-shadow: 0px 0px 0px transparent;
	color: red;
	border-bottom: 1px solid red;
}

#signup:active {
  outline: none;
  border: none;
}

#signup:focus {
  outline: 0;
}
</style>
	<section class="pt-0">
		<div class="container d-flex justify-content-around align-content-center wrapper">
			<div class="login_box rounded">
				<h1 style="text-align: center;font-size: 25px color:white;">
					Login Form
				</h1><br>

				<form name="login" action="modules/logins.php" method="post" style="text-align: center;">
					<div class="login">
						<input class="form-control" type="text" name="username" placeholder="Username" required="" autofocus><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
            <label for="utype">Utype</label>
            <select id="cars" name="types">
              <option value="admin">Admin</option>
              <option value="professor">Professors</option>
              <option value="parents">Parents</option>
              <option value="student">Student</option>
            </select>
            <br><br>
						<input class="btn btn-primary" type="submit" name="submit" value="Login">
					</div>
				</form>
				
				<p class="pt-4" style="color: green; text-align:center;" >
            If you are a new User you can <u><button style="font-weight:bold; text-decoration : none;" id="signup">Register Here</button></u>
				</p>
				
			</div>
		</div>
	</section>
  <script>
    $('#signup').click(function() {
      $.ajax({
        url: 'ajax/ask.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
  });
  </script>
