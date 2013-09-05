<?php
include "../functions.php";

echo "<html>";

$head =  "
	<head>
		<style type='text/css'>
			body{
				text-align: center;
			}
			#playerDiv{
				padding-top: 3%;
			}
			#background {
				width: 100%; 
				height: 100%; 
				position: fixed; 
				left: 0px; 
				top: 0px; 
				z-index: -1;
			}
			.stretch {
				width:100%;
				height:100%;
				width: 100%;
			}
		</style>
	</head>";

$background = "
	<div id='background'>
			<img src='samurai shadows fall towards the sun.jpg' class='stretch' alt=''/>
	</div>";

//Flash player stuff
	$playerFile = "http://drucifer.dnsalias.net/smp/for%20Flash%20Player%2010.1/StrobeMediaPlayback.swf";
	$videoSrc = "http://drucifer.dnsalias.net/media/movies/Ghibli/Miyazaki/Howls%20Moving%20Castle%20(2004)/Howls%20Moving%20Castle.f4m";
	$allowFullScreen = "true";
	$allowscriptaccess = "always";
	$width = 470;
	$height = 320;
	$playerHTML = "
	<div id='playerDiv'>
		<object width='$width' height='$height' style='margin-left: auto;margin-right: auto;'> 
			<param name='movie' value='$playerFile'></param>
			<param name='flashvars' value='src=$videoSrc'></param>
			<param name='allowFullScreen' value='$allowFullScreen'></param>
			<param name='allowscriptaccess' value='$allowscriptaccess'></param>
			<embed src='$playerFile' type='application/x-shockwave-flash' allowscriptaccess='$allowscriptaccess' allowfullscreen='$allowFullScreen' width='$width' height='$height' flashvars='src=$videoSrc'></embed>
		</object>
	</div>";

echo $head."<body>".$background.$playerHTML."</body>";


echo "</html>";
?>