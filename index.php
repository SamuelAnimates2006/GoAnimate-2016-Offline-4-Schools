<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// This Section shows the time on the ?time command.
if (isset($_GET['time'])) { echo "<html><head><script>function startRefreshPage() { setTimeout('refreshPage()', 00000); document.getElementById('welcome-message').style.display = \"none\"; } function refreshPage() { window.location.reload() }</script><body onload=\"startRefreshPage()\"><p>"?><?php echo date("h:i:s") . "\n"; ?><?php echo "</p></body></html>"; }

// (C) REDIRECT TO YOUR VIDEOS PAGE IF LOGGED IN
if (isset($_SESSION['login'])) { echo "<script>function Redirect() { location.href = \""?><?php if (isset($_GET['school'])) { echo "/movies"; } else { echo "/dashboard/videos"; } ?><?php echo "\"; }</script><body onload=\"Redirect()\"></body></html>"; } ?>
<?php if (isset($_GET["scratch"])) { echo ""?>
<html lang="en"><head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="/">

<title>Scratch - Imagine, Program, Share</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Scratch is a free programming language and online community where you can create your own interactive stories, games, and animations.">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI">

<link rel="shortcut icon" href="/scratch/favicon.ico">

<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/css/common_combined.css.gz.css">

<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/css/studio.css.gz.css">

<script>
var srv_tz_os = -4, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://d2qrjeyl4jwu9j.cloudfront.net/static/642cd772aad8e952/go/js/lib/html5shiv.js.gz.js"></script>
<![endif]-->
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/js/common_combined.js.gz.js"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/static/477/go/po/goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>
<script src="https://josephcrosmanplays532.github.io/ajax/cookie_policy.js" async=""></script>
<script src="https://josephcrosmanplays532.github.io/static/477/go/js/movie.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/477/go/js/cookie.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/477/go/js/studio.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/477/go/js/jquery/jquery.tmpl.min.js"></script>
<script src="https://josephcrosmanplays532.github.io/school/js/studio.js.gz.js"></script>

<!-- Google Knowledge Graph -->
<script type="application/ld+json">
{
    "@context": "http://web.archive.org/web/20181226033546/http://schema.org",
    "@type": "Organization",
    "name": "GoAnimate",
    "url": "http://josephcrosmanplays532.github.io",
    "logo": "http://gawpstorage.s3.amazonaws.com/img/google_knowledge_graph_logo.jpg",
    "sameAs": [
        "http://www.facebook.com/GoAnimateInc",
        "http://twitter.com/GoAnimate",
        "http://www.linkedin.com/company/goanimate",
        "http://plus.google.com/+goanimate",
        "http://www.youtube.com/user/GoAnimate"
    ]
}
</script>

</head>
<body class="page-action-videomaker full_screen_studio" style="">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>


<div style="position:relative;">
    <div id="studioBlock" style="height: 0px;"><!-- --></div>

    <div id="playerBlock"></div>
</div>

<script>
    
    var hideHTMLBox = function() {
        window.close();
    };

    function tutorialStarted() {
    }
    function tutorialStep(sn) {
    }
    function tutorialCompleted() {
    } 

    var enable_full_screen = true;

       var studio_data = {
        id: "Studio",
        swf: "https://josephcrosmanplays532.github.io/scratch/<?php echo "v125"; ?>/Scratch.swf",
        width: "100%",
        height: "100%",

        align: "middle",
        allowScriptAccess: "always",
        allowFullScreen: "true",
        wmode: "window",

        hasVersion: "10.3"
    };

    if (!enable_full_screen) {
        studio_data.width  = 960;
        studio_data.height  = 630;
        resize_studio = false;
    }

studio_data.flashvars = {"error":"Could Not Create The Flashvars json. please stand by."};
    
var _ccad = null;

function proceedWithFullscreenStudio() {
    // These should be executed only when we are really ready to show the studio
    window.onbeforeunload = function(e) {
        var e = e || window.event;
        var msg = null;
        if (loadedFullscreenStudio && studioApiReady) {
            msg = 'You are about to lose all your unsaved changes in the studio.';
        }
        if (e && msg != null) {
            e.returnValue = msg;
        }

        if (msg != null) {
            return msg;
        }
    };

    $('div#studioBlock').css('height', '0px');
    $('#studio_holder').flash(studio_data);
    full_screen_studio();

    ajust_studio();
}


    var studioApiReady = false;
    var videoTutorial = null;

    function studioLoaded() {
        studioApiReady = true;
        $(document).trigger('studioApiReady');
    };
    $(document).ready(function() {
        if (enable_full_screen) {

            if (!true) {
                $('#studio_container').css('top', '0px');
            }
            $('#studio_container').show();
            $('.site-footer').hide();
            $('#studioBlock').css('height', '1800px');

            if (false) {
                checkCopyMovie('javascript:proceedWithFullscreenStudio()', '');
            } else if (false) {
                checkEditMovie('');
            } else {
                proceedWithFullscreenStudio();
            }

            $(window).on('resize', function() {
                ajust_studio();
            });
            $(window).on('studio_resized', function() {
                if (show_cc_ad) {
                    _ccad.refreshThumbs();
                }
            });

            if (studioApiReady) {
                var api = studioApi($('#studio_holder'));
                api.bindStudioEvents();
            }
            $('.ga-importer').prependTo($('#studio_container'));
        } else {
            $('#studioBlock').flash(studio_data);
        }
        // Video Tutorial
        videoTutorial = new VideoTutorial($("#video-tutorial"));
    })
    // restore studio when upsell overlay hidden
    .on('hidden', '#upsell-modal', function(e) {
        if ($(e.target).attr('id') == 'upsell-modal') {
            restoreStudio();
        }
    })
    .on('studioApiReady', function() {
        var api = studioApi($('#studio_holder'));
        api.bindStudioEvents();
    })
    jQuery("#previewPlayerContainer, #video-tutorial").hide();

    function initPreviewPlayer(dataXmlStr, startFrame) {
        savePreviewData(dataXmlStr);

        if (typeof startFrame == 'undefined') {
            startFrame = 1;
        } else {
            startFrame = Math.max(1, parseInt(startFrame));
        }

        previewSceen();
        jQuery("#previewPlayerContainer").show();

        createPreviewPlayer("playerdiv", {
            height: 360,
            width: 640,
            player_url: "https://josephcrosmanplays532.github.io/animation/877/player.swf",
            quality: "medium"
        }, {
            movieOwner: "", movieOwnerId: "", movieId: "", ut: "-1",
            movieLid: "8", movieTitle: "", movieDesc: "", userId: "", username: "", uemail: "",
            apiserver: "https://goanimate4schools.herokuapp.com/", thumbnailURL: "", copyable: "0", isPublished: "0", ctc: "go", tlang: "en_US", is_private_shared: "0",
            autostart: "1", appCode: "go", is_slideshow: "0", originalId: "0", is_emessage: "0", isEmbed: "0", refuser: "",
            utm_source: "", uid: "", isTemplate: "1", showButtons: "0", chain_mids: "", showshare: "0", averageRating: "",
                        s3base: "https://s3.amazonaws.com/fs.goanimate.com/",
                        ratingCount: "", fb_app_url: "https://goanimate4schools.herokuapp.com/", numContact: 0, isInitFromExternal: 1, storePath: "https://josephcrosmanplays532.github.io/store/50/<store>", clientThemePath: "https://josephcrosmanplays532.github.io/static/477/<client_theme>", animationPath: "https://josephcrosmanplays532.github.io/animation/877/",
            startFrame: startFrame
        });
    }
    function switchBackToStudio() {
        try {
            (jQuery("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
        } catch (err) {};
        jQuery("#previewPlayerContainer").hide();
        restoreStudio();
        document.getElementById("Studio").onExternalPreviewPlayerCancel();
    }
    function publishStudio() {
        try {
            (jQuery("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
        } catch (err) {};
        jQuery("#previewPlayerContainer").hide();
        restoreStudio();
        document.getElementById("Studio").onExternalPreviewPlayerPublish();
    }
    function exitStudio(share) {
        loadedFullscreenStudio = false;
    }

    VideoTutorial.tutorials.composition = {
        title: 'Composition Tutorial',
        wistiaId: 'nuy96pslyp',
    };
    VideoTutorial.tutorials.enterexit = {
        title: 'Enter and Exit Effects Tutorial',
        wistiaId: 'fvjsa3jnzc',
    }
</script>

<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script><style id="wistia_19_style" type="text/css" class="wistia_injected_style">
@font-face {
font-family: 'WistiaPlayerOverpassNumbers';
src: url(data:application/x-font-ttf;charset=utf-8;base64,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);
}
</style>
<footer class="site-footer hidden-print" style="display: none;">
    <div class="container">
        <div class="row site-footer-nav">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>About GoAnimate</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/about">Who We Are</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/contactus">Contact Us</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/video-maker-tips">Blog</a></li>
                        <li><a href="https://press.josephcrosmanplays532.github.io/">Press</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>GoAnimate Solutions</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://goanimateforschools.github.io/" target="_blank">GoAnimate for Schools</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Usage Guidelines</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/termsofuse">Terms of Service</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/privacy">Privacy Policy</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Getting Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://blog.goanimateforschools.com/">Educator Experiences</a></li>
                        <li><a href="https://josephcrosmanplays532.zendesk.github.io/hc/en-us">Help Center</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <div class="row site-footer-copyright">
            <div class="col-sm-6">
                <div class="site-footer-socials-container">
                    Follow us on:
                    <ul class="site-footer-socials clearfix">
                        <li><a class="facebook" href="https://www.facebook.com/GoAnimateInc">Facebook</a></li>
                        <li><a class="twitter" href="https://twitter.com/Go4Schools">Twitter</a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/company/goanimate">Linked In</a></li>
                        <li><a class="gplus" href="https://plus.google.com/+goanimate">Google+</a></li>
                        <li><a class="youtube" href="https://www.youtube.com/user/GoAnimate">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <img src="https://josephcrosmanplays532.github.io/static/477/go/img/footer/logo_amazon.png" alt="AWS Partner Network">
                    &nbsp;&nbsp;&nbsp;
                    GoAnimate © 2018
                </div>
            </div>
        </div>

    </div>
</footer>


<div id="studio_container" style="width: 1077px; height: 722px;"><div id="studio_holder" style="width: 1077px;"><object data="https://josephcrosmanplays532.github.io/scratch/<?php echo "v125"; ?>" type="application/x-shockwave-flash" id="Studio" width="100%" height="100%"><param name="align" value="middle"><param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="window"><param name="flashvars" value="error=Could not create the object file flashvars. please stand by."><param name="movie" value="https://josephcrosmanplays532.github.io/scratch/<?php echo "v125"; ?>"></object></div>
</div>

</body></html><?php echo ""; } elseif (isset($_GET["school"])) { echo ""?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//web.archive.org/web/20150705233804/https://d2qrjeyl4jwu9j.cloudfront.net/">

<title>GoAnimate for Schools</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="GoAnimate for Schools is a safe environment for students to fully express their creativity through video and a great place for educators to share educational videos with other educators worldwide.">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>


<link rel="stylesheet" href="//goanimateforschools.github.io/fonts/schoolfont.css">
<link rel="stylesheet" href="/static/2015/school/css/common_combined.css">

<link rel="stylesheet" href="/static/2015/school/css/public/index.css">
<link rel="stylesheet" href="/static/2015/school/css/owl.carousel.css">
<link rel="stylesheet" href="/static/2015/school/css/owl.theme.default.css">

<script>
var srv_tz_os = -4, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://d2qrjeyl4jwu9j.cloudfront.net/static/d84227639356b514/go/js/lib/html5shiv.js"></script>
<![endif]-->
<script src="/static/2015/school/js/common_combined.js"></script>
<script type="text/javascript" src="/static/2015/go/po/goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>
<script src="/static/2015/school/js/owl.carousel.min.js"></script>
  
<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2516970-15']);
_gaq.push(['_setDomainName', 'goanimate4schools.com']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
</head>
<body class="page-action-public_index">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<nav class="navbar site-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="?school" title="GoAnimate for Schools">
                <img alt="GoAnimate for Schools" src="/static/2015/school/img/site/logo4s.png">
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/public_signup">Pricing &amp; Signup</a></li>
                <li><a href="/login">Login</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Learning Center <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/teaching-with-video/">Blog</a></li>
                        <li><a href="/public_faq">FAQ</a></li>
                        <li><a href="https://goanimate4schools.zendesk.com/hc/en-us">Help Center</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="homepage-top">
    <div class="container">
        <h1 class="homepage-title">Make Animated Videos in the Classroom</h1>
        <p>Easy learning curve. Low budget. Simple do-it-yourself tools.</p>

        <div class="homepage-top-content">
            <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_top_cw.jpg" alt="">
            <a href="#" class="watch-demo" data-toggle="modal" data-target="#demo-video">Watch Demo &gt;</a>
        </div>
    </div>
</div>

<div class="homepage-secure">
    <div class="container">
        <h2 class="homepage-title">Create Videos in a Safe Online Environment</h2>
        <div class="row">
            <div class="col-md-6 col-lg-6 secure-wrapper">
                <div class="clearfix">
                    <div class="icon-block"><img class="icon-block-icon" src="/static/2015/school/img/homepage/img_secure_01.png" alt=""></div>
                    <h3>Privacy and Security</h3>
                    <p>Each implementation is its own private, secure "walled garden"</p>
                </div>
                <ul class="secure-content">
                    <li>Student videos cannot be accessed by the public</li>
                    <li>Student videos cannot be published publicly, without teacher approval</li>
                    <li>School login page can only be found by those who know the exact URL</li>
                    <li>Students cannot surf public video sites from within GoAnimate for Schools</li>
                    <li>No integration with social networks</li>
                    <li>Student email addresses and contact info are never collected</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-6 secure-wrapper">
                <div class="clearfix">
                    <div class="icon-block"><img class="icon-block-icon" src="/static/2015/school/img/homepage/img_secure_02.png" alt=""></div>
                    <h3>Group Management</h3>
                    <p>Segment your students into classes and workgroups</p>
                </div>
                <ul class="secure-content">
                    <li>Teachers can divide students into classes and/or workgroups</li>
                    <li>Student video distribution is limited to the classes/groups to which they belong</li>
                    <li>Great way to block younger students from seeing the videos of older students</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-6 secure-wrapper">
                <div class="clearfix">
                    <div class="icon-block"><img class="icon-block-icon" src="/static/2015/school/img/homepage/img_secure_03.png" alt=""></div>
                    <h3>Moderation</h3>
                    <p>Stop bad words in their tracks</p>
                </div>
                <ul class="secure-content">
                    <li>Teachers have the option to moderate student videos before the videos become visible to the group</li>
                    <li>Teachers can approve or reject student-created videos and comments</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-6 secure-wrapper">
                <div class="clearfix">
                    <div class="icon-block"><img class="icon-block-icon" src="/static/2015/school/img/homepage/img_secure_04.png" alt=""></div>
                    <h3>Safe Online Content</h3>
                    <p>All assets have been scrubbed to be appropriate for a student audience</p>
                </div>
                <ul class="secure-content">
                    <li>We have ensured that all characters, backgrounds, props, etc. are appropriate for a K-12 audience</li>
                    <li>You won't find "assets" like weapons, alcohol, or violent actions in GoAnimate for Schools</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="homepage-videomaker">
    <div class="container">
        <h2 class="homepage-title">Powerful Tools at the Click of a Mouse</h2>
        <p>Add a character, swap a background, or start a scene just by dragging and dropping.</p>

        <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_videomaker_cw.jpg" alt="">
    </div>
</div>

<div class="homepage-characters">
    <div class="container">
        <div class="content">
            <div class="oc-picker owl-carousel">
                <div class="bg-orange">
                    <h2 class="homepage-title">Characters With All the Right Moves</h2>
                    <p>Our libraries are filled with styles, settings, props, and actions. Lip sync is automatic!</p>

                    <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_slide_ce662a.jpg" width="1060" alt="">
                </div>
                <div class="bg-khaki">
                    <h2 class="homepage-title">Characters With All the Right Moves</h2>
                    <p>Our libraries are filled with styles, settings, props, and actions. Lip sync is automatic!</p>

                    <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_slide_dfcc9e.jpg" width="1060" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('.oc-picker').owlCarousel({
            autoplay: true,
            loop: true,
            center: true,
            items: 1,
            autoplaySpeed: 3000,
            smartSpeed: 2500,
        })
    });
</script>

<div class="homepage-usage">
    <div class="container">
        <h2 class="homepage-title">Videos for a Wide Range of Uses</h2>
        <p>GoAnimate for Schools is used by hundreds of thousands of students, in thousands of schools, on 6 continents.</p>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_01.png" alt="">
                <h4>Flip Your Classroom By Sending Home Videos</h4>
                <p>In a flipped classroom, students learn through online instruction outside of class; “homework” is done in the classroom. Students are much more likely to watch or create a video at home than they are to read a textbook or write a paper.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_02.png" alt="">
                <h4>Introduce Topics and Lessons</h4>
                <p>Teach new and difficult topics with video. Use animation to simplify complex ideas. Illustrate word problems.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_03.png" alt="">
                <h4>Create Presentations</h4>
                <p>Use video at open houses, back-to-school nights, assemblies, staff meetings, and other events.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_07.png" alt="">
                <h4>Create Reports and Stories</h4>
                <p>Have students make reports, presentations, and stories with video, helping them convey their creativity and perspectives without physically placing them in front of peers.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_05.png" alt="">
                <h4>Check for Understanding</h4>
                <p>Teachers can “check for understanding” with video assignments.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_04.png" alt="">
                <h4>Engage Special Needs Students</h4>
                <p>Students on the Autism spectrum find animated videos to be a great way to communicate and share their feelings.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_06.png" alt="">
                <h4>Practice Language Skills</h4>
                <p>Practice grammar, spelling, foreign languages, and sentence structure with our text-to-speech technology. Great for language learners!</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_08.png" alt="">
                <h4>Produce PSAs</h4>
                <p>Students can create videos on respect, bullying, and a variety of other topics.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 usage-wrapper">
                <img class="img-responsive center-block" src="/static/2015/school/img/homepage/img_use_09.png" alt="">
                <h4>Engage Higher-Order Learning Skills</h4>
                <p>Adapting material to video requires both critical thinking AND creativity. Students are enthusiastic about making videos. They think it’s fun. This also leads to deeper understanding and learning.</p>
            </div>
        </div>
    </div>
</div>

<div class="homepage-signup">
    <div class="container">
        <span class="cta">Make your first video in less than 5 Minutes</span>
        <a href="/public_signup" class="btn btn-xlg btn-orange">Pricing &amp; Signup</a>
    </div>
</div>

<div class="modal" id="demo-video">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">GoAnimate for Schools</h4>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9"></div>
            </div>
        </div>
    </div>
</div>

<script>
$('#demo-video').on('show.bs.modal', function(e) {
    $(this).find('.embed-responsive').html('<iframe class="embed-responsive-item" allowfullscreen src="//fast.wistia.com/embed/iframe/kbnndqwniy?autoPlay=1"></iframe>');
}).on('hide.bs.modal', function(e) {
    $(this).find('.embed-responsive').empty();
});
</script>

<footer class="site-footer hidden-print">
    <div class="container">
        <div class="row site-footer-nav">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>About GoAnimate</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://josephcrosmanplays532.github.io/about">Who We Are</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/contactus">Contact Us</a></li>
                        <li><a href="https://josephcrosmanplays532.github.io/video-maker-tips">Blog</a></li>
                        <li><a href="https://josephcrosmanplays.wordpress.com/2021/9/22">Press</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>GoAnimate Solutions</h5>
                    <ul class="list-unstyled">
                        <li><a href="?school" target="_blank">GoAnimate for Schools</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Usage Guidelines</h5>
                    <ul class="list-unstyled">
                        <li><a href="/termsofuse">Terms of Service</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Getting Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="/teaching-with-video/">Educator Experiences</a></li>
                        <li><a href="https://goanimate4schools.zendesk.com/hc/en-us">Help Center</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row site-footer-copyright">
            <div class="col-sm-6">
                <div class="site-footer-socials-container">
                    Follow us on:
                    <ul class="site-footer-socials clearfix">
                        <li><a class="facebook" href="https://www.facebook.com/GoAnimateInc">Facebook</a></li>
                        <li><a class="twitter" href="https://twitter.com/Go4Schools">Twitter</a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/company/goanimate">Linked In</a></li>
                        <li><a class="youtube" href="https://www.youtube.com/user/GoAnimate">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <img src="/static/2015/school/img/site/logo_norton.png" alt="Norton Secured"/>
                    <img src="/static/2015/school/img/site/logo_amazon.png" alt="AWS Partner Network"/>
                    &nbsp;&nbsp;&nbsp;
                    GoAnimate &copy; 2014
                </div>
            </div>
        </div>

    </div>
</footer>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            This content requires the Adobe Flash Player 10.3. <a href="https://get.adobe.com/flashplayer/">Get Flash</a>
        </div>
    </div>
</div>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/491659.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

</body>
</html><?php echo ""; } elseif (isset($_SESSION['login'])) { echo "Redirecting <img src=\"https://josephcrosmanplays532.github.io/static/477/go/img/dashboard/loading.gif\">"; } else { echo '<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Roboto:wght@500&display=swap&family=Imprima&display=swap" rel="stylesheet">
<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta name="google-site-verification" content="-4jw5FxaTfg7Zp_K7NihHSxcCq-xrsqaIbXtrLjI1ag">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="alternate" type="application/rss+xml" title="NorthPoleTimes RSS Feed" href="/RSS/">




<meta name="keywords" content="north pole santa, santa north pole, where does santa live, Christmas, santa claus elf, santa claus, santa clause, holiday dessert recipes, coloring book, 
cookie recipes, santa, santa\'s list, santa\'s naughty list, naughty and nice list, naughty or nice, claus, north pole, reindeer, 
rudolph the red nose reindeer, reindeer games, kids Christmas website, free Christmas website, Christmas crafts for kids, santas reindeer, reindeer barn,
email santa, mrs claus, mrs claus\' kitchen, holidays,toys,christmas recipes,christmas traditions,christmas carols,christmas songs, greeting cards,christmas cards,
christmas tree,christmas gifts,gifts, christmas music,karaoke,christmas decorations,christmas ornaments, christmas customs,christmas games,christmas crafts, elves,
north pole news, santa news, north pole update, santa update, daily news from the north pole, super secret sundays, terrific task tuesdays, editorial wednesdays,
franny fridays, saturday school of wonders, elf academy"> 
<meta name="description" content="News from The North Pole | The North Pole Times - #1 in Santa\'s News! Trusted Worldwide!">
<link rel="shortcut icon" href="/images/favicon.ico" >
<meta name="copyright" content="Copyright Â©1995 - 2021 North Pole Times">
<meta name="author" content="North Pole Times">
<meta name="owner" content="North Pole Times">
<meta name="distribution" content="global">
<meta name="Robots" content="index, follow">

<meta property="og:url" content="https://www.northpoletimes.com/index.cfm">
<meta property="og:type" content="article">
<meta property="og:title" content="Santa Claus News | The North Pole Times">
<meta property="og:description" content="News from The North Pole | The North Pole Times - #1 in Santa\'s News! Trusted Worldwide!">
<meta property="og:image" content="https://www.NorthPoleTimes.com/images/OG_Image.jpg">
<meta property="og:site_name" content="www.NorthPoleTimes.com" />   
  
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@NorthPoleTimes">
<meta name="twitter:title" content="Santa Claus News | The North Pole Times">
<meta name="twitter:description" content="News from The North Pole | The North Pole Times - #1 in Santa\'s News! Trusted Worldwide!">
<meta name="twitter:image" content="https://www.NorthPoleTimes.com/images/OG_Image.jpg">
<meta name="twitter:image:alt" content="[The North Pole Times]">
<meta name="wot-verification" content="7d1f5cb1fab8a7cd969c">
<meta name="alexaVerifyID" content="gDmzcMRQWdWBG-UakwvyXAxYV5Y">
<meta name="alexaVerifyID" content="NaFiHjE7WW73phd-EV9mnufiQn0">


<!--     *.*.*.*.*     WARNING     *.*.*.*.*            -->

<!-- DO NOT COPY ANY IMAGES ON THIS SITE FOR ANY REASON -->

<!--     *.*.*.*.*     WARNING     *.*.*.*.*            -->

<!-- Welcome to the NorthPoleTimes.com source code! 
     Copyright (c) 1995-2021 by The North Pole Times(sm).
     All rights reserved!
      
Content developed for this web site, including source code, may not be used, modified, 
or reproduced in any form without the expressed written consent of Mark J. Rossney, 
and the North Pole Times(sm), unless otherwise stated. 
By using this site, you signify your agreement to these terms. 
If you do not agree to these terms, you must not use the site. 

LD_20011110
V2_20021128(Richard Walsh)
V3_20171123 (Margaret Phillips)
V4_20190119 (Margaret Phillips - RESPONSIVE)
-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.northpoletimes.com/css/custom-styles-2-min.css" type="text/css">



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
   

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
 







<script async src="https://www.googletagmanager.com/gtag/js?id=UA-19747802-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-19747802-1\');
</script>







<title>Santa Claus News | The North Pole Times</title>

</head>
	
	<!-- END TOP -->  


<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsMediaOrganization",
  "name": "North Pole Times",
  "alternateName": "Santa\'s News from the North Pole",
  "url": "https://www.NorthPoleTimes.com",
  "logo":"https://www.NorthPoleTimes.com/images/logo_940px_village_LowRes.jpg",
  "sameAs": [
    "https://www.Facebook.com/NorthPoleTimes",
    "https://twitter.com/NorthPoleTimes",
    "https://plus.google.com/b/107221342074673825161/communities/111070093359175296879",
    "https://www.pinterest.com/northpoletimes/"
  ]
}
</script>
 

<div class="container-fluid container-maxWidth"> <!-- MAIN CONTAINER -->
	<div class="row"> <!-- NAV ROW -->
    	<div class="col text-center">
    		
<script>
	$(document).ready(function () 
	{ $(window).scroll(function () { if ($(document).scrollTop() > 50) 
	{ $("nav").addClass("scrolled"); } else { $("nav").removeClass("scrolled"); } }); });
</script>


<script>
	$(document).ready(function () {
	  $(\'.first-button\').on(\'click\', function () {
		$(\'.animated-icon1\').toggleClass(\'open\');
	  });
	});
	
	$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $(\'nav\').addClass(\'shrink\');
    $(\'.add\').hide();
  } else {
    $(\'nav\').removeClass(\'shrink\');
    $(\'.add\').show();
    
  }
});
</script>


<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	<a class="navbar-brand" href="/">
	<img class="img-fluid" alt="[North Pole Times]" src="https://www.northpoletimes.com/images/hdr.png" width="400" height="68">
	</a>
<!-- animated toggler -->	  	
	<button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
            aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
      <div class="animated-icon1"><span></span><span></span><span></span></div>
    </button>

	<div class="collapse navbar-collapse text-left" id="navbarSupportedContent20">
		<ul class="navbar-nav mx-auto">
<!-- news -->		
			<li class="nav-item dropdown nav-item-pad nav-li">
				<div class="row"><div class="col text-center">
					<a class="nav-link dropdown-toggle" href="" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-newspaper faIcon"></i><br>News</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown10">
						<a class="dropdown-item" href="https://www.northpoletimes.com/">News Stories</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/ReindeerGames/">Reindeer Games</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/TerrificTaskTuesdays/">Terrific Task Tuesdays</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/EDitorials/">wEDnesday EDitorials</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/FrannyFridays/">Fly-About Franny Fridays</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/SaturdaySchoolOfWonders/">Saturday School of Wonders</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/SuperSecretSundays/">Super Secret Sundays</a>
					</div>
				</div></div>
			</li>
<!-- post office -->		
			<li class="nav-item dropdown nav-item-pad nav-li">
				<div class="row"><div class="col text-center">
					<a class="nav-link dropdown-toggle" href="" id="dropdown11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-envelope faIcon"></i><br>Post Office</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown11">
						<a class="dropdown-item" href="https://www.northpoletimes.com/PostOffice/">Email Santa!</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/PostOffice/GetMail.cfm">Get Email From Santa</a>
						<a class="dropdown-item" href="https://www.northpoletimes.com/PostOffice/WishList.cfm">Change Your Wish List</a>
					</div>
				</div></div>
			</li>
<!-- kitchen -->
			<li class="nav-item nav-item-pad nav-li">
				<div class="row"><div class="col text-center">              
					<a href="https://www.northpoletimes.com/MrsClausKitchen/" class="nav-link " title="Mrs. Claus\' Kitchen"><i class="fas fa-utensils faIcon"></i><br>Kitchen</a>
				</div></div>
			</li>		
<!-- games -->
			<li class="nav-item dropdown nav-item-pad nav-li">
				<div class="row"><div class="col text-center">
            	<a class="nav-link dropdown-toggle" href="" id="dropdown13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-gamepad faIcon"></i><br>Games</a>
              	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown13">
					<a class="dropdown-item" href="https://www.northpoletimes.com/Games/">Santa\'s Game Arcade</a>
					<a class="dropdown-item" href="https://www.northpoletimes.com/WordSearch/">Word Search Puzzles</a>    
					<a class="dropdown-item" href="https://www.northpoletimes.com/Crossword-Puzzles/">Crossword Puzzles</a> 
					<a class="dropdown-item" href="https://www.northpoletimes.com/Christmas-Mazes/">Christmas Mazes</a>                
					<a class="dropdown-item" href="https://www.northpoletimes.com/Coloring-Pages/">Coloring Book</a>
              	</div>
              	</div></div>
            </li>
<!-- craft room -->
			<li class="nav-item nav-item-pad nav-li"> 
				<div class="row"><div class="col text-center">
					<a class="nav-link" href="https://www.northpoletimes.com/Workshop/"><i class="fas fa-cut faIcon"></i><br>Crafts</a>
            	</div></div>
            </li>
<!-- gift ideas -->
			<li class="nav-item nav-item-pad nav-li">
				<div class="row"><div class="col text-center">
					<a class="nav-link" href="https://www.northpoletimes.com/Gift-Ideas/"><i class="fas fa-gift faIcon"></i><br>Gift Ideas</a>
            	</div></div>
            </li>
<!-- NN list -->
			<li class="nav-item nav-item-pad nav-li">
				<div class="row"><div class="col text-center">              
              		<a href="https://www.northpoletimes.com/NaughtyOrNice/" class="nav-link " title="Naughty or Nice List"><i class="fas fa-scroll faIcon"></i><br>Naughty or Nice</a>
            	</div></div>            
            </li>          
<!-- story room -->
			<li class="nav-item nav-item-pad nav-li">  
				<div class="row"><div class="col text-center">            
              		<a href="https://www.northpoletimes.com/StoryRoom/" class="nav-link" title="Santa\'s Story Room"><i class="fas fa-book-reader text-center faIcon"></i><br>Story Room</a>
            	</div></div>
            </li>           
<!-- more -->
			<li class="nav-item dropdown nav-item-pad nav-li">
				<div class="row"><div class="col text-center">
					<a class="nav-link dropdown-toggle" href="" id="dropdown14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sleigh faIcon"></i><br>More</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown14">               
						<a href="https://www.northpoletimes.com/ReindeerBarn/" class="dropdown-item">Santa\'s Reindeer Barn</a>
						<a href="https://www.northpoletimes.com/Newsroom/" class="dropdown-item">Newsroom Staff Bios</a> 
						<a href="https://www.northpoletimes.com/Santas-Rules/" class="dropdown-item">Santa\'s Rules</a>            
					</div>
				</div></div>
			</li>           

		</ul>
	</div>
</nav>
<div class="mb-1"><br></div><!-- do this on the hdr --> 
    	</div>
  	</div> <!-- END NAV ROW -->
  	<div class="row"> <!-- HDR ROW -->
    	<div class="col text-center">
    	  
<div class="row justify-content-center mt-5"> 
	<div class="col-12 text-center" > 
		<a href="https://www.northpoletimes.com/"><img alt="[The North Pole Times]" src="https://www.northpoletimes.com/images/logo_940px_village_LowRes.jpg" width="938" height="172" class="img-fluid mt-3 mb-3"></a>
	</div>
</div>
		
<div class="container">		
	<div class="row"> 
		<div class="p-0 d-none  d-sm-none d-md-inline d-lg-inline  col-md-4   col-lg-4  float-left Hdr_row">
			<img src="https://www.northpoletimes.com/images/hdr_MCMXCV.jpg" alt="[1995]" width="62" height="14" class="img-fluid mb-1">
		</div>
		<div class="p-0 d-none  d-sm-none d-md-inline d-lg-inline  col-md-4   col-lg-4  Hdr_row">
			<img src="https://www.northpoletimes.com/images/hdr_SantasOfficialNewsSource.jpg" width="259" height="14" alt="[Santa\'s OFFICIAL News Source]" class="img-fluid mb-1">
		</div>
		<div class="p-0 col-xs-12 col-sm-12 col-md-4 col-lg-4 date Hdr_row">
			<div class="date">Tuesday December 14, 2021&nbsp;&nbsp;&nbsp;&nbsp;</div>
		</div>
	</div> 
</div>

<!-- END BREAKING NEWS -->
    	</div>
  	</div> <!-- END HDR ROW -->

	
	
	<div class="row mt-4 justify-content-center"> 
		<div class="col-11 roundedCornersContainer text-center">
			<div class="row justify-content-center">
			
			
			
			
			
				
				<div class="mt-2 mb-2 col-sm-12 order-sm-2 col-md-12 col-lg-3 order-lg-1 text-center RT_ColRtBorder">
					
	

<!-- news -->
		
		<div class="row justify-content-center grow">
			<div class="col-5 text-center my-auto pt-2">
				<a href="https://www.northpoletimes.com/MrsClausKitchen/"><img src="https://www.northpoletimes.com/images_story/Elf_MrsClaus.jpg" class="img-fluid" width="100" height="100" alt="[Mrs Claus]"></a>
			</div>
			<div class="col-7 text-left my-auto CraftKidGreen">
				Christmas Cookies
			</div>
		</div>		
		 <div class="row justify-content-center">  
			<div class="col-10 text-right NPH3">
				<a href="https://www.northpoletimes.com/MrsClausKitchen/">by Mrs Claus</a>
			</div>
		</div>
		<div class="row justify-content-center">  
			<div class="col-10 text-center">
				<hr class="CandyCane">
			</div>
		</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/White-Chocolate-Chip-Macadamia-Cookies" class="shortmenu">White Chocolate Chip Macadamia Cookies</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Here\'s a cookie recipe you\'ll go "Nuts" over.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Thumbprint-Cookies" class="shortmenu">Thumbprint Cookies</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					These tasty little treats are sure to please the most discerning of your guests.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Sugar-Cookies" class="shortmenu">Sugar Cookies</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Toss a plate of these on the table and watch them disappear right before your very eyes.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Spicy-Gingerbread-Cookies" class="shortmenu">Spicy Gingerbread Cookies</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					These Spicy Gingerbread Cookies have a bold flavor that\'s sure to tantalize your taste buds.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Snowball-Cookies" class="shortmenu">Snowball Cookies</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Here\'s another favorite of the Elves. We think you will enjoy them too.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
		<div class="row justify-content-center grow">
			<div class="col-5 text-center my-auto pt-2">
				<a href="https://www.northpoletimes.com/MrsClausKitchen/"><img src="https://www.northpoletimes.com/images_story/Elf_MrsClaus.jpg" class="img-fluid" width="100" height="100" alt="[Mrs Claus]"></a>
			</div>
			<div class="col-7 text-left my-auto CraftKidGreen">
				Holiday Appetizers
			</div>
		</div>		
		 <div class="row justify-content-center">  
			<div class="col-10 text-right NPH3">
				<a href="https://www.northpoletimes.com/MrsClausKitchen/">by Mrs Claus</a>
			</div>
		</div>
		<div class="row justify-content-center">  
			<div class="col-10 text-center">
				<hr class="CandyCane">
			</div>
		</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Spice-Butter-Roasted-Chestnuts" class="shortmenu">Spice Butter Roasted Chestnuts</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					These roasted chestnuts will make Jack Frost nip at his own nose.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Snow-Crab-Claws-with-Cilantro-Aiol" class="shortmenu">Snow Crab Claws with Cilantro Aiol</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					A decadent treat for the seafood lover, straight from the Arctic. 
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Mini-Bacon-Wrapped-Sausages" class="shortmenu">Mini Bacon-Wrapped Sausages</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Who doesn\'t like bacon? These smoky sausage bites burst with flavor. 
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Mince-Nuggets" class="shortmenu">Mince Nuggets</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Here\'s a little something you just might enjoy!
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Marinated-Cheese,-Tomato-and-Olive" class="shortmenu">Marinated Cheese, Tomato and Olive</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Put these little treats on the table at your holiday party and watch them disappear before your very eyes!
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
		<div class="row justify-content-center">
			<div class="col-5 text-center my-auto pt-2">
				<a href="https://www.northpoletimes.com/MrsClausKitchen/"><img src="https://www.northpoletimes.com/images_story/Elf_MrsClaus.jpg" class="img-fluid" width="100" height="100" alt="[Mrs Claus]"></a>
			</div>
			<div class="col-7 text-left my-auto CraftKidGreen">
				Holiday Sweets & Treats
			</div>
		</div>		
		 <div class="row justify-content-center">  
			<div class="col-10 text-right NPH3">
				<a href="https://www.northpoletimes.com/MrsClausKitchen/">by Mrs Claus</a>
			</div>
		</div>
		<div class="row justify-content-center">  
			<div class="col-10 text-center">
				<hr class="CandyCane">
			</div>
		</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Tiny-Tims-Holiday-Pudding" class="shortmenu">Tiny Tim\'s Holiday Pudding</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Now is the time to prepare your Christmas puddings. This is a traditional
English recipe.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Papa’s-Peanut-Brittle" class="shortmenu">Papa’s Peanut Brittle</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					A favorite holiday treat in Papa Dean\'s house. Perfect for snacking while watching your favorite Christmas movie.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Old-Fashioned-Cranberry-Sauce" class="shortmenu">Old Fashioned Cranberry Sauce</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					This old fashioned cranberry sauce will remind you of Grandma\'s cooking. The flavor is sweet with a touch of fresh berry tartness. And the added cinnamon and cloves is sure to make this one of your holiday favorites.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Old-Fashioned-Christmas-Popcorn" class="shortmenu">Old Fashioned Christmas Popcorn</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Just a fun treat for the holidays. Perfect for snacking, gift giving and get togethers.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					<a href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Ice-Cream-Snowman-Surprise" class="shortmenu">Ice Cream Snowman Surprise</a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 CraftText text-left">
					Here\'s a fun treat that all the Elves like to make for dessert.
				</div>
			</div>
			 <div class="row justify-content-center">  
				<div class="col-10 text-center">
					<hr class="CandyCane">
				</div>
			</div>
		
				</div>
				

				
					<div class="mb-2 col-sm-12 order-sm-1 col-md-12 col-lg-6 order-lg-2 text-center order-first">
						<div class="row justify-content-center mt-2">
							<div class="col-12">
								<a href="https://www.northpoletimes.com/story/Back-to-Santa’s-Village" class="shortmenu"><img src="https://www.northpoletimes.com/images_story/12_14_2021_LG.jpg" alt="[Back to Santa’s Village]" width="800" height="282" class="StoryImage_Border img-fluid d-block mx-auto"></a>
							</div>
						</div>
						<div class="row justify-content-center mt-3">
							<div class="col-12 text-left">
								<a href="https://www.northpoletimes.com/story/Back-to-Santa’s-Village" class="shortmenu"><h1>Back to Santa’s Village</h1></a>
							</div>
						</div>
						<div class="row justify-content-center mb-2">
							<div class="col-12 text-left newscopy">
							<h2>One-Horned Reindeer</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-12 newscopy text-left">
								<p>The chubby fella with one horn took off and flew so high that the elves could no longer see him.</p>

							</div>
						</div>


												<div class="row justify-content-center">
							<div class="col-xs-7 col-sm-7 col-md-6 mt-5">
								
	<div class="container homepage-top-stories-container p-0">
		<div class="row justify-content-center">
			<div class="col-12  text-center">
				<a href="https://www.northpoletimes.com/story/Reindeer-Skate-in-Semifinal-Round"><img src="https://www.northpoletimes.com/images_story/11_12_14_RG_b.jpg" alt="[Reindeer Skate in Semifinal Round]" width="287" height="201" class="doubleBorderGreen img-fluid"></a>
			
				
					<div class="top-left-new-today">NEW TODAY</div> 
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-left mt-1 ml-1">
				<a href="https://www.northpoletimes.com/story/Reindeer-Skate-in-Semifinal-Round" class="shortmenu">Reindeer Skate in Semifinal Round</a>
			</div>
		</div>
	</div>

							</div>
							<div class="col-xs-7 col-sm-7 col-md-6 mt-5">
								
	<div class="container homepage-top-stories-container p-0">
		<div class="row justify-content-center">
			<div class="col-12  text-center">
				<a href="https://www.northpoletimes.com/story/Time-flies-when-youre"><img src="https://www.northpoletimes.com/images_story/12_14_2020_TT_SM.jpg" width="287" height="201" alt="[ Time flies when you\'re...]" class="doubleBorderGreen img-fluid"></a>
			
				
					<div class="top-left-new-today">NEW TODAY</div> 
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-left mt-1 ml-1">
				<a href="https://www.northpoletimes.com/story/Time-flies-when-youre" class="shortmenu"> Time flies when you\'re...</a>
			</div>
		</div>
	</div>

							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-xs-7 col-sm-7 col-md-6 mt-5">
								
	<div class="container homepage-top-stories-container p-0">
		<div class="row justify-content-center">
			<div class="col-12  text-center">
				<a href="https://www.northpoletimes.com/story/KA-BAM-KA-PLOW-KA-BOOM"><img src="https://www.northpoletimes.com/images_story/12_12_2021_SS_SM.jpg" width="287" height="201" alt="[KA-BAM! KA-PLOW! KA-BOOM!]" class="doubleBorderGreen img-fluid"></a>
			
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-left mt-1 ml-1">
				<a href="https://www.northpoletimes.com/story/KA-BAM-KA-PLOW-KA-BOOM" class="shortmenu">KA-BAM! KA-PLOW! KA-BOOM!</a>
			</div>
		</div>
	</div>

							</div>
							<div class="col-xs-7 col-sm-7 col-md-6 mt-5">
								
	<div class="container homepage-top-stories-container p-0">
		<div class="row justify-content-center">
			<div class="col-12  text-center">
				<a href="https://www.northpoletimes.com/story/Creating-a-Gift-with-Words"><img src="https://www.northpoletimes.com/images_story/11_12_10_SW_b.jpg" width="287" height="201" alt="[Creating a Gift with Words]" class="doubleBorderGreen img-fluid"></a>
		
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-left mt-1 ml-1">
				<a href="https://www.northpoletimes.com/story/Creating-a-Gift-with-Words" class="shortmenu">Creating a Gift with Words</a>
			</div>
		</div>
	</div>

							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-xs-7 col-sm-7 col-md-6 mt-5">
								
	<div class="container homepage-top-stories-container p-0">
		<div class="row justify-content-center">
			<div class="col-12  text-center">
				<a href="https://www.northpoletimes.com/story/Christmas-in-New-Zealand"><img src="https://www.northpoletimes.com/images_story/12_10_2021_FF_SM.jpg" width="287" height="201" alt="[Christmas in New Zealand]" class="doubleBorderGreen img-fluid"></a>
			
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-left mt-1 ml-1">
				<a href="https://www.northpoletimes.com/story/Christmas-in-New-Zealand" class="shortmenu">Christmas in New Zealand</a>
			</div>
		</div>
	</div>

							</div>
							<div class="col-xs-7 col-sm-7 col-md-6 mt-5">
								
	<div class="container homepage-top-stories-container p-0">
		<div class="row justify-content-center">
			<div class="col-12  text-center">
				<a href="https://www.northpoletimes.com/story/Holiday-Traditions"><img src="/images_story/12_08_2021_ED_SM.jpg" width="287" height="201" alt="[Holiday Traditions]" class="doubleBorderGreen img-fluid"></a>
			
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 text-left mt-1 ml-1">
				<a href="https://www.northpoletimes.com/story/Holiday-Traditions" class="shortmenu">Holiday Traditions</a>
			</div>
		</div>
	</div>

							</div>
						</div> 
						 <div class="row justify-content-center mb-3">  
							<div class="col-10 text-center">
								<hr class="CandyCane">
							</div>
						</div>
					
						


	<div class="row justify-content-center mb-3">
		<div class="col-12 text-center CraftKidGreen">
			-- More News --
		</div>
	</div>

	
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/You-Little-Boogerwig"><img src="https://www.northpoletimes.com/images_story/12_13_2021_SM.jpg" alt="[You Little Boogerwig!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="/story/You-Little-Boogerwig" class="shortmenu">You Little Boogerwig!</a>
						
						<div class="PublishDate">Published Monday December 13, 2021</div> 
						<p>
						<p>It&rsquo;s not too late! You CAN help save Christmas!</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Did-Santa-Take-Boogerwig’s-Family"><img src="https://www.northpoletimes.com/images_story/12_12_2021_SM.jpg" alt="[Did Santa Take Boogerwig’s Family?]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Did-Santa-Take-Boogerwig’s-Family" class="shortmenu">Did Santa Take Boogerwig’s Family?</a>
						
						<div class="PublishDate">Published Sunday December 12, 2021</div> 
						<p>
						<p>Long, long ago, before we settled at the North Pole...</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Don’t-jump-to-conclusions"><img src="https://www.northpoletimes.com/images_story/12_11_2021_SM.jpg" alt="[Don’t jump to conclusions!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Don’t-jump-to-conclusions" class="shortmenu">Don’t jump to conclusions!</a>
						
						<div class="PublishDate">Published Saturday December 11, 2021</div> 
						<p>
						<p>Little Boogerwig got mad, Really mad&hellip; I mean REALLY, REALLY mad.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Santa-Took-Me-Family"><img src="https://www.northpoletimes.com/images_story/12_10_2021_SM.jpg" alt="[Santa Took Me Family!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Santa-Took-Me-Family" class="shortmenu">Santa Took Me Family!</a>
						
						<div class="PublishDate">Published Friday December 10, 2021</div> 
						<p>
						<p>After talking with Boogerwig, the elves learned that he hates them and Christmas too. What they didn&rsquo;t understand was why.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/The-Elves-Finally-Found-it"><img src="https://www.northpoletimes.com/images_story/12_09_2021_SM.jpg" alt="[The Elves Finally Found it!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/The-Elves-Finally-Found-it" class="shortmenu">The Elves Finally Found it!</a>
						
						<div class="PublishDate">Published Thursday December 09, 2021</div> 
						<p>
						<p>&ldquo;It is I, Boogerwig, the most meanest of all mean meanies ever!&rdquo;</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Now-Waldo-Is-gone"><img src="https://www.northpoletimes.com/images_story/12_08_2021_SM.jpg" alt="[Now Waldo Is gone!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Now-Waldo-Is-gone" class="shortmenu">Now Waldo Is gone!</a>
						
						<div class="PublishDate">Published Wednesday December 08, 2021</div> 
						<p>
						<p>The elves heard the sound of footsteps echoing off the walls. Someone&nbsp;or something was there.&nbsp;</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Where-is-Mikee"><img src="https://www.northpoletimes.com/images_story/12_07_2021_SM.jpg" alt="[Where is Mikee?!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Where-is-Mikee" class="shortmenu">Where is Mikee?!</a>
						
						<div class="PublishDate">Published Tuesday December 07, 2021</div> 
						<p>
						<p>The elves entered the spooky castle and started the quest for the meanie.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Oh-Boogerwig"><img src="https://www.northpoletimes.com/images_story/12_06_2021_SM.jpg" alt="[Oh Boogerwig!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Oh-Boogerwig" class="shortmenu">Oh Boogerwig!</a>
						
						<div class="PublishDate">Published Monday December 06, 2021</div> 
						<p>
						<p>The elves were moving slowly towards the dark castle with one thing in mind &ndash; save Christmas.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Elvish-Language-Formatter---ELF"><img src="https://www.northpoletimes.com/images_story/12_05_2021_SM.jpg" alt="[Elvish Language Formatter - E.L.F.]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Elvish-Language-Formatter---ELF" class="shortmenu">Elvish Language Formatter - E.L.F.</a>
						
						<div class="PublishDate">Published Sunday December 05, 2021</div> 
						<p>
						<p>&ldquo;Let&rsquo;s see. If I just cross-connect the wire from the who-ja-ba to the whatcha-callit and then bridge it to the flex-transistor&hellip;&rdquo;&nbsp;</p>

						
					</div>
				</div>
				
				
				<div id="collapse-news" class="collapse-inline collapse">
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Open-Almighty-Gate"><img src="https://www.northpoletimes.com/images_story/12_04_2021_SM.jpg" alt="[Open Almighty Gate!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Open-Almighty-Gate" class="shortmenu">Open Almighty Gate!</a>
						
						<div class="PublishDate">Published Saturday December 04, 2021</div> 
						<p>
						<p>We need to find a way to open the gate if we&rsquo;re to have any hope of saving Christmas.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/You-ain’t-no-Fish"><img src="https://www.northpoletimes.com/images_story/12_03_2021_SM.jpg" alt="[You ain’t no Fish!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/You-ain’t-no-Fish" class="shortmenu">You ain’t no Fish!</a>
						
						<div class="PublishDate">Published Friday December 03, 2021</div> 
						<p>
						<p>Gotta be careful on this one; I&rsquo;ve heard talk on that castle.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Lake-of-Unfrozen-Waters"><img src="https://www.northpoletimes.com/images_story/12_02_2021_SM.jpg" alt="[Lake of Unfrozen Waters]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Lake-of-Unfrozen-Waters" class="shortmenu">Lake of Unfrozen Waters</a>
						
						<div class="PublishDate">Published Thursday December 02, 2021</div> 
						<p>
						<p>I&rsquo;ve not heard of the elvish creature you speak of.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Mikee’s-in-Danger"><img src="/images_story/12_01_2021_SM.jpg" alt="[Mikee’s in Danger!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Mikee’s-in-Danger" class="shortmenu">Mikee’s in Danger!</a>
						
						<div class="PublishDate">Published Wednesday December 01, 2021</div> 
						<p>
						<p>The three elves turned around to see a huge wall of white headed straight for them.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/The-Snow-Fairy-might-help-you"><img src="https://www.northpoletimes.com/images_story/11_30_2021_SM.jpg" alt="[The Snow Fairy might help you]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/The-Snow-Fairy-might-help-you" class="shortmenu">The Snow Fairy might help you</a>
						
						<div class="PublishDate">Published Tuesday November 30, 2021</div> 
						<p>
						<p>I&rsquo;ve seen no new elf girl nor heard of her. The Snow Fairy might help you; she lives over the hill.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/It’s-Yeti"><img src="https://www.northpoletimes.com/images_story/11_29_2021_SM.jpg" alt="[It’s Yeti!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/It’s-Yeti" class="shortmenu">It’s Yeti!</a>
						
						<div class="PublishDate">Published Monday November 29, 2021</div> 
						<p>
						<p>Just when they thought things couldn&rsquo;t get any worse, they noticed two more eyes in the darkness scurrying straight at them.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/BOOM-BOOM-BOOM"><img src="https://www.northpoletimes.com/images_story/11_28_2021_SM.jpg" alt="[BOOM! BOOM! BOOM!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/BOOM-BOOM-BOOM" class="shortmenu">BOOM! BOOM! BOOM!</a>
						
						<div class="PublishDate">Published Sunday November 28, 2021</div> 
						<p>
						<p>Three elves&nbsp;set out on a mission to find the menace who is actively trying to ruin Christmas.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Alert-Pudding-on-the-Keyboard"><img src="https://www.northpoletimes.com/images_story/11_27_2021_SM.jpg" alt="[Alert: Pudding on the Keyboard!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Alert-Pudding-on-the-Keyboard" class="shortmenu">Alert: Pudding on the Keyboard!</a>
						
						<div class="PublishDate">Published Saturday November 27, 2021</div> 
						<p>
						<p>Waldo looked desperately around. Everyone blamed him for the mess.&nbsp;</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Waldo-Messes-up-Again"><img src="https://www.northpoletimes.com/images_story/11_26_2021_SM.jpg" alt="[Waldo Messes up... Again!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Waldo-Messes-up-Again" class="shortmenu">Waldo Messes up... Again!</a>
						
						<div class="PublishDate">Published Friday November 26, 2021</div> 
						<p>
						<p>The lights went off, the toy-making machine, the Appendapulator, started making the wrong toys, and the whole village was in a mess!</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/The-North-Pole-was-Hacked"><img src="https://www.northpoletimes.com/images_story/11_25_2021_sm.jpg" alt="[The North Pole was Hacked!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/The-North-Pole-was-Hacked" class="shortmenu">The North Pole was Hacked!</a>
						
						<div class="PublishDate">Published Thursday November 25, 2021</div> 
						<p>
						<p>I&rsquo;m writing this by the light of Rudolph&rsquo;s nose. The lights are off at the entire North Pole!</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Not-a-Creature-was-stirring"><img src="https://www.northpoletimes.com/images_story/MouseHunt2.jpg" alt="[Not a Creature was stirring...]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Not-a-Creature-was-stirring" class="shortmenu">Not a Creature was stirring...</a>
						
						<div class="PublishDate">Published Saturday November 20, 2021</div> 
						<p>
						<p>There&rsquo;s been quite a stir recently here at the North Pole. Our little friend ChrisMouse, who loves running behind the walls at Santa&rsquo;s Village, has become a little bolder.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Strange-Happenings-Resolved-at-Pole"><img src="https://www.northpoletimes.com/images_story/Roz-Made-11_16_2021_sm.jpg" alt="[Strange Happenings Resolved at Pole]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Strange-Happenings-Resolved-at-Pole" class="shortmenu">Strange Happenings Resolved at Pole</a>
						
						<div class="PublishDate">Published Tuesday November 16, 2021</div> 
						<p>
						<p>Something strange was happening in the Newsroom. It came out of nowhere and affected most of the news services at the North Pole Times - including the website. But Gizmo&#39;s team got &#39;er done!</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Problems-with-News-System-Slows-Presses"><img src="https://www.northpoletimes.com/images_story/News-Flash.jpg" alt="[Problems with News System Slows Presses]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Problems-with-News-System-Slows-Presses" class="shortmenu">Problems with News System Slows Presses</a>
						
						<div class="PublishDate">Published Monday November 15, 2021</div> 
						<p>
						<p>The News systems at the North Pole Times have&nbsp;been acting strangly throughtout the last fews days. Gizmo and team are working to resolve the issue.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Teachers-and-Christmas-and-Kids-oh-my"><img src="https://www.northpoletimes.com/images_story/Teachers2.jpg" alt="[Teachers and Christmas and Kids, oh my!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Teachers-and-Christmas-and-Kids-oh-my" class="shortmenu">Teachers and Christmas and Kids, oh my!</a>
						
						<div class="PublishDate">Published Monday November 01, 2021</div> 
						<p>
						<p>During the Christmas season, keeping kids focused can be a difficult undertaking. Harnessing all that excitement and energy can also be difficult for teachers.</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com"/story/All-Hallows-Eve-at-the-North-Pole"><img src="https://www.northpoletimes.com/images_story/10-01-2021-news_SM.jpg" alt="[All Hallows\' Eve at the North Pole]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/All-Hallows-Eve-at-the-North-Pole" class="shortmenu">All Hallows\' Eve at the North Pole</a>
						
						<div class="PublishDate">Published Friday October 01, 2021</div> 
						<p>
						<p>While it&rsquo;s true that the elves are already hard at work making toys, Halloween time offers a great opportunity for so much fun!</p>

						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Picnics-and-Pirates"><img src="https://www.northpoletimes.com/images_story/09_01_2021_NS_SM.jpg" alt="[Picnics and Pirates]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Picnics-and-Pirates" class="shortmenu">Picnics and Pirates</a>
						
						<div class="PublishDate">Published Wednesday September 01, 2021</div> 
						<p>
						As kids around the world are getting ready to go back to school, the elves at the North Pole are gearing up for their favorite time of year...
						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/World-Friendship-Day"><img src="https://www.northpoletimes.com/images_story/08_01_2021_NS_SM.jpg" alt="[World Friendship Day]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/World-Friendship-Day" class="shortmenu">World Friendship Day</a>
						
						<div class="PublishDate">Published Sunday August 01, 2021</div> 
						<p>
						August is a very special time at the North Pole. While the elves enjoy the last full month of summer, as the high temperature can sometimes reach up to 41° F, they also start to prepare for the colder months of Autumn and Winter.
						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href=https://www.northpoletimes.com"/story/It-is-Festive-in-July-at-the-North-Pole"><img src="https://www.northpoletimes.com/images_story/07_01_2021_NS_SM.jpg" alt="[It is Festive in July at the North Pole]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/It-is-Festive-in-July-at-the-North-Pole" class="shortmenu">It is Festive in July at the North Pole</a>
						
						<div class="PublishDate">Published Thursday July 01, 2021</div> 
						<p>
						Because the elves of the North Pole consider themselves global citizens, they enjoy celebrating all of the national holidays!
						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Summer-Fun-at-the-North-Pole"><img src="https://www.northpoletimes.com/images_story/06_01_2021_NS_SM.jpg" alt="[Summer Fun at the North Pole]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href=https://www.northpoletimes.com"/story/Summer-Fun-at-the-North-Pole" class="shortmenu">Summer Fun at the North Pole</a>
						
						<div class="PublishDate">Published Monday May 31, 2021</div> 
						<p>
						Things are really heating up in the North Pole now! In June, the elves enjoy temperatures&nbsp; that can reach up to 38&deg; F!
						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/The-North-Pole-May-Check-In"><img src="https://www.northpoletimes.com/images_story/05_01_2020_NS_SM.jpg" alt="[The North Pole May Check In!]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/The-North-Pole-May-Check-In" class="shortmenu">The North Pole May Check In!</a>
						
						<div class="PublishDate">Published Saturday May 01, 2021</div> 
						<p>
						Welcome to May in the North Pole. The elves are excited because there is usually a big temperature jump in May.
						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/Celebrations-in-April"><img src="https://www.northpoletimes.com/images_story/HappyEaster.jpg" alt="[Celebrations in April]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/Celebrations-in-April" class="shortmenu">Celebrations in April</a>
						
						<div class="PublishDate">Published Wednesday March 31, 2021</div> 
						<p>
						April showers, bring May flowers…

But in the North Pole April brings a lot of fun and festive times for the elves. With holidays that celebrate their love of fun and faith, April has it all.
						
					</div>
				</div>
				
				
				<div class="row justify-content-center hover_drop_down">

					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-4 mb-3 text-left">
						<a href="https://www.northpoletimes.com/story/St-Patrick’s-Day-at-the-North-Pole"><img src="https://www.northpoletimes.com/images_story/StPatty2.jpg" alt="[St. Patrick’s Day at the North Pole]" loading="lazy" width="287" height="201" class="img-fluid doubleBorderGreen"></a>
					</div>
					<div class="col-xs-7 col-sm-7 col-md-6 col-lg-8 text-left">
						<a href="https://www.northpoletimes.com/story/St-Patrick’s-Day-at-the-North-Pole" class="shortmenu">St. Patrick’s Day at the North Pole</a>
						
						<div class="PublishDate">Published Monday March 01, 2021</div> 
						<p>
						Right now our favorite elves are decorating for St. Patrick’s Day at the North Pole while also starting their spring cleaning and planting. They are dreaming about shamrocks and the sun!
						
					</div>
				</div>
				
				
				</div>
				<button id="ShowHideButton" class="btn btn-success MoreLess mt-4 mb-4" data-toggle="collapse" data-target="#collapse-news">Show More / Less</button>
				

						
						
					</div>
				

					<div class="col-sm-12 order-3 col-md-12 col-lg-3 mt-2 mb-2 text-center">
						
<!-- santa\'s rules -->			
			

	<div class="container mb-4">
		<div class="row justify-content-center">
			<div class="col-12 RTColWidget">
				<img class="img-fluid" src="https://www.northpoletimes.com/images/InTheGameRoom.png" width="180" height="101" alt="[In The Game Room]">
				<p>			
				<a class="shortmenu" href="https://www.northpoletimes.com/WordSearch/"><img class="img-fluid" src="https://www.northpoletimes.com/WordSearch/ReindeerGrades1-2.png" width="240" height="311" alt="[Word Search Puzzles]"></a>
				</p>
				<p>
				<a class="shortmenu" href="https://www.northpoletimes.com/WordSearch/">Word Search Puzzles</a>
				</p>
			</div>
		</div>
	</div>




	<div class="container mb-4">
		<div class="row justify-content-center">
			<div class="col-12 RTColWidget">
            
           
				<p>
				<img class="img-fluid mt-2" src="https://www.northpoletimes.com/images/HDR_GiftIdeas.jpg" width="180" height="101" alt="[Holiday Gift Ideas]">
				<p><a href="https://www.ebay.com/itm/PERSONALIZED-Christmas-Letter-Couple-Family-2-Christmas-Keepsake-Ornament-/283631433526" target="_blank">
                <img class="img-fluid" src="https://i.ebayimg.com/00/s/MTYwMFgxNjAw/z/BPQAAOSwr0RdlP-k/$_1.JPG?set_id=880000500F" width="240" alt="[PERSONALIZED Christmas Letter Couple - Family of 2 Christmas Keepsake Ornament ]">
                </a></p>
				<p>
				<a class="fifteenred" href="https://www.ebay.com/itm/PERSONALIZED-Christmas-Letter-Couple-Family-2-Christmas-Keepsake-Ornament-/283631433526" target="_blank">PERSONALIZED Christmas Letter Couple - Family of 2 Christmas Keepsake Ornament </a>
				</p>
               
				<p>
				<a href="/Gift-Ideas/" class="btn btn-info" role="button">View More</a>
				</p>
                 
			</div>
		</div>
	</div>





	<div class="container mb-4">
		<div class="row justify-content-center">
			<div class="col-12 RTColWidget">
				<img class="img-fluid" src="https://www.northpoletimes.com/images/OnlineGames.png" width="180" height="101" alt="[Online Games]">
				<p>			
				<a class="shortmenu" href="https://www.northpoletimes.com/Games/"><img class="img-fluid  RTColWidgetPic" src="https://www.northpoletimes.com/images/gameicons/PandaRun.png" width="240" height="123" alt="[Online Games]"></a>
				</p>
				<p>
				<a class="shortmenu" href="https://www.northpoletimes.com/Games/">Online Games</a>
				</p>
			</div>
		</div>
	</div>


	<div class="container mb-4">
		<div class="row justify-content-center">
			<div class="col-12 RTColWidget">
				<img class="img-fluid" src="https://www.northpoletimes.com/images/ads/InTheKitchen.jpg" width="180" height="101" alt="[In The Kitchen]">
				<p><a Href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Banana-Bread"><img Class="img-fluid RTColWidgetPic" Src="https://www.northpoletimes.com/images_food/Banana-Bread.jpg" Width="240" Height="160" Alt="[Banana Bread]"></a></p>
							<p>
							<a Class="shortmenu" Href="https://www.northpoletimes.com/MrsClausKitchen/Recipe/Banana-Bread">Banana Bread</a>
							</p>
					
					<p>
				
			</div>
		</div>
	</div> 

	<div class="container mb-4">
		<div class="row justify-content-center">
			<div class="col-12 RTColWidget">
				<img class="img-fluid" src="https://www.northpoletimes.com/images/InTheCraftRoom.png" width="180" height="101" alt="[In The Craft Room]">
				<p><a Href="/Workshop/Craft/Paper-Tube-Santa-Claus-Craft"><img  Class="img-fluid RTColWidgetPic" Src="https://www.northpoletimes.com/images_food/Crafts-PaperTubeSantaClaus-Cover.jpg" Width="240" Height="368" Alt="[Paper Tube Santa Claus Craft]"></a></p>
							<p>
							<a Class="shortmenu" Href="https://www.northpoletimes.com/Workshop/Craft/Paper-Tube-Santa-Claus-Craft">Paper Tube Santa Claus Craft</a>
							</p>
					
					<p>
				
			</div>
		</div>
	</div> 

	<div class="container mb-4">
		<div class="row justify-content-center">
			<div class="col-12 RTColWidget">
				<img class="img-fluid" src="https://www.northpoletimes.com/images/InTheGameRoom.png" width="180" height="101" alt="[In The Game Room]">
				<p>			
				<a class="shortmenu" href="https://www.northpoletimes.com/Crossword-Puzzles/"><img class="img-fluid" src="https://www.northpoletimes.com/Crossword-Puzzles/SantaHelpers.png" width="240" height="311" alt="[Crossword Puzzles]"></a>
				</p>
				<p>
				<a class="shortmenu" href="https://www.northpoletimes.com/Crossword-Puzzles/">Crossword Puzzles</a>
				</p>
			</div>
		</div>
	</div>

					</div>   
				</div>
			</div> 
		</div>
		<div class="row mt-5">
			<div class="col text-center"> 
			  <img src="https://www.northpoletimes.com/images/ads/newsTeam_2018_WithText.jpg" loading="lazy" alt="[The North Pole Times News Team]" class="img-fluid">
			</div> 
		</div> 
	</div> 
<div class="row justify-content-center">
 	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div style="height: 150px; Width: 100%; overflow: hidden;" >
				<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 120%;"><path d="M-5.64,106.74 C150.11,209.36 313.20,11.01 506.77,151.15 L430.58,163.98 L0.00,150.00 Z" style="stroke: green; fill: #D0FFF5"></path></svg>
			</div>
		</div>
	</div>
	<div class="container-fluid footer-color">
		<div class="row justify-content-center footer-color">
			<div class="col-12 tengray text-center mt-4 mb-3"> 
				<!-- BEGIN COUNTDOWN -->
	<script>'?><?php echo ""?>
var end = new Date('12/24/<?php echo date("Y");?> 11:59 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'Merry Christmas!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' Days ';
        document.getElementById('countdown').innerHTML += hours + ' hrs ';
        document.getElementById('countdown').innerHTML += minutes + ' mins ';
        document.getElementById('countdown').innerHTML += seconds + ' secs until Christmas! ';

    }

    timer = setInterval(showRemaining, 1000);
</script><?php echo '
<div class="countdown" style="font-family:\'Luckiest Guy\';font-size:18pt;color:#c00;text-decoration:none;"><div id="countdown"></div></div>
	
	
	
	
			</div>
		</div>
		<div class="row justify-content-center footer-color grow">
			<a href="https://www.facebook.com/NorthPoleTimes/" target="_blank"><span style="font-size: 30pt; color: #3b5998; margin-right:20px;"><i class="fab fa-facebook"></i></span></a>
			<a href="https://twitter.com/NorthPoleTimes" target="_blank"><span style="font-size: 30pt; color: #1DA1F2;"><i class="fab fa-twitter"></i></span></a>
			<a href="https://www.pinterest.com/northpoletimes/" target="_blank"><span style="font-size: 30pt; color: #BD081C; margin-left:20px;"><i class="fab fa-pinterest"></i></span></a>
			<a href="https://www.instagram.com/northpoletimes/" target="_blank"><span style="font-size: 30pt; color: #3f729b; margin-left:20px;"><i class="fab fa-instagram"></i></span></a>
		</div>
		<div class="row justify-content-center footer-color">
			<div class="col-12 text-center mt-3 mb-2">
				<a class="FooterMenu" href="/PrivacyPolicy/">| PRIVACY POLICY</a> |
				<a class="FooterMenu" href="/TermsOfUse/">TERMS OF USE</a> |
				<a class="FooterMenu" href="/GrownUps/">GROWN UPS</a> |
				<a class="FooterMenu" href="/Santas-Rules/">SANTA\'S RULES |</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 CraftKidGreen text-center footer-color">
				#1 in Santa\'s News! Trusted Worldwide!
			</div>
		</div>
		<div class="row justify-content-center footer-color">
			<div class="col-12 copyright text-center mb-5">
				ALL Content Copyright &copy; 1995 - '?><?php echo date("Y");?><?php echo ' North Pole Times. All Rights Reserved!
			</div>
		</div>
		
		
		
		 
         
		<div class="row justify-content-center" style="margin-top: -200px;">
           
		</div>
		


	</div>
</div>	


<button onclick="topFunction()" id="UpBtn" title="Go to top">&nbsp; <i class="fas fa-angle-double-up"></i> &nbsp;</button>


<script>
//Get the button
var mybutton = document.getElementById("UpBtn");

// When the user scrolls down 40px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
	
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<!-- END FOOTER -->

  
 <script>
	  $(document).ready(function(e) {
        
  
		 //dialog
		 $( "#dialogL" ).dialog({
			  autoOpen: false,
			  position:{
               my: "right",
               at: "center",
               of: "#mouseL"
            },
			  show: {
				effect: "blind",
				duration: 500
			  },
			  hide: {
				effect: "explode",
				duration: 500
			  }
			});//end dialog
			
			//dialog
		 $( "#dialogR" ).dialog({
			  autoOpen: false,
			  position:{
               my: "left",
               at: "bottom",
               of: "#mouseR"
            },
			  show: {
				effect: "blind",
				duration: 500
			  },
			  hide: {
				effect: "explode",
				duration: 500
			  }
			});//end dialog
	   var ipUser=\'69.138.13.88\';
	    
		   $("#mouseL").click(function(){
			   doAjaxQ(ipUser,\'l\');	 
			});
	 
	 
		   $("#mouseR").click(function(){
			   doAjaxQ(ipUser, \'r\');				 
			});
	 
    });//end doc ready
	
	
		async function doAjaxQ(ipUser, side){
			 
			const promise =await $.ajax({
			  url: "https://www.northpoletimes.com/components/AjaxQueries.cfc?method=saveChrisMouseClick",
			  type: "POST",
			  data: {"ipaddress": ipUser },
			  dataType: "json",
			  cache: false,
			  async:false
			 
			  });
			 
			 
			 if(side ==\'l\'){
				//wants this a modal 
				$("#comments").html(promise);
				$( "#dialogL" ).dialog( "open" );
				$(".ui-dialog-titlebar").hide();
				setTimeout(function() {
                 $( "#dialogL" ).dialog(\'close\');
				 $("#mouseL").addClass("d-none");
                }, 12000);
			 
			 }
			 if(side ==\'r\'){
				 $("#comments").html(promise);
			     $( "#dialogR" ).dialog( "open" );
			     $(".ui-dialog-titlebar").hide();
			   setTimeout(function() {
                $( "#dialogR" ).dialog(\'close\');
			    $("#mouseR").addClass("d-none");
                }, 12000);
			 
			 }
	 
		 }//end doAjax function 
	</script>
</body>
</html>'; } ?>
