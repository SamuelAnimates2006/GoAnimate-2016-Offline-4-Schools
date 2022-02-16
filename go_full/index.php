<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: /login?returnTo=/go_full");
  exit();
}
?>
<html><head>
  <script>
    function loadMovieId() {
      window.location = "/videomaker/full/editcheck?video=<?php if (isset($_GET["video"])) { echo $_GET["video"]; }?>";
    }
  </script>
  </head>
  <body onload="loadMovieId()">
    <p>ERROR: cannot load the video editor. Maybe a popup blocker blocked it or it might be something else. if it's something else, plese contact joseph the animator#2292 on discord and it should fix the problem.</p>
