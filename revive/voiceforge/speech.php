<!DOCTYPE html>
	<html>
	  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>VoiceForge</title>
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
		<iframe src="//api.voiceforge.com/swift_engine?HTTP-X-API-KEY=9a272b4&msg=<?php include 'voice.php'; if (isset($_GET["msg"])) { echo $_GET["msg"]; } ?>&voice=<?php include 'voice.php'; if (isset($_GET["voice"])) { echo $_GET["voice"]; } ?>&email=<?php include 'voice.php'; if (isset($_GET["email"])) { echo $_GET["email"]; } else { echo "null"; } ?>"></iframe>
	  </body>
	</html>
