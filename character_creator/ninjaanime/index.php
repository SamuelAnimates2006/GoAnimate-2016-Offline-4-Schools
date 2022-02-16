<!DOCTYPE html>
	<html>
	  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>The Ninja Anime Character Creator On OurAnimate - Create Characters the way you want!</title>
		<style media="screen">
		  html,body,iframe {
			margin: 0;
			padding: 0;
		  }
		  html,body {
			height: 100%;
			overflow: hidden;
		  }
		  iframe {
			width: 100%;
			height: 100%;
			border: 0;
		  }
		</style>
	  </head>
	  <body>
		<iframe src="//app-ouranimate.herokuapp.com/cc?themeId=ninjaanime&bs=<?php if (isset($_GET["type"])) { echo $_GET["type"]; } ?>"></iframe>
	  </body>
	</html>
