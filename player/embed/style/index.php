<?php if (isset($_GET["2015"])) { echo '
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>'?><?php if (isset($_GET["title"])) { echo $_GET["title"]; } ?><?php echo ' | GoAnimate</title>
<meta name="title" content="'?><?php if (isset($_GET["title"])) { echo $_GET["title"]; } ?><?php echo '"/>
<meta name="description" content="'?><?php if (isset($_GET["desc"])) { echo $_GET["desc"]; } ?><?php echo '"/>

<meta name="robots" content="noindex, nofollow"/>
<meta name="google-site-verification" content="K_niiTfCVi72gwvxK00O4NjsVybMutMUnc-ZnN6HUuA"/>

<link rel="alternate" type="application/json+oembed" href="https://vyondlegacy2019.herokuapp.com/api/oembed?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26'?><?php if (isset($_GET["movie"])) { echo $_GET["movie"]; } ?><?php echo '&amp;format=json">
<link rel="alternate" type="text/xml+oembed" href="https://vyondlegacy2019.herokuapp.com/api/oembed?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26'?><?php if (isset($_GET["movie"])) { echo $_GET["movie"]; } ?><?php echo '&amp;format=xml">

<style>
html, body, #player-container {margin:0;padding:0;width:100%;height:100%;overflow:hidden;}
</style>

<script src="https://josephcrosmanplays532.github.io/static/477/go/js/swfobject.js"></script>
</head>
<body>
<div id="player-container">
    This content requires the Adobe Flash Player 18.0. <a href="https://josephcrosmanplays532.github.io/go/getflash/">Get Flash</a>
    <noscript>
    <object width="100%" height="100%"><param name="movie" value="https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/animation/414827163ad4eb60/player.swf"></param><param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/animation/414827163ad4eb60/player.swf" " type="application/x-shockwave-flash" width="100%" height="100%" bgcolor="#ffffff" allowscriptaccess="always" allowfullscreen="true"></embed></object>
    </noscript>
</div>
<script>
var so = new SWFObject("https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/animation/414827163ad4eb60/player.swf", "Player", "100%", "100%", "10.0.12", "#464646");
so.useExpressInstall(\'/static/libs/expressInstall.swf\');
so.addParam("AllowScriptAccess", "always");
so.addParam("wmode", "transparent");
so.addParam("scale", "exactfit");
so.addParam("allowFullScreen","true");

so.addVariable("movieOwner", "'?><?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?><?php echo '");
so.addVariable("movieOwnerId", "0EdlvvzDkj1I");
so.addVariable("movieId", "'?><?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?><?php echo '");
so.addVariable("movieLid", "0");
so.addVariable("movieTitle", "'?><?php if (isset($_GET["title"])) { echo $_GET["title"]; }?><?php echo '");
so.addVariable("movieDesc", "'?><?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?><?php echo '");
so.addVariable("userId", "");
so.addVariable("username", "");
so.addVariable("uemail", "");
so.addVariable("ut", "-1");
so.addVariable("numContact", "");
so.addVariable("apiserver", "https://vyondlegacy2019.herokuapp.com/");
so.addVariable("duration", "'?><?php if (isset($_GET["duration"])) { echo $_GET["duration"]; }?><?php echo '");
so.addVariable("playcount", "0");
so.addVariable("thumbnailURL", "'?><?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?><?php echo '");
so.addVariable("copyable", "0");
so.addVariable("isPublished", "0");
so.addVariable("ctc", "go");
so.addVariable("tlang", "en_US");
so.addVariable("is_private_shared", "1");
so.addVariable("autostart", "0");
so.addVariable("appCode", "go");
so.addVariable("is_slideshow", "0");
so.addVariable("originalId", "0KLkZycrNnBI");
so.addVariable("is_emessage", "0");
so.addVariable("storePath", "https://josephcrosmanplays532.github.io/OurAnimate-Assets/store/3a981f5cb2739137/<store>");
so.addVariable("clientThemePath", "https://josephcrosmanplays532.github.io/OurAnimate-Assets/static/ad44370a650793d9/<client_theme>");
so.addVariable("animationPath", "https://josephcrosmanplays532.github.io/OurAnimate-Assets/animation/414827163ad4eb60/");
so.addVariable("isEmbed", "1");
so.addVariable("refuser", "");
so.addVariable("utm_source", "");
so.addVariable("uid", "");
so.addVariable("isTemplate", "0");
so.addVariable("showButtons", "1");
so.addVariable("chain_mids", "");
so.addVariable("averageRating", "0");
so.addVariable("ratingCount", "0");
so.addVariable("fb_app_url", "https://vyondlegacy2019.herokuapp.com/");
so.addVariable("ad", "0");
so.addVariable("endStyle", "0");
so.addVariable("isWide", "0");
so.addVariable("pwm", "1");
so.addVariable("s3base", "https://vyondlegacy2019.herokuapp.com/movie_thumbs/");

so.write("player-container");
</script>
<!-- Google Analytics -->
<script type="text/javascript" src="../../js/goanimate/2015EmbedPlayer/script1.js"></script>
</body>
</html>'; } else { echo '<p style="display:'?><?php if (isset($_GET["2011"])) { echo "none"; } else { echo "block"; } ?><?php echo '">Please choose a style to use the embed player</p>'; } ?>
<?php if (isset($_GET['2011'])) { echo '<style>html, body, #2011-player-container {margin:0;padding:0;width:100%;height:100%;overflow:hidden;}</style><div id="2011-player-container"><embed type="application/x-shockwave-flash" width="100%" height="100%" bgcolor="#ffffff" allowscriptaccess="always" allowfullscreen="true" height="100%" width="100%" src="/static/animation/2011/player.swf?movieOwner='?><?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?><?php echo '&movieOwnerId=0EUordx_VJMI&movieId='?><?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?><?php echo '&movieLid=0&movieTitle='?><?php if (isset($_GET["title"])) { echo $_GET["title"]; }?><?php echo '&movieDesc='?><?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?><?php echo '&userId=&username=&uemail=&ut=-1&numContact=&apiserver=https%3A%2F%2Fvyondlegacy2019.herokuapp.com%2F&duration=118&playcount=0&thumbnailURL=https%3A%2F%2Fvyondlegacy2019.herokuapp.com%2Fmovie_thumbs%2F'?><?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?><?php echo '.png&copyable=0&isPublished=1&ctc=go&tlang=en_US&is_private_shared=0&autostart=1&appCode=go&is_slideshow=0&originalId=0zEt_fo4L-5k&is_emessage=0&storePath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fstore%2F50%2F%3Cstore%3E&clientThemePath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fstatic%2F477%2F%3Cclient_theme%3E&isEmbed=1&refuser=&utm_source=&uid=&isTemplate=0&showButtons=1&chain_mids=&averageRating=5&ratingCount=341&fb_app_url=https%3A%2F%2Fvyondlegacy2019.herokuapp.com%2F&ad=0&endStyle=0"></embed></div>'; } ?>
