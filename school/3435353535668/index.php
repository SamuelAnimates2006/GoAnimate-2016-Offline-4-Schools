<?php
require = "config.php";
if(isset($_POST['btn-login'])) {
$_SESSION['login'];
} else {
echo "ERROR: Some details are incorrect. please re enter all of your details and try again.";
}
}
?>
<?php  if (isset($_SESSION['login'])){ header ("Location: /movies"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//web.archive.org/web/20190630040726/https://d2qrjeyl4jwu9j.cloudfront.net/">

<title>Login to Wrapper Offline - GoAnimate for Schools</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="GoAnimate for Schools is a safe environment for students to fully express their creativity through video and a great place for educators to share educational videos with other educators worldwide.">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>


<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700">
<link rel="stylesheet" href="/static/2019/school/css/common_combined.css.gz.css">

<link rel="stylesheet" href="/static/2019/school/css/public/login.css.gz.css">

<script>
var srv_tz_os = -4, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://d2qrjeyl4jwu9j.cloudfront.net/static/e60e6efd1cf320eb/go/js/lib/html5shiv.js.gz.js"></script>
<![endif]-->
<script src="/static/2019/school/js/common_combined.js.gz.js"></script>
<script type="text/javascript" src="/static/2019/go/po/goserver_js-en_US.json.gz.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>
<script src="https://vyondhosterremastered.000webhostapp.com/ajax/cookie_policy" async></script>

<!-- Google Knowledge Graph -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "GoAnimate",
    "url": "https://web.archive.org/web/20190630040726/http://goanimate.com",
    "logo": "https://gawpstorage.s3.amazonaws.com/img/google_knowledge_graph_logo.jpg",
    "sameAs": [
        "https://www.facebook.com/GoAnimateInc",
        "https://twitter.com/GoAnimate",
        "https://www.linkedin.com/company/goanimate",
        "https://www.youtube.com/user/GoAnimate"
    ]
}
</script>

</head>
<body class="page-action-school">
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
            <a class="navbar-brand" href="/?school" title="GoAnimate for Schools">
                <img alt="GoAnimate for Schools" src="/static/2015/school/img/site/logo4s.png">
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/school/vincentjyork">Login</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Learning Center <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://web.archive.org/web/20190630040726/https://blog.goanimate4schools.com/">Blog</a></li>
                        <li><a href="/public_faq">FAQ</a></li>
                        <li><a href="https://web.archive.org/web/20190630040726/https://goanimate4schools.zendesk.com/hc/en-us">Help Center</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero">
    <div class="hero-bottom">
        <div class="landscape"></div>
    </div>
    <div class="container">
        <header class="login-header">
            <img class="school-thumbnail img-circle" src="/static/school/img/common/profile_pic_school.jpg" alt="">
            <div class="school-name">Wrapper Offline</div>
        </header>
        <div class="alert alert-warning">
            <p>On June 30, 2019 support and services will end for GoAnimate for Schools. Thank you for supporting GoAnimate and using the tools our team has worked so hard to create.</p>

            <p>As you look for another service, we would strongly encourage you to find one that is committed to safeguarding the personal information of children. Good questions to ask are:</p>
            <ul>
                <li>Are you COPPA compliant?</li>
                <li>Are you GDPR compliant?</li>
            </ul>

        </div>
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-5 login-col">
                <div class="floating-form">
                    <div class="floating-form-body">
                        <form class="login-form" action="/ajax/loginUser" id="login" method="post" novalidate>
                            <div class="form-group">
                                <div class="text-danger" id="login-form-message"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="login-username">Username</label>
                                <input class="form-control" id="login-username" type="text" name="user1" maxlength="255" placeholder="Login Name" value="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="login-password">Password</label>
                                <input class="form-control" id="login-password" type="password" name="password1" maxlength="255" placeholder="Password" value="" autocomplete="off">
                            </div>

                            <div class="form-group" id="login_captcha_container"></div>

                            <div class="form-group text-center">
                                <button class="btn btn-green btn-lg" id="btn-login" type="submit">Login</button>

                                <input type="hidden" name="action" value="login">

<input type="hidden" name="ct" value="iuIM_jsYCUnq3xzz2+6zxgtFAIYP3Sw_Rq8SF4oIzBGDFerP2OGV9I28vfa4j3MmqXtasM1ByKk5pA6ZVCIFoM1v4Abbqsmh8161mvMRWaAeK5DzmZ7Wxjy1MLbNLRcRQNDgk7TvhhnsBb8JcVWi6YRw5T8pUvDfpMJuKxc9HpzFgRuaIAFc4b3wKDSlLUfnNaKFW6ubViS2lrlnDHvrA0JOvq"/>
                            </div>
                        </form>
                    </div>
                    <div class="floating-form-footer">
                        <h5>Password Help</h5>
                        <div>Are you a student or teacher? Please contact your Super Teacher.</div>
                        <div>Are you a Super Teacher? <a href="/forgotpassword">Reset it now &gt;</a></div>
                    </div>
                    <div class="floating-form-footer text-center">
                        <a href="/googlelogin"><span class="si google"></span> Google Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function($) {
var processing = false;
var captcha_displayed = false;

function validateLogin() {
    var username = $('#login-username'), username_val = $.trim(username.val()), password = $('#login-password');

    formErrorMessage('');

    if (! username_val) {
        $('#login-username').focus();
        formErrorMessage('Please enter login name');
        return false;
    }

    if (! password.val()) {
        $('#login-password').focus();
        formErrorMessage('Please enter password');
        return false;
    }

    if (captcha_displayed && (grecaptcha.getResponse() === '')) {
        formErrorMessage('Please enter the CAPTCHA value');
        return false;
    }

    return true;
}

function formErrorMessage(message) {
    $('#login-form-message').text(message);
}

function submitLogin() {
    if (! validateLogin()) { return; }
    if (processing) { return; }

    processing = true;

    var buttonText = $('#btn-login').text();
    $('#btn-login').text('Logging in...');
    $.post('/ajax/loginUser', $('#login').serialize(), function(response) {
        if (response.redirect) {
            window.location = response.redirect;
        } else if (response.error) {
            processing = false;
            formErrorMessage(response.error);
            $('#btn-login').text(buttonText);
            // If return throttle, show captcha
            if (captcha_displayed) {
                grecaptcha.reset();
            } else if (response.show_captcha) {
                showCaptchaWidget();
            }
        }
    }, 'json');
}

$('#login').submit(function() {
    submitLogin();
    return false;
});

function showCaptchaWidget() {
    grecaptcha.render('login_captcha_container', {"sitekey":"6LcvJjkUAAAAAIlJ2EwBKlDHYcJCykm0xXeew0oG","theme":"light"});
    captcha_displayed = true;
}
window.onRecaptchaLoaded = function() {
};

if ($('#login-username').val().length) {
    $('#login-password').focus();
} else {
    $('#login-username').focus();
}


})(jQuery);
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onRecaptchaLoaded&amp;render=explicit" async defer></script>
    
<footer class="site-footer hidden-print">
    <div class="container">
        <div class="row site-footer-nav">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>About GoAnimate</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://web.archive.org/web/20190630040726/https://goanimate.com/about">Who We Are</a></li>
                        <li><a href="https://web.archive.org/web/20190630040726/https://goanimate.com/contactus">Contact Us</a></li>
                        <li><a href="https://web.archive.org/web/20190630040726/https://goanimate.com/video-maker-tips">Blog</a></li>
                        <li><a href="https://web.archive.org/web/20190630040726/https://press.goanimate.com/">Press</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>GoAnimate Solutions</h5>
                    <ul class="list-unstyled">
                        <li><a href="/school" target="_blank">GoAnimate for Schools</a></li>
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
                        <li><a href="https://blog.goanimate4schools.com/">Educator Experiences</a></li>
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
                    <img src="/static/2015/school/img/site/logo_amazon.png" alt="AWS Partner Network"/>
                    &nbsp;&nbsp;&nbsp;
                    GoAnimate &copy; 2018
                </div>
            </div>
        </div>

    </div>
</footer>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            You can't use GoAnimate because Flash might be disabled. <a href="https://web.archive.org/web/20190630040726/https://get.adobe.com/flashplayer/">Enable Flash</a>.
        </div>
    </div>
</div>

</body>
</html>
