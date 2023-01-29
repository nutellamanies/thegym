<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRASH CRUSH</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="full-page">
		<div class="navbar">
			<div>
				<a>CRASH CRUSH</a>
			</div>
			<nav>
				<ul id="MenuItems">
					<li><a href="gym.php">HOME</a></li>
					<li><a href="schedule.html">SCHEDULE</a></li>
					<li><a href="contact.html">CONTACT US</a></li>
					<li><a href="equipment.html">EQUIPMENT</a></li>
					<li><button class="loginbtn" onclick="document.getElementById('login-form').style.display="block" style="width:auto;">LOGIN</button></li>
				</ul>
			</nav>
		</div>
		<div id="login-form" class="login-page">
			<div class="form-box">
				<div id="button-box">
					<button type="button" onclick="login()" class="toggle-btn"LOG IN></button>
					<button type="button" onclick="register()" class="toggle-btn">REGISTER</button>
				</div>
				<form id="login" class="input-group-login">
					<input type="text" class="input-field" placeholder="Email" required>
					<input type="password" class="input-field" placeholder="Enter password" required>
					<input type="checkbox" class="check-box"><span>Remember</span>
					<button type="submit" class="submit-btn">Log in</button>
				</form>
				<form id="register" class="input-group-register">
					<input type="text" class="input-field" placeholder="FirstName" required>
					<input type="text" class="input-field" placeholder="LastName" required>
					<input type="email" class="input-field" placeholder="Email Id" required>
					<input type="password" class="input-field" placeholder="Enter Password" required>
					<label for="cars">Choose your natinality:</label>
					<select id="cars">
						<option value="malaysia">Malaysia</option>
						<option value="vietnam">Vietnam</option>
						<option value="laos">Laos</option>
						<option value="thailand">Thailand</option>
					</select>
					<button type="submit" class="submit-btn">Reegister</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var x = document.getElementById('login');
		var y = document.getElementById('register');
		var z = document.getElementById('btn');

		function register()
		{
			x.style.left = '400px';
			y.style.left = '50 px';
			z.style.left = '110px';
		}
		function login()
		{
		    x.style.left = '50px';
			y.style.left = '450 px';
			z.style.left = '0px';	
		}
	</script>
	<script type="text/javascript">
		var modal = document.getElementById('login-form');
		window.onclick = function(event)
		{
			if (event.target == modal)
			{
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>
