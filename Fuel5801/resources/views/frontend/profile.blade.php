<!DOCTYPE html>
<html>
<head>
	<title>profle</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="home.html" class="navbar-brand"><img src="https://img.icons8.com/ultraviolet/50/000000/gas-pump.png"> P53 </a>
		</div>
		<div class="collapse navbar-collapse" id="bs-nav-demo">
			<ul class="nav navbar-nav">
				<li><a href="about.html">About</a></li>
				<li><a href="help.html">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.html"><i class="fas fa-user-plus"></i>Sign Up</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="#"><img src="/assets/img/bootstrap.svg" alt="" width="32" height="32" title="Search"></a>
				</ul>
			</div>

		</nav>




		<div class ="container">
			<div class = row>
				<div class = "col-lg-2 col-md-2 col-xs-2" >
					<div class = "col1">

						

					</div>
				</div>
				<div class = "col-lg-8 col-md-8 col-xs-8">
					<div class = "col2">





						<div class="container">
							<div class="login">
								<h1>Update your Profile</h1>
								<form>
									<div>
										<label for="first-name">First Name:</label>
										<input type="text" name="first-name" id="first-name" placeholder="John" required=""> <br>
										<label for="last-name">Last Name:</label>
										<input type="text" name="last-name" id="last-name" placeholder="Smith" required="">
									</div>
									<div>
										<label for="address1">Address 1:</label>
										<input type="text" name="address1" id="address1" placeholder="Address" required=""> <br>
										<label for="address1">Address 2:</label>
										<input type="text" name="address2" id="address2" placeholder="Address"> <br>
										<label for="city">City:</label>
										<input type="text" name="city" id="city" placeholder="city" required=""> <br> <br>

										<label for="select-choice"  required="">State:</label>
										<select name="select-choice" id="select-choice">
											<option value="0" selected="" disabled="">Select</option>
											<option value="Alabama">AL</option>
											<option value="Alaska">AK</option>
											<option value="Arizona">AZ</option>
											<option value="Arkansas">AR</option>
											<option value="California">CA</option>
											<option value="Colorado">CO</option>
											<option value="Connecticut ">CT</option>
											<option value="Delaware">DE</option>
											<option value="Florida">FL</option>
											<option value="Georgia">GA</option>
											<option value="Hawaii">HI</option>
											<option value="Idaho">ID</option>
											<option value="Illinois">IL</option>
											<option value="Indiana">IN</option>
											<option value="Kansas ">KS</option>
											<option value="Kentucky">KY</option>
											<option value="Louisiana">LA</option>
											<option value="Maine">ME</option>
											<option value="Maryland">MD</option>
											<option value="Massachusetts">MA</option>
											<option value="Texas  ">TX</option>
										</select>

									</div>

									<div>
										<label for="Zipcode">Zipcode:</label>
										<input type="text" name="Zipcode" id="Zipcode" pattern=".{7,9}" placeholder="your Zipcode" required="" title="7 to 9 characters">
									</div>




									<!-- WARNING! DANGER! CAUTION! -->
									<!-- DATE PICKER CRAZINESS BELOW!!!! -->

									<br>
									<div>
										<input type="submit" value="save">
									</div>
								</form>
							</div>
						</div>


















						


					</div>
				</div>

				<div class = "col-lg-2 col-md-2 col-xs-2" >
					<div class = "col1">

						

					</div>
				</div>





			</div>





		</div>











		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
	</html>