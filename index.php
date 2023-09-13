<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="assets/server-logo.png">
      <meta name="og:title" content="PrideMC Network"> 
      
		<title>Home ─ PrideMC Network</title>
        <style>
            html {
				color: #fff;
				background-color: #424242;
				font-family: Arial;
			}
			.text {
				font-size: 25px;
			}
			.modern-ui {
				background-color: #222222;
				color: #fff;
				height: 1280px;
				width: 740px;
				text-align: left;
				padding: 30px;
			}
			.footer {
				background-color: #222222;
				color: #fff;
				height: 100px;
				width: 740px;
				text-align: left;
				padding: 30px;
				display: block;
			}
			.mini {
				font-size: 13px;
				color: #fff;
			}
			.mini:hover {
				font-size: 13px;
				cursor: pointer;
			}
			hr {
				border-style: solid;
				border-color: #fff;
			}
			.label {
				background-color: #111111;
				padding: -10px;
				color: lime;
				width: 800px;
				margin: -30px;
				display: block;
			}
			.toggle:hover {
				<?php
					$rand = str_shuffle("ABC123");
					echo 'color: #' . $rand . ';';
				?>
				cursor: pointer;
			}
			.image {
				cursor: pointer;
				transition-duration: 0.5s;
			}
			.image:hover {
				transform: scale(1.1);
			}
			.imageheader {
				cursor: pointer;
				transition-duration: 0.5s;
				border-radius: 50px;
			}
			.imageheader:hover {
				transform: scale(1.1);
			}
			.title:hover {
				cursor: pointer;
				color: #00ffff;
			}
			.menu {
				width: 740px;
				background-color: #222222;
				padding: 30px;
			}
			.link {
				color: #fff;
				text-decoration: none;
				padding: 50px;
				font-size: 20px;
			}
			.link:hover {
				color: #fff;
				text-decoration: underline;
			}
			.lnk {
				color: #fff;
				text-decoration: none;
			}
			.lnk:hover {
				color: #fff;
				text-decoration: underline;
			}
			.join-button {
				border: 2px solid #000;
				border-color: #999;
				border-padding: 10px;
				padding: 30px;
				font-size: 30px;
				transition-duration: 0.2s;
        color: #DDD;
		text-shadow: 2px 2px #000A;
		box-shadow: inset -2px -4px #0006, inset 2px 2px #FFF7;
        display: flex; 
        justify-content: center; 
        align-items: center;
        text-decoration: none;
        background: #999 url('https://i.ibb.co/rb2TWXL/bgbtn.png') center / cover;
        image-rendering: pixelated;
		color: #DDD;
		text-shadow: 2px 2px #000A;
		box-shadow: inset -2px -4px #0006, inset 2px 2px #FFF7;
        
			}
			.join-button:hover {
				background-color: rgba(100, 100, 255, .45);
		text-shadow: 2px 2px #202013CC;
		color: #FFFFA0;
        cursor: pointer;
			}
          .join-button:active {
            box-shadow: inset -2px -4px #0004, inset 2px 2px #FFF5;
          }
			.linkh {
				color: #fff;
				text-decoration: none;
				padding: 50px;
				font-size: 20px;
				cursor: pointer;
			}
        </style>
		<script>
			function onImageView(){
				
			}
		</script>
    </head>
    <body>
		<center><a href="/"><img src="assets/server-banner.gif" alt="Want to join? Click me!"></a></center><br>
		<center>
			<div class="menu">
				<span class="linkh">Home</span> <a href="news.php" class="link">News</a> <a href="u.php?rdr=https://discord.gg/kpAdXNCmRR" class="link">Discord</a> <a href="https://minetrack.mcpridebedrock.tk" class="link">Minetrack</a>
			</div><br>
			<div class="modern-ui" id="click-to-join">
			<center><h1 class="label">Home</p></center><br>
				<h1 align="center">A Minecraft Bedrock Minigames Server!</h1>
				<a href="/news.php#session-v5"><img class="imageheader" height="360px" width="730px" src="assets/Active-Season.png" alt="Latest Session."></a><br><br>
        <center><a id="btn" href="minecraft://?addExternalServer=PrideMC%20Network|play.mcpridebedrocktk:19132"><button class="join-button"><b>Join and Play Now!</b></button></a></center><br>
				<h1 align="center">Add this server on your minecraft:</h1>
				<a href="#btn"><img class="image" height="420px" width="730px" src="assets/How-to-add-server.png" alt="How to add the server."></a><br>
				<h1 align="center">Checkout our <a href="news.php" class="lnk" style="color: lime;"><span style="color: #00ff00;">latest updates</span></a> for more info!</h1>
				<h1 align="center">Checkout our <a href="u.php?rdr=https://discord.gg/kpAdXNCmRR" class="lnk" style="color: lime;">discord server</a> for more updates!</h1>
			</div>
		</center>
		<center>
		<br>
		<div class="footer">
			<center>
			<p style="font-size: 20px;">
				Copyright by <b class="toggle">PrideMC Network</b> &copy;<br><br>
				All right's reserved.
			</p>
			</center>
			</div>
		</center>
    </body>
</html>