<?php
include "../functions.php";

//Flash player stuff
	$playerSrc = "http://drucifer.dnsalias.net/jwp/hds/test/assets/player.swf";
	$providerSrc = "http://drucifer.dnsalias.net/jwp/hds/bin-debug/HDSMediaProvider.swf";
	$videoSrc = "http://drucifer.dnsalias.net/media/shows/Nichijou/vod/02.mkv.f4m";
	$subtitleSrc = "http://drucifer.dnsalias.net/media/shows/Nichijou/vod/01.mkv.srt";
	$skinSrc = "http://drucifer.dnsalias.net/jwp/skins/plexi.zip";
	$width = 470;
	$height = 320;
	$allowfullscreen = "true";
	$allowscriptaccess = "always";
	$dock = "true";
	$plugins = "
		{
	     captions-2={
	       file=$subtitleSrc
	     }
	";
	$flashvars = "file=$videoSrc&dock=$dock&skin=$skinSrc&provider=$providerSrc&plugins=captions-2";

echo "<html>";
$scripts = "";
/*
	Player.prototype.renderPlayer = function(width,height) 	{
		  jwplayer('mediaspace').setup({
	    'flashplayer': '$playerSrc',
		'file': '$videoSrc',
	    'skin': '$skinSrc',
	    'controlbar': 'bottom',
	    'width': width,
	    'height': height,
	    'plugins': {
	     'captions-2': {
	       file: '$subtitleSrc'
	     }
	    },
	    'provider':'$providerSrc'
	  });
	}
*/
$head =  "
	<head>
		<meta charset='utf-8'>
		<style type='text/css'>
			#playerDiv{
				padding-top: 4%;
				margin: 0, auto;
			}
			body{
				text-align: center;
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
		<link href='http://drucifer.dnsalias.net/bootstrap/css/bootstrap.css' rel='stylesheet'>
	</head>";

$background = "
	<div id='background'>
			<img src='samurai shadows fall towards the sun.jpg' class='stretch' alt=''/>
	</div>";


$playerHTML = "
	<object id='playerDiv' width='$width' height='$height' name='playerDiv'>
	   <param name='movie' value='$playerSrc'>
	   <param name='allowfullscreen' value='$allowfullscreen'>
	   <param name='allowscriptaccess' value='$allowscriptaccess'>
	   <param name='flashvars' value='$flashvars'>
	   <embed
			src='$playerSrc'
			width='$width'
			height='$height'
			allowscriptaccess='$allowscriptaccess'
			allowfullscreen='$allowfullscreen'
			flashvars='$flashvars'
		/>
	</object>
 ";

echo $scripts.$head."<body>".$background.$playerHTML."</body>";


echo "</html>";
?>