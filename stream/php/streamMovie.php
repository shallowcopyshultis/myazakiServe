<?php
include "../functions.php";
include "../pages.php";

//validate the session
if(!validate()){
	echo invalidSession();
}
else{
	//connect to the database
	connect();
	//echo the html for the standard movie streaming page
	echo streamMovie(decrypt($_GET['content']));
}

?>