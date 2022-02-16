<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO PREVIEW PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: /login?returnTo=/videomaker/full/editcheck");
  exit();
}
?>
<?php if (isset($_SESSION['login']) && $_GET["style"] == "vyond-legacy") { echo "<html><head><script>function redirectToVideoEditor() { location.href = \"https://vyondlegacy2019.herokuapp.com/videomaker/full/?movieId="?><?php if (isset($_GET["video"])) { echo $_GET["video"]; } ?><?php echo "\"; } </script></head><body onload=\"redirectToVideoEditor()\">Redirecting you to the old videomaker editor</body></html>"; }?>
<?php if (isset($_SESSION['login']) && $_GET["style"] == "wrapper-online-reborn-version-3.0.0") { echo "<html><head><script>function redirectToVideoEditor() { location.href = \"https://wrapperonline-reborn.herokuapp.com/videomaker?movieId="?><?php if (isset($_GET["video"])) { echo $_GET["video"]; } ?><?php echo "\"; } </script></head><body onload=\"redirectToVideoEditor()\">Redirecting you to the old videomaker editor</body></html>"; }?>
<!DOCTYPE html>
	<html>
	  <head>
		<script>
		function hideWarning() {
		document.getElementById('warning').style.display = "none";
		}
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>The Video Maker On OurAnimate - Create Videos the way you want!</title>
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
	  <?php if (isset($_GET["video"])) { echo "<body onload=\"hideWarning()\"><iframe src=\"//app-ouranimate.herokuapp.com/c9wreioucghebyxou3ebe?movieId="?><?php if (isset($_GET["video"])) { echo $_GET["video"]; } ?><?php echo "\"></iframe>"; } else { echo "<body>"; } ?><p id="warning" style="display:block">ERROR: You need a movie id in order to view this page! if it's not that, please contact joseph the animator#2292 on discord and he will sort it out.</p>
	  </body>
	</html>
