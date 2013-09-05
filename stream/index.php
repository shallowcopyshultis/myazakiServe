<?php
	require("../php/functions.php");
?>

<html lang="en">
	<head>
		<meta charset=utf-8/>
		<title>Share the love!</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="css/stream.css">
		<!--[if lt IE 9]>
			<script src="../js/html5shiv.js"></script>
			<script src="../js/html5shiv-printshiv.js"></script>
		<![endif]-->
		<!--html5 shivs from https://github.com/aFarkas/html5shiv-->
		<script src="../js/jquery-1.7.2.js"></script>
		<script src="../js/jquery-ui-1.8.22.custom.min.js"></script>
	</head>
	<body>
		<div class='banner'>
			<table align=center class='banner'>
				<tr><td>This page is under construction.</td></tr>
				<tr class='smallBanText'><td>Is that cat looking to the left or back into the page?<td></tr>
			</table>
		</div>
	</body>
</html>




<?php
/**
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

			.test {color: red;}
			
			A:link {color: #aacccc; text-decoration: underline}
			A:visited {color: #aacccc; text-decoration: underline}
			A:active {background: #FFCC00; text-decoration: underline}
			A:hover {background: #FFCC00; font-weight:bold; color: blue;}

			.stretch {
				width:100%;
				height:100%;
			}
		</style>
	</head>";
echo
	"<body>
		<div id='background'>
			<img src='cat stuff, i guess.jpg' class='stretch' alt=''/>
		</div>
		<div id='movieHeader'  style='text-align: center; color: #aacccc; font-size: 20;'>Movies</font></center></div>
		<div id='movieList' style='color: #aacccc;'>";

			$sql = "select distinct title,studio,director,year from movieInfo where exists (select * from movieInfo,media where movieInfo.mediaID=media.mediaID AND mediaType='movie') order by studio,director,year,title";
			$movies = mysql_query($sql);

			$thisDirector = '';
			$thisStudio = '';
			while($row = mysql_fetch_array($movies)){
				if($row['studio']!=$thisStudio){
					$thisStudio = $row['studio'];
					echo "<br><div style='text-indent:0 px;'>$thisStudio</div>";
				}
				if($row['director']!=$thisDirector){
					$thisDirector = $row['director'];
					echo "<br><div style='text-indent:50 px;'>$thisDirector</div>";
				}
				$year = $row['year'];
				$title = $row['title'];
				$href = "./streamMovie.php?content=".urlencode(encrypt($title));
				echo "<div style='text-indent:150 px;'><a href='$href'>$title ($year)</a></div>";
			}
		echo "
		</div>

		<div id='showHeader'  style='text-align: center; color: #aacccc; font-size: 20;'>Shows</font></center></div>
		<div id='showList' style='color: #aacccc;'>";

		$sql = "select distinct title from showInfo where 1";
		$titles =  mysql_query($sql);

		while($titleRow = mysql_fetch_array($titles)) {
			$title = $titleRow['title'];

			$sql = "select mediaID,title,studio,director,year,season,episode from showInfo where title='$title' group by episode order by studio,director,year,title,season,episode";
			$shows = mysql_query($sql);

			$thisDirector = '';
			$thisStudio = '';
			$thisTitle = '';
			$thisYear = '';
			$thisSeason = '';
			while($row = mysql_fetch_array($shows)){
				if($row['studio']!=$thisStudio){
					$thisStudio = $row['studio'];
				}
				if($row['director']!=$thisDirector){
					$thisDirector = $row['director'];
				}
				if($row['title']!=$thisTitle){
					$thisTitle = $row['title'];
					echo "
					<div style='text-indent:0 px;'>
						$thisTitle
						<br><br>
						<div style='text-indent:25 px;'>Studio: $thisStudio</div>
						<div style='text-indent:25 px;'>Director: $thisDirector</div>
					</div>";
				}
				if($row['year']!=$thisYear){
					$thisYear= $row['year'];
				}
				if($row['season']!=$thisSeason){
					$thisSeason = $row['season'];
					echo "
					<br>
					<div style='text-indent:50 px;'>
						Season $thisSeason ($thisYear)
					</div>";
				}
				$episode = $row['episode'];
				$mediaID = $row['mediaID'];
				$href = "./streamShow.php?content=".urlencode(encrypt("$mediaID"));
				echo "<div style='text-indent:100 px;'><a href='$href'>Episode $episode</a></div>";
			}
		}
		echo "
		</div>
	</body>
	
	<script src='/jquery-1.7.2.js'></script>
	<script></script>";
echo "</html>";
*/
?>
