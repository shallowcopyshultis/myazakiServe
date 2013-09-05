<?php
	require_once('../php/functions.php');
	mysql_connect("$SQLhost", "$SQLusername", "$SQLpassword")or die("cannot connect: ".mysql_error()); 
	mysql_select_db("$SQLcurrentDatabase")or die("cannot select DB");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="../js/jquery-1.7.2.js"></script>
		<script src="../js/jquery-ui-1.8.22.custom.min.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		<script src="../bootstrap/js/bootstrap-tab.js"></script>
		<script src="../bootstrap/js/bootstrap-dropdown.js"></script>
		<script src="../bootstrap/js/bootstrap-button.js"></script>
		<script src="../bootstrap/js/bootstrap-modal.js"></script>
		<script src="../js/main.js"></script>
		<title>My-azaki Serve!</title>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="../index.php">Myazaki Serve</a></li>
					<ul class="nav">
						<li class="divider-vertical"></li>
						<li class="active"><a href="./"><img src="img/list.jpg" width="30" height="30" alt="List"></a></li>
						<li class="divider-vertical"></li>
						<li><a href="./"><img src="img/camera.png" width="30" height="30" alt="Pictures"></a></li>
						<li class="divider-vertical"></li>
						<li><a href="./"><img src="img/music.jpg" width="30" height="30" alt="Music"></a></li>
						<li class="divider-vertical"></li>
						<li><a href="./"><img src="img/video.png" width="30" height="30" alt="Movies"></a></li>
						<li class="divider-vertical"></li>
						<li><a href="./"><img src="img/television.png" width="30" height="30" alt="Shows"></a></li>
						<li class="divider-vertical"></li>
						<li><a href="./"><img src="img/Stepmania.png" width="30" height="30" alt="Stempania"></a></li>
						<li class="divider-vertical"></li>
				 	</ul>
				</div>
			</div>
		</div>
		<div id="main">
			<div id="list">
				<div id="randWallpapers">
					<p>Random Wallpapers</p>
				</div>
				<div id="showList">
					<p>All Shows and Movies</p>
				</div>
			</div>
		</div>
	</body>
</html>
