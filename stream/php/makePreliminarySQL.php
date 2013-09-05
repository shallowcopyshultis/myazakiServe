<?php
include "../functions.php";

if(isset($_GET['type'])){
	$type= $_GET['type'];
	
	//note: for the php functions, the dir needs to have a trailing slash

	//Movies
	if($type=='movie'){
		$movieDir = "/home/chroot/media/movies/";
		$sql = preliminaryMovieSQL($movieDir);
	}

	//Shows
	elseif($type=='show'){
		$name = $_GET['name'];
		$showDir = "/home/chroot/media/shows/".$name."/";
		$sql = preliminaryShowSQL($showDir,$name);
	}

	echo "<br>$sql";

	echo "</html>";
}
else{
	echo "Pick a type and try again";
}
?>