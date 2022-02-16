<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: /login?returnTo=/yourvideos");
  exit();
}
?>
<?php if (isset($_SESSION['login']) && $_GET["style"] == "wrapper-online-reborn-version-3.0.0") { echo "
<!DOCTYPE html>
	<html>
	  <head>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta charset=\"utf-8\">
		<title>Your Videos On Wrapper Online Reborn version 3.0.0</title>
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
	  <body>
		<iframe src=\"//wrapperonline-reborn.herokuapp.com/ecwiogerhgobuidgfghboudiflbgih/evet89hvg8nu9e8enhtre9rdt70h87ordt7hy\"></iframe>
	  </body>
	</html>"; } else { echo "

<!DOCTYPE html>
	<html>
	  <head>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<meta charset=\"utf-8\">
		<title>Your Videos On Vyond Legacy Online</title>
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
	  <body>
		<iframe src=\"//vyondlegacy2019.herokuapp.com/rewoghbetghiutghtehgter8ogheo8rg/gijtr9ihunriubtodgbtduihkj\"></iframe>
	  </body>
	</html>"; } ?>
