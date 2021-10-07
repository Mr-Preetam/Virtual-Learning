<style>

.login_box{
  width:100%;
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
					Student SignUp
				</h1><br>

				<form name="login" action="modules\registers.php
        " method="post" style="text-align: center;">
					<div class="login">
						<input class="form-control mt-3" type="text" name="name" placeholder="name" required="" autofocus><br>
            <input class="form-control" type="text" name="qualification" placeholder="Qualification" required="" autofocus><br>
            <input class="form-control" type="text" name="cource" placeholder="Cource you want" required="" autofocus><br>
            <input class="form-control" type="text" name="username" placeholder="Username" required="" autofocus><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
            <input class="form-control" type="text" name="email" placeholder="Email" required="" autofocus><br>
            <input class="form-control" type="text" name="mobile" placeholder="Mobile No" required="" autofocus><br>
            <input class="form-control" type="text" name="address" placeholder="Address" required="" autofocus><br>
            <br><br>
						<input class="btn btn-primary" type="submit" name="submit" value="Sign Up"/>
					</div>
				</form>
			</div>
		</div>
	</section>