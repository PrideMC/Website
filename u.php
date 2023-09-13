<?php
	if(!isset($_GET['rdr'])){
		header('Location: index.php');
	} else {
		$url = $_GET['rdr'];
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="assets/server-logo.png">
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
				height: 350px;
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
			image:hover {
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
				border-style: solid;
				border-color: rgb(255, 0, 0);
				border-padding: 10px;
				border-radius: 10px;
				color: #fff;
				background-color: rgb(255, 0, 0);
				padding: 30px;
				font-size: 30px;
				transition-duration: 0.2s;
			}
			.join-button:hover {
				background-color: rgb(255, 51, 56);
				border-color: rgb(255, 51, 56);
				cursor: pointer;
			}
			.join-button:active {
				border-color: lime;
				background-color: lime;
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
			setInterval(function() {
            var span = document.querySelector("#counter");
            var count = span.textContent * 1 - 1;
            span.textContent = count;
            if (count <= 0) {
				span.textContent = 0;
                window.location.replace("<?php echo $url ?>");
            }
        }, 1000);
		</script>
    </head>
    <body>
		<center><a href="#click-to-join"><img src="assets/server-banner.gif" alt="Want to join? Click me!"></a></center><br>
		<center>
			<div class="menu">
				<a href="index.php" class="link">Home</a> <a href="news.php" class="link">News</a> <a href="/u.php?rdr=https://discord.gg/kpAdXNCmRR" class="link">Discord</a> <a href="https://minetrack.mcpridebedrock.tk" class="link">Minetrack</a>
			</div><br>
			<div class="modern-ui" id="click-to-join">
			<center><h1 class="label">Redirect</p></center><br>
				<h1 align="center">You will be redirected in <span id="counter">5</span> seconds...</h1>
				<p class="text" align="center">
					If you not redirected, click this <a href="<?php echo $url ?>" alt="Redirect Link" class="lnk">link</a>.
				</p><br><br><br><br><br><br><br>
				<p align="right" style="font-size: 20px;" >Powered by <a href="https://github.com/xqwtxon/" class="lnk">@xqwtxon</a></p>
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