<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="tampilan/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript">
		function toggle_menu() {
			var x = document.getElementById('open_menu');

			if (x.className === "menu") {
				x.className += " responsive";
			}else{
				x.className = "menu";
			}
		}
	</script>
</head>
<body>

	<ul class="nav nav-tabs" id="open_menu">
		<li><a class="color" data-toggle="tab" href="index.php">Home</a></li>
		<li class="navbar-right"><a class="color" data-toggle="tab" href="daftar.php">Sign Up</a></li>
		<li class="navbar-right" id="logout"><a class="color" href="login.php">Sign In</a></li>
		<li class="icon"><a onclick="toggle_menu()">&#9776;</a></li>
	</ul>

	<br>
</body>
</html>
