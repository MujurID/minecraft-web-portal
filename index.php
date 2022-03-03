<!-- Proudly coded by Billy (https://bybilly.uk) -->
<!-- Version: 1.9.2 -->

<!DOCTYPE html>
<html>
<head>
	<!-- Info meta tags, important for social media + SEO -->
	<title>Eternity Minecraft Server Portal</title>
	<meta name="description" content="Eternity Minecraft Server is a new and awesome Minecraft server. You can join with the IP 'mc.google.id'.">
	<meta property="og:title" content="Eternity Minecraft Server Portal">
	<meta property="og:site_name" content="Eternity Minecraft Server Portal">
	<meta property="og:description" content="Eternity Minecraft Server is a new and awesome Minecraft server. You can join with the IP 'mc.google.id'.">
	<meta property="og:image" content="https://raw.githubusercontent.com/MujurID/mujurid.github.io/master/MujurID%201x1.png">
	<meta property="og:url" content="/">
	<meta name="twitter:card" content="summary_large_image">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
	<div class="container">
		<div class="logo">
			<!-- In the img folder, upload your logo -->
			<!-- Make sure you name it 'logo.png' or update the code below -->
			<!--<img src="img/logo.png" alt="Eternity Minecraft Server logo">-->
			<img src="https://raw.githubusercontent.com/MujurID/mujurid.github.io/master/MujurID%201x1.png" alt="Eternity Minecraft Server logo">
		</div>
		<center><h1><p style="color:white">Eternity Minecraft Server Portal</p></h1>

		<!--<div class="items">
			<!-- Replace # with your forum URL-->
			<!--<a href="#" class="item forums">
			<div>
				<img src="img/forums.png" alt="Minecraft forums icon" class="img">
				<p class="subtitle">chat on our</p>
				<p class="title">Forums</p>
			</div>
			</a>

			<!-- Replace # with your store URL -->
			<!--<a href="#" class="item store">
			<div>
				<img src="img/store.png" alt="Minecraft store icon" class="img">
				<p class="subtitle">donate on our</p>
				<p class="title">Store</p>
			</div>
			</a>

			<!-- Replace # with your vote URL -->
			<!--<a href="#" class="item vote">
			<div>
				<img src="img/vote.png" alt="Minecraft voting icon" class="img">
				<p class="subtitle">support us by</p>
				<p class="title">Voting</p>
			</div>
			</a>

		</div>-->

		<div class="playercount">
			<!-- Replace play.cubecraft.net with your server IP address -->
			<!-- Do it on both line 66 and line 67 -->
			<!-- Please set both your IP and port -->
			<p>Join <span class="sip" data-ip="mc.mujur.id" data-port="25565">
			</span> other players on <span class="ip">mc.mujur.id</span></p>
			
<?php
//Get the status and decode the JSON
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/1/mc.google.id'));
$playercount = json_decode(file_get_contents('https://api.bybilly.uk/api/players/mc.google.id/25565'));

//Show the version
//echo $status->version;
if (($playercount->online) > "0") {
	
//Show a list of players
	foreach ($status->players->list as $player) {
		echo $player.'<br />';
	}
}
?>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/firefly.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>
