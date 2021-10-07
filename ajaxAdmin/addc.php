<style>

.login_box{
  width:100%;
  padding:30px;
  background:linear-gradient(#74ebd5,#ACB6E5);
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
					ADD Cource
				</h1><br>

				<form name="login" action="modules\addcour.php
        " method="post" style="text-align: center;">
					<div class="login">
						<input class="form-control mt-3" type="text" name="cname" placeholder="Cource name" required="" autofocus><br>
            <input class="form-control" type="text" name="fac" placeholder="Faculty" required="" autofocus><br>
            <input class="form-control" type="text" name="sdate" placeholder="Starting date" required="" autofocus><br>
            <input class="form-control" type="number" name="cdur" placeholder="Cource Duration" required="" autofocus><br>
						<input class="form-control" type="number" name="cfee" placeholder="Cource Fee" required=""><br>
            <input class="form-control" type="text" name="ctime" placeholder="Cource Timming" required="" autofocus><br>
            <br><br>
						<input class="btn btn-primary" type="submit" name="submit" value="ADD"/>
					</div>
				</form>
			</div>
		</div>
	</section>