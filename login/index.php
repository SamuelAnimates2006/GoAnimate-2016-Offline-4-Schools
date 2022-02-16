<?php if (isset($_GET["school"])) { echo ""?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/static/2015/school/css/common_combined.css">
    <script>
        function getLinkPath() {
            location.href = "<?php if (isset($_GET["returnTo"])) { echo $_GET["returnTo"]; } else { echo "/submit_login.php?msg=We could not renew your subscription, but we will load the video list witch is what we are attempting to do right now."; } ?>";
            document.getElementById('login').style.display = "none";
        }
        function closeSignInWindow() {
            location.href = "/closeSignInWindow";
            document.getElementById('login').style.display = "none";
        }
    </script>
</head>

<?php
    include 'config_school.php';

    session_start(); 

    $user = $user_;
    $pass = $password_;

    if (!isset($_SESSION['login'])){
            if (isset($_POST['submit'])) { 

            $benutzer = $_POST["user1"]; 
            $password = $_POST["password1"]; 
        if ($benutzer == $user and $password == $pass) { 
      $_SESSION['login'] = $user.$pass; 
        echo "<body onload=\"getLinkPath()\"><p>Hold up, we are trying our best here <img src=\"../../loading.gif\"></p><a href=\"/login?act=logout&school\">Logout</a></p>"; 
      }else{
      echo '<br><br><center><h5>Your Email address And Pasword is incorrect. please try again.</h5>';
      }
    } 
  ?>

<body>
    <div class="login-clean" id="login" style="background-color: rgb(255,255,255);">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color: #f7e859;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user1" placeholder="Email address"></div>
            <div class="form-group"><input class="form-control" type="password" name="password1" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-orange" type="submit" name="submit" value="OK">Log In</button></div>
        </form>
    </div>

    <?php
  } elseif (isset($_SESSION['login']) && $_GET["act"] == "logout"){
    session_destroy();
    header("Location: /login?school");
  }else{ 
  ?>
  <ul>
    <body onload="closeSignInWindow()"><a href="/login?act=logout&school">Logout</a>
  </ul>
  <?php
  } 
?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html><?php echo ""; } else { echo ""?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script>
        function getLinkPath() {
            location.href = "<?php if (isset($_GET["returnTo"])) { echo $_GET["returnTo"]; } else { echo "/dashboard/videos"; } ?>";
            document.getElementById('login').style.display = "none";
        }
    </script>
</head>

<?php
    include 'config.php';

    session_start(); 

    $user = $user_;
    $pass = $password_;

    if (!isset($_SESSION['login'])){
            if (isset($_POST['submit'])) { 

            $benutzer = $_POST["user1"]; 
            $password = $_POST["password1"]; 
        if ($benutzer == $user and $password == $pass) { 
      $_SESSION['login'] = $user.$pass; 
        echo "<body onload=\"getLinkPath()\"><p>Redirecting To "?><?php if (isset($_GET["returnTo"])) { echo $_GET["returnTo"]; } else { echo "/dashboard/videos"; } ?><?php echo ".<img src=\"../../loading.gif\"><a href=\"/login?act=logout\">Logout</a></p>"; 
      }else{
      echo '<br><br><center><h5>Your Username And Pasword is incorrect. please try again.</h5>';
      }
    } 
  ?>

<body>
    <div class="login-clean" id="login" style="background-color: rgb(255,255,255);">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color: #f7e859;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user1" placeholder="User"></div>
            <div class="form-group"><input class="form-control" type="password" name="password1" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" value="OK" style="background-color: #FF0000;">Log In</button></div>
        </form>
    </div>

    <?php
  } elseif (isset($_SESSION['login']) && $_GET["act"] == "logout"){
    session_destroy();
    header("Location: /login");
  }else{ 
  ?>
  <ul>
    <body onload="getLinkPath()"><p>Redirecting To <?php if (isset($_GET["returnTo"])) { echo $_GET["returnTo"]; } else { echo "/dashboard/videos"; } ?>.<img src="../../loading.gif"><a href="/login?act=logout">Logout</a></p>
  </ul>
  <?php
  } 
?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html><?php echo ""; } ?>
