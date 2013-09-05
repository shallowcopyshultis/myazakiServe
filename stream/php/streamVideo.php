<?php

/**
A:link {color: #aacccc; text-decoration: underline}
			A:visited {color: #aacccc; text-decoration: underline}
			A:active {background: #FFCC00; text-decoration: underline}
			A:hover {background: #FFCC00; font-weight:bold; color: red;}
*/

echo "
<html>
	<head>
		<style type='text/css'>
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
			}
		</style>
	</head>";
echo
	"<body>
		<div id='background'>
			<img src='samurai shadows fall towards the sun.jpg' class='stretch' alt=''/>
		</div>
	</body>";
echo "</html>";

?>