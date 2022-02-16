<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//lightspeed.goanimate.com/">

<title><?php if (isset($_GET["title"])) { echo $_GET["title"]; }?> - <?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="title" content="<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?> - <?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>">
<meta name="description" content="Watch the video: <?php if (isset($_GET["title"])) { echo $_GET["title"]; }?> by <?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?> on GoAnimate.">
<link rel="canonical" href="https://goanimate.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">
<link rel="image_src" href="<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>">
<link rel="video_src" href="https://action-ouranimate.herokuapp.com/player/swf/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">
<meta name="video_height" content="309">
<meta name="video_width" content="550">
<meta name="video_type" content="application/x-shockwave-flash">
<meta name="medium" content="video">

<meta property="og:type" content="article">
<meta property="og:title" content="<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>">
<meta property="og:description" content="<?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?>">
<meta property="og:url" content="https://vyondlegacy2019.herokuapp.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">
<meta property="og:image" content="<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>">

<meta property="og:video" content="https://vyondlegacy2019.herokuapp.com/player/swf/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">
<meta property="og:video:height" content="309">
<meta property="og:video:width" content="550">
<meta property="og:video:type" content="application/x-shockwave-flash">

<link rel="alternate" type="application/json+oembed" href="https://vyondlegacy2019.herokuapp.com/api/oembed?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>&amp;format=json">
<link rel="alternate" type="text/xml+oembed" href="https://vyondlegacy2019.herokuapp.com/api/oembed?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>&amp;format=xml">

<meta name="twitter:card" content="player">
<meta name="twitter:title" content="<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?> - <?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>">
<meta name="twitter:description" content="Watch the video: <?php if (isset($_GET["title"])) { echo $_GET["title"]; }?> by <?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?> on GoAnimate.">
<meta name="twitter:image:src" content="<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>">
<meta name="twitter:player" content="https://action-ouranimate.herokuapp.com/player/embed/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">
<meta name="twitter:player:height" content="349">
<meta name="twitter:player:width" content="620">

<meta property="og:site_name" content="GoAnimate">
<meta property="fb:app_id" content="177116303202">

<meta name="google-site-verification" content="K_niiTfCVi72gwvxK00O4NjsVybMutMUnc-ZnN6HUuA">

<link rel="alternate" href="https://josephcrosmanplays532.github.io/GoAnimate" type="application/rss+xml" title="GoAnimate Blog">
<link rel="alternate" href="https://josephcrosmanplays532.github.io/GoAnimate/WhatsNew" type="application/rss+xml" title="GoAnimate - Recently Released Content">
<link rel="alternate" href="https://josephcrosmanplays532.github.io/GoAnimate/MostWatched" type="application/rss+xml" title="GoAnimate - Most Watched">

<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/common_combined.css" rel="stylesheet" type="text/css">

<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/upsell_modals.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/watermark.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/video.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/videos.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/video_export.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/movie_license.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/video_voice_vendor.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/bootstrap-tokenfield.min.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/bootstrap-tokenfield-addon.css" rel="stylesheet" type="text/css">
<link href="https://josephcrosmanplays532.github.io/video-player-2015-files/worknote.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script>
var srv_tz_os = -4, view_name = "go", user_cookie_name = "u_info";
</script>

<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/common_combined.js"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/video-player-2015-files/goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/comments.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/hubspot.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/jquery.ui.core.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/jquery.ui.widget.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/jquery.ui.position.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/jquery.ui.menu.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/jquery.ui.autocomplete.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/bootstrap-tokenfield.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/trial_upsell.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/moment.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/country-options.js"></script>


<script type="text/javascript" src="https://josephcrosmanplays532.github.io/video-player-2015-files/recaptcha_ajax.js"></script>

<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2516970-1']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_trackPageview', '/movie']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<!-- GoAnimate_Footer_ROS_Bottom_960x284 -->
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/video-player-2015-files/google_service.js">
</script>
<script type="text/javascript">
GS_googleAddAdSenseService("ca-pub-9090384317741239");
GS_googleEnableAllServices();
</script>
<script type="text/javascript">
GA_googleAddAttr("is_login", "no");
GA_googleAddAttr("is_plus", "no");
GA_googleAddAttr("is_creator", "no");
</script>
<script type="text/javascript">
GA_googleAddSlot("ca-pub-9090384317741239", "GoAnimate_Footer_ROS_Bottom_960x284");
GA_googleAddSlot("ca-pub-9090384317741239", "GoAnimate_Movie_ATF_Right_300x250");
GA_googleAddSlot("ca-pub-9090384317741239", "GoAnimate_AboutUs_300x250");
GA_googleAddSlot("ca-pub-9090384317741239", "GoAnimate_Upsell_1_Year_300x250");
GA_googleAddSlot("ca-pub-9090384317741239", "GoAnimate_GoTeam_Upsell_300x250");
</script>
<script type="text/javascript">
GA_googleFetchAds();
</script>
<!-- GoAnimate_Footer_ROS_Bottom_960x284 -->


<link href="https://plus.google.com/+goanimate" rel="publisher">

</head>
<body class="en_US">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId : '177116303202',
            cookie : true,
            status : true,
            xfbml : true,
            version : 'v2.1'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
        jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"https:\/\/web.archive.org\/web\/20150331003917\/http:\/\/lightspeed.goanimate.com\/animation\/c28f637b0239825e\/actionshop.swf","apiserver":"https:\/\/web.archive.org\/web\/20150331003917\/http:\/\/goanimate.com\/","clientThemePath":"https:\/\/web.archive.org\/web\/20150331003917\/http:\/\/lightspeed.goanimate.com\/static\/06b074ec1569b0e5\/<client_theme>","userId":""});
</script>

<div class="page-container">


<div class="site-header">
    <div class="navbar site-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <a class="navbar-brand" href="https://action-ouranimate.herokuapp.com/" title="GoAnimate">
                    <img alt="Make a Video Online with GoAnimate.com" src="https://josephcrosmanplays532.github.io/static/477/go/img/business_video/home/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/signup">Free Trial</a></li>
                    <li><a href="/login">Login</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="/videos" data-toggle="dropdown">Explore <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/video-maker-tips">Blog</a></li>
                            <li><a href="/features">Features</a></li>
                            <li><a href="/videos">Videos</a></li>
                            <li><a href="https://gasupport.wordpress.com/">Help Center</a></li>
                        </ul>
                    </li>
                                    <li>
                        <a href="https://action-ouranimate.herokuapp.com/login?returnTo=/dashboard/videos/?hook=header_button.site">Your Videos</a>
                    </li>
                    <li>
                        <a class="hidden-sm hidden-md hidden-lg" href="/videomaker">Make a Video</a>
                        <span class="site-nav-btn hidden-xs"><a class="btn btn-orange" href="/videomaker">Make a Video</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END OF HEADER -->
<div id="video-page">
<div class="video-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 video-left">
                <div class="status-container">
                    <div class="vthumb-container">
                        <div class="vthumb">
                            <div class="vthumb-clip"><div class="vthumb-clip-inner"><span class="valign"></span><img src="<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>" alt="<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>"></div></div>
                        </div>
                    </div>
                    <div class="status public">
                        <span class="draft-text">Draft</span>
                        <span class="unlisted-text">Unlisted</span>
                        <span class="private-text">Private</span>
                        <span class="public-text">Public</span>
                    </div>
                </div>
                <div class="video-top-content clearfix">
                    <div class="pull-left video-info">
                        <h1><?php if (isset($_GET["title"])) { echo $_GET["title"]; }?></h1>
                        By <a href="https://action-ouranimate.herokuapp.com/user/<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>" title="<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>"><?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?></a> <span class="label label-plus">GoPlus</span>

                            </div>
                    <div class="video-top-status">
                            </div>
                </div>
            </div>
            <div class="col-sm-6">
                <ul class="video-top-nav">
                        <li class="static"><a title="Views"><span class="icon views"></span> <span class="num">0</span></a></li>
                        </ul>
            </div>
        </div>
    </div>
</div>
<div class="video-main">
<div class="container">
        <div class="video-main-content">
            <div class="video-header clearfix noshow">
            </div>

            <div class="video-content">
                <div class="player-container">
<meta name="medium" content="video"/>
<div style="position:relative">
    <div id="playerdiv" align="center" style="width:620px;height:349px;">
        This content requires the Adobe Flash Player 10.3. <a href="https://josephcrosmanplays532.github.io/go/getflash">Get Flash</a>
    </div>
</div>
<script type="text/javascript">
var playerApiReady = false;
function playerLoaded() {
    playerApiReady = true;
    jQuery(document).trigger('playerApiReady');
};
jQuery('#playerdiv').flash({
    id: "Player",
    swf: "https://josephcrosmanplays532.github.io/animation/66453a3ba2cc5e1a/player.swf",
    height: 349,
    width: 620,
    bgcolor: "#000000",
    scale: "exactfit",
    allowScriptAccess: "always",
    allowFullScreen: "true",
    wmode: "opaque",

    hasVersion: "10.3",

    flashvars: {"movieOwner":"<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>","movieOwnerId":"0WBYrVfmE3rs","movieId":"<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>","movieLid":"0","movieTitle":"<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>","movieDesc":"<?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?>","userId":"","username":"","uemail":"","ut":"-1","numContact":"","apiserver":"https:\/\/vyondlegacy2019.herokuapp.com\/","duration":"<?php if (isset($_GET["duration"])) { echo $_GET["duration"]; }?>","playcount":1,"thumbnailURL":"https:\/\/vyondlegacy2019.herokuapp.com\/movie_thumbs\/<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>.png","copyable":"0","isPublished":"1","ctc":"go","tlang":"en_US","is_private_shared":"0","autostart":"0","appCode":"go","is_slideshow":"0","originalId":"0zEt_fo4L-5k","is_emessage":"0","storePath":"https:\/\/josephcrosmanplays532.github.io\/store\/3a981f5cb2739137\/<store>","clientThemePath":"https:\/\/josephcrosmanplays532.github.io\/static\/55910a7cd204c37c\/<client_theme>","animationPath":"https:\/\/josephcrosmanplays532.github.io\/animation\/66453a3ba2cc5e1a\/","isEmbed":"0","refuser":null,"utm_source":null,"uid":null,"isTemplate":"0","showButtons":"1","chain_mids":"","averageRating":5,"ratingCount":"12","fb_app_url":"https:\/\/vyondlegacy2019.herokuapp.com\/","ad":1,"endStyle":0,"isWide":"1","pwm":1,"s3base":"https:\/\/vyondlegacy2019.herokuapp.com\/movie_thumbs\/","initcb":"playerLoaded","showshare":false}});
</script>                </div>
            </div>
            <div class="video-actions">
                <span class="divider">|</span>
                <button class="btn btn-link" data-remote="/ajax/getMovieShare/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>&title=<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>&desc=<?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?>&modified=<?php if (isset($_GET["modified"])) { echo $_GET["modified"]; }?>&creator=<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>&imgUrl=<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>&duration=<?php if (isset($_GET["duration"])) { echo $_GET["duration"]; }?>&imgPintrestShareUrl=https%3A%2F%2Fvyondlegacy2019.herokuapp.com%2Fmovie_thumbs%2F<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>.png" data-action="video-share"><span class="glyph-pro glyph-share-alt"></span> &nbsp; Share</button>

                <span class="divider">|</span>
            </div>
<script>
$('.video-actions').toggle($('.video-actions').find('.btn').length > 0);
</script>


            <div class="inside">
                <div class="video-social-share clearfix">
                    <div>
                        <div class="pull-left">
                            <div class="fb-like" data-href="https://action-ouranimate.herokuapp.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>" data-send="true" data-layout="button_count" data-width="160" data-show-faces="false"></div>
                        </div>
                    </div>
                    <div style="width:70px">
                        <div class="pull-left">
                        <div class="g-plusone" data-size="medium" data-href="https://action-ouranimate.herokuapp.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>"></div>
                        </div>
                    </div>
                    <div style="width:90px;">
                        <div class="pull-left">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://action-ouranimate.herokuapp.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>" data-hashtags="goanimate">Tweet</a>
                        </div>
                    </div>
                    <div>
                        <div class="pull-left">
                        <a data-pin-config="beside" href="//pinterest.com/pin/create/button/?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>&amp;media=<?php if (isset($_GET["imgPintrestShareUrl"])) { echo $_GET["imgPintrestShareUrl"]; }?>&amp;description=<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>" data-pin-do="buttonPin"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-main-aside" id="player-aside"></div>

</div>
</div>
<div class="container main-container">
    <div class="row">
        <div class="col-md-8">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#video-comments" data-toggle="tab">Comments (<span class="num-commented">0</span>)</a></li>
                <li><a href="#video-favorites" data-toggle="tab">Favorites (<span class="num-favorited">0</span>)</a></li>
                <li class=""><a href="#video-info" data-toggle="tab">More Info</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane" id="video-info">
                    <p class="inside">Published on: <?php if (isset($_GET["modified"])) { echo $_GET["modified"]; }?></p>
                    <p><?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 aside video-aside">
            <div></div><br>
        </div>
    </div>
</div>
</div>
<!-- modals -->


<script>
// Twitter
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

// Google Plus
(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

// Pinterest
(function(d){
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
  p.type = 'text/javascript';
  p.async = true;
  p.src = '//assets.pinterest.com/js/pinit.js';
  f.parentNode.insertBefore(p, f);
}(document));

// constants defined for movie title prefix editing
var MOVIE_TITLE_PREFIX = '';
var MOVIE_TITLE = '<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>';
var MOVIE_USERNAME = '<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>';

var USER_USERNAME = '';var MOVIE_COLLAB_LOCK = false;</script>

<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/users.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/video.js"></script>
<script src="https://josephcrosmanplays532.github.io/video-player-2015-files/videos.js"></script>







<div id="trial-unlock-overlay" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Subscribe to unlock more features</h3>
            </div>

            <div class="modal-body text-center">
                <div class="trial-upsell trial-upsell-unlock">
                    <h2><img src="https://josephcrosmanplays532.github.io/video-player-2015-files/lock.png" alt=""> Unlock these features now</h2>

                    <p class="text-feature">
                        Remove the full screen watermark<br>
                        Download up to 1080P (Full HD)<br>
                        One-click publish                    </p>

                    <div class="text-muted">
                        <div>Publish to <img class="logo" src="https://josephcrosmanplays532.github.io/video-player-2015-files/logo_ga.png" alt=""> or export to</div>
                        <div>
                            <img class="logo-partner" src="https://josephcrosmanplays532.github.io/video-player-2015-files/logo_youtube20.png" alt="">
                            <img class="logo-partner" src="https://josephcrosmanplays532.github.io/video-player-2015-files/logo_wistia20.png" alt="">
                            <img class="logo-partner" src="https://josephcrosmanplays532.github.io/video-player-2015-files/logo_vidyard20.png" alt="">
                        </div>
                        <div>... and many more!</div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <a class="btn btn-orange" href="https://action-ouranimate.herokuapp.com/login?returnTo=/yourvideos?hook=preview.site">Your Videos</a>
            </div>
        </div>
    </div>
</div>
<div id="trial-expired-overlay" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Oh, your subscription has expired</h3>
            </div>

            <div class="modal-body text-center">
                <div class="trial-upsell trial-upsell-expired">
                    <h2><img src="https://josephcrosmanplays532.github.io/video-player-2015-files/lock.png" alt=""> Subscribe now to unlock your account</h2>

                    <p class="text-feature">
                        Edit and download your videos in HD<br>
                        Access all GoAnimate templates<br>
                        Create unlimited characters<br>
                        Use 1-click publishing                    </p>
                </div>
            </div>

            <div class="modal-footer">
                <a class="btn btn-orange" href="https://action-ouranimate.herokuapp.com/login?returnTo=/yourvideos?hook=preview.site">Your Videos</a>
            </div>
        </div>
    </div>
</div>


<!-- FOOTER -->

<div class="site-footer">
    <div class="container">
        <div class="site-footer-nav row">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>About GoAnimate</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/about">Who we are</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/contactus">Contact Us</a></li>
                        <li><a href="https://action-ouranimate.herokuapp.com/video-maker-tips?blog">Blog</a></li>
                        <li><a href="https://josephcrosmanplays.wordpress.com/2021/09/22/9/">Press</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/videos/mostwatched">Browse all videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>GoAnimate Solutions</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://action-ouranimate.herokuapp.com/player/embed?selectStyle=true&movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">Embed Your Video In Style</a></li>
                        <li><a href="https://action-ouranimate.herokuapp.com/player/embed?2017=true&movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>">Embed Your Video in 2017 edition</a></li>
                        <li><a href="https://action-ouranimate.herokuapp.com?school" target="_blank">GoAnimate for Schools</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>Usage Guidelines</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/termsofuse">Terms of Service</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/legal">About Licensed Themes</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/privacy">Privacy Policy</a></li>
                        <li><a href="//action-ouranimate.herokuapp.com/videomaker/full/previewVideoMaker?selectTheme=true" target="_blank">Retro Video Maker</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4>Getting Help</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/video-maker-tips">Video Maker Tips</a></li>
                        <li><a href="https://josephcrosmanplays.wordpress.com/support/">Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-6">
                <div class="site-footer-socials-container">
                    Follow us on:
                    <ul class="site-footer-socials">
                        <li><a class="glyph-social glyph-facebook" href="https://www.facebook.com/GoAnimateInc"><span class="sr-only">Facebook</span></a></li>
                        <li><a class="glyph-social glyph-twitter" href="https://twitter.com/GoAnimate"><span class="sr-only">Twitter</span></a></li>
                        <li><a class="glyph-social glyph-linked-in" href="https://www.linkedin.com/company/goanimate"><span class="sr-only">LinkedIn</span></a></li>
                        <li><a class="glyph-social glyph-youtube" href="https://www.youtube.com/user/GoAnimate"><span class="sr-only">YouTube</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="site-footer-copyright">
                    <img src="https://josephcrosmanplays532.github.io/video-player-2015-files/logo_norton.png" alt="Norton Secured"/>
                    <img src="https://josephcrosmanplays532.github.io/video-player-2015-files/logo_amazon.png" alt="AWS Partner Network"/>
                    &nbsp;&nbsp;&nbsp;
                    <div class="ga-copy">GoAnimate &copy; <?php echo date("Y");?></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            This content requires the Adobe Flash Player 10.3. <a href="https://josephcrosmanplays532.github.io/go/getflash">Get Flash</a>
        </div>
    </div>
</div>

<div class="modal upsell-modal" id="upsell-modal" data-page="videos" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Upgrade to unlock more features</h3>
            </div>
            <div class="modal-body">
                <div class="upsell-features-wrapper ">
                    <div class="upsell-features">
                        <div class="upsell-feature commercial-license">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide8_commerciallic_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Commercial License for Business Use</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Get the commercial rights to use your video for business purposes.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Limited commercial rights</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Full commercial rights</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Full commercial rights</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature business-style">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide3_bizexestyle_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Business Exclusive Themes</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Access relevant characters, backgrounds and props representing a wide range of industries.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Access to all themes</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Access to all themes</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Access to all themes</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature unlimited-duration">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide2_unlimitedvideo_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Unlimited Video Duration</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Produce both short form and long form videos with ease using out Video.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">&lt; 30 seconds</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited <i class="i-upsell-info" title="Excludes exclusive business themes"></i></div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature download-video">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide5_downloadexport_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Download and Export Your Videos</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Download your video as an mp4 or export directly to our partner sites.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">Up to 360p</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Up to 720p</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Up to 1080p</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Up to 1080p</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature watermark">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide4_watermark_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Watermark Management</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Replace our logo with your own, or remove the watermark completely.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">GoAnimate Watermark</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">GoAnimate Watermark</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">GoAnimate Watermark</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Remove/Replace Watermark <i class="i-upsell-info" title="Work with multiple logos, assigning different logos to the watermark in different videos, or remove the watermark entirely"></i></div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Remove/Replace Watermark <i class="i-upsell-info" title="Work with multiple logos, assigning different logos to the watermark in different videos, or remove the watermark entirely"></i></div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature character">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide1_cc_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Huge Cast of Characters</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Use any of our library characters, or customize at will with our character creators.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">Limited <i class="i-upsell-info" title="Excludes exclusive business theme character creators"></i></div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature version-control">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide6_versioncontrol_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Version Control</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Roll back to an earlier, saved-over copy with ease or manage multiple versions.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li class="dim">
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">N/A</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Available</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Available</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Available</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature qvm-contents">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide7_qvm_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Premium Templates Content</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Access our premium characters and settings, or use your own custom characters in our Templates.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">Limited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">Unlimited</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="upsell-feature qvm-duration">
                            <div class="upsell-feature-body">
                                <div class="upsell-feature-image">
                                    <img src="https://web.archive.org/web/20150331003917im_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/img/upsell/slide9_templates_icon.png">
                                </div>
                                <div class="upsell-feature-title">
                                    <h2>Longer Video Duration for Templates</h2>
                                    <div class="upsell-unlock">Unlock this feature now</div>                                    <p>Extend your scenes with up to 30 lines of dialog when using our Templates.</p>
                                </div>
                            </div>

                            <div>
                                <div class="text-right">
                                    <a href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
                                </div>

                                <ul class="upsell-plan-comparison clearfix">
                                    <li class="dim">
                                        <div class="upsell-plan-name">Free<br> Plan</div>
                                        <div class="upsell-plan-data">&lt;10 lines</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPlus<br> Plan</div>
                                        <div class="upsell-plan-data">&lt;30 lines <i class="i-upsell-info" title="Excludes exclusive business theme templates"></i></div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPublish<br> Plan</div>
                                        <div class="upsell-plan-data">&lt;30 lines</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoPremium<br> Plan</div>
                                        <div class="upsell-plan-data">&lt;30 lines</div>
                                    </li>
                                    <li>
                                        <div class="upsell-plan-name">GoTeam<br> Plan</div>
                                        <div class="upsell-plan-data">&lt;30 lines</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="upsell-arrow left" href="#"></a>
                <a class="upsell-arrow right" href="#"></a>

                <ol class="upsell-index">
                    <li class="active"><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                    <li><span class="upsell-index-dot"></span></li>
                </ol>
            </div>
            <div class="modal-footer">

                <a class="btn btn-orange btn-upsell" href="https://web.archive.org/web/20150331003917/http://goanimate.com/business/videoplans?hook=upsell.site">Subscribe</a>

            </div>
        </div>
    </div>
</div>

<script src="https://web.archive.org/web/20150331003917js_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/js/upsell.js"></script>

</div>
<!-- END OF PAGE STRUCTURE -->


<script>
var IE = {
  Version: function() {
    var version = 999; // we assume a sane browser
    if (navigator.appVersion.indexOf("MSIE") != -1)
      // bah, IE again, lets downgrade version number
      version = parseFloat(navigator.appVersion.split("MSIE")[1]);
    return version;
  }
}

var UserData = function() {
  this.userData = null;
  this.name = location.hostname;

  if (IE.version > 6 && !this.userData) {
    try {
      this.userData = document.createElement('INPUT');
      this.userData.type = "hidden";
      this.userData.style.display = "none";
      this.userData.addBehavior ("#default#userData");
      document.body.appendChild(this.userData);
      var expires = new Date();
      expires.setDate(expires.getDate()+365);
      this.userData.expires = expires.toUTCString();
    } catch(e) {
    }
  }

    this.setItem = function(key, value) {

            this.userData.load(this.name);
            this.userData.setAttribute(key, value);
            this.userData.save(this.name);
    }
    this.getItem = function(key) {
            this.userData.load(this.name);
            return this.userData.getAttribute(key);
    }
    this.remove = function(key) {
            this.userData.load(this.name);
            this.userData.removeAttribute(key);
            this.userData.save(this.name);
    }

}

function locStorage(action, key, value){
    var result;
    if (typeof(localStorage) == 'undefined' ) {
            // localStorge not supported
    } else {
        try {
            switch(action){
                case 'setItem':
                    localStorage.setItem(key, value);
                break;
                case 'getItem':
                    result = localStorage.getItem(key);
                break;
                case 'removeItem':
                    localStorage.removeItem(key);
                break;
            }
        return result;
        } catch (e) {
            if (e == QUOTA_EXCEEDED_ERR) {
                //data wasn't successfully saved due to quota exceed so throw an error
            }
        }
    }
}
function bannedUser(value){
    if (value == "true"){
        document.body.innerHTML="";
    }
}
</script>
<div style="height:0;overflow:hidden;"><object width="1" height="1">   <param name="vap" value="http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/swf/VAP.swf"></param>   <param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"></param>   <param name="FlashVars" value="detect=true"/>   <param name="allowscriptaccess" value="always"></param>   <embed src="https://web.archive.org/web/20150331003917oe_/http://lightspeed.goanimate.com/static/06b074ec1569b0e5/go/swf/VAP.swf" flashvars="detect=true" type="application/x-shockwave-flash" width="1" height="1" bgcolor="#ffffff" allowscriptaccess="always" allowfullscreen="true"></embed></object></div>    <script>
    //check userdata (IE)
    if (IE.version > 6) {
        var ud = new UserData();
        var ud_expiry = ud.getItem("vap");
        if (ud_expiry > 1427762357){
            document.body.innerHTML='';
        }
    }
    //check localStorage
    var ls_expiry = locStorage("getItem", "vap");
    if (ls_expiry > 1427762357){
        document.body.innerHTML='';
    }
    </script>

<div id="container"></div>

<div id="offer_container">
</div>
<script type="text/javascript">
    </script>

<!-- Start Quantcast tag -->
<script type="text/javascript">
    var _qevents = _qevents || [];
    (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://web.archive.org/web/20150331003917/https://secure" : "https://web.archive.org/web/20150331003917/http://edge")
            + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
    })();
</script>
<script type="text/javascript">
    _qevents.push( {"qacct":"p-66CFnJxwubvnE"} );
</script>
<noscript>
<div style="display: none;">
    <img src="https://web.archive.org/web/20150331003917im_/http://pixel.quantserve.com/pixel/p-66CFnJxwubvnE.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->

<!-- Start of Async HubSpot Analytics Code -->
<script type="text/javascript">
(function(d,s,i,r) {
if (d.getElementById(i)){return;}
var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
n.id=i;n.src='//web.archive.org/web/20150331003917/http://js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/427840.js';
e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
</script>
<!-- End of Async HubSpot Analytics Code -->

<script type="text/javascript">
    function logSendShareToGA() {
        _gaq.push(['_trackPageview', "/pageTracker/goals/reg/contactform"]);
    }

</script>

<div style="height:0;overflow:hidden;">
<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1066565985;
var google_conversion_label = "zfxRCPeZtAQQ4YLK_AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//web.archive.org/web/20150331003917js_/http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//web.archive.org/web/20150331003917im_/http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1066565985/?value=0&amp;label=zfxRCPeZtAQQ4YLK_AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</div>



<!-- Bing ad tracking code -->
<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//web.archive.org/web/20150331003917js_/http://flex.atdmt.com/mstag/site/9b6ffab3-4c45-48fb-8351-579a59bc477f/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"2303149",type:"1",nonadvertisingcost:"",revenue:"",actionid:"122891"})</script> <noscript> <iframe src="//web.archive.org/web/20150331003917if_/http://flex.atdmt.com/mstag/tag/9b6ffab3-4c45-48fb-8351-579a59bc477f/analytics.html?dedup=1&amp;domainId=2303149&amp;type=1&amp;nonadvertisingcost=&amp;revenue=&amp;actionid=122891" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>

</body>
</html>
<!--
     FILE ARCHIVED ON 00:39:17 Mar 31, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 18:03:00 Oct 30, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 263.413
  exclusion.robots: 0.791
  exclusion.robots.policy: 0.784
  RedisCDXSource: 3.389
  esindex: 0.01
  LoadShardBlock: 240.783 (3)
  PetaboxLoader3.datanode: 275.22 (4)
  CDXLines.iter: 16.44 (3)
  load_resource: 176.917
  PetaboxLoader3.resolve: 94.584
-->
