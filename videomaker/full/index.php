<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO PREVIEW PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: /login?returnTo=/videomaker/full");
  exit();
}
?>
<?php if (isset($_SESSION['login']) && $_GET["style"] == "vyond-legacy") { echo "<html><head><script>function redirectToVideoEditor() { location.href = \"https://vyondlegacy2019.herokuapp.com/videomaker/full/?tray="?><?php if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "custom"; } ?><?php echo "\"; } </script></head><body onload=\"redirectToVideoEditor()\">Redirecting you to the old videomaker</body></html>"; } else { echo "<!DOCTYPE html>
	<html>
	  <head>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta charset=\"utf-8\">
		<title>The Video Maker On OurAnimate - Create Videos the way you want!</title>
    <script src=\"../../videomaker-old.js\"></script>
		<style media=\"screen\">
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
	  <body onload=\"proceedWithFullscreenStudio()\">
		<iframe src=\"//app-ouranimate.herokuapp.com/c9wreioucghebyxou3ebe\"></iframe>
	  </body>
	</html>"; } ?>
