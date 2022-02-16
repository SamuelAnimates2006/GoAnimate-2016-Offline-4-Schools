<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO YOUR VIDEOS PAGE IF LOGGED IN
if (isset($_SESSION['login'])) {
  header("Location: /movies");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//web.archive.org/web/20170130231951/https://d2qrjeyl4jwu9j.cloudfront.net/">

<title>Create an Order - GoAnimate for Schools</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="GoAnimate for Schools is a safe environment for students to fully express their creativity through video and a great place for educators to share educational videos with other educators worldwide.">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>


<link rel="stylesheet" href="https://goanimateforschools.github.io/fonts/schoolfont.css">
<link rel="stylesheet" href="https://goanimateforschools.github.io/css/common_combined.css.gz.css">

<link rel="stylesheet" href="https://goanimateforschools.github.io/css/public/order.css">

<script>
var srv_tz_os = -5, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://d2qrjeyl4jwu9j.cloudfront.net/static/19521fcedc8fb38b/go/js/lib/html5shiv.js"></script>
<![endif]-->
<script src="https://goanimateforschools.github.io/js/common_combined.js.gz.js"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/static/477/go/po/goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>



<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-2516970-15');

        ga('send', 'pageview');

ga('require', 'ecommerce');

$(function() {
    var COOKIE_LAST_URL_LIFETIME = 5,
        COOKIE_BLOCKER_LIFETIME = 900;

    function setSessionCookie(cookie_name, cookie_value, lifetime) {
        document.cookie = cookie_name + '=' + escape(cookie_value) + '; path=/; max-age=' + lifetime + ';';
    }
    function getSessionCookie(cookie_name) {
        var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
        if (results) {
            return (unescape(results[2]));
        } else {
            return null;
        }
    }

    $(window).on({
        unload: function() {
            setSessionCookie('lasturl', window.location.href, COOKIE_LAST_URL_LIFETIME);
        },
        onbeforeunload: function() {
            setSessionCookie('lasturl', window.location.href, COOKIE_LAST_URL_LIFETIME);
        },
        load: function() {
            var http_referrer = document.referrer,
                blocker = getSessionCookie('gasessid');

            if (http_referrer === '') {
                http_referrer = getSessionCookie('lasturl');
            }
            if ((http_referrer === '') || (blocker === null)) {
                if (typeof(ga) !== 'undefined') {
                    var currentDate = new Date(),
                        sessionId,
                        clientId;

                    // Assume we only have one tracker
                    try {
                        var trackers = ga.getAll();
                        var currentDate = new Date(),
                            clientId = trackers[0].get('clientId'),
                            sessionId = clientId + '.' + currentDate.getTime();
                        // Set custom dimension (UniqueID).
                        ga('set', 'dimension1', clientId);
                        // Set custom dimension (Session ID).
                        ga('set', 'dimension2', sessionId);
                        // Set blocker.
                        setSessionCookie('gasessid', sessionId, COOKIE_BLOCKER_LIFETIME);
                    } catch(e) {}
                }
            }
        }
    });
  });
</script>



<script type="text/javascript" src="/ajax/cookie_policy.js"></script>

<!-- Google Knowledge Graph -->
<script type="application/ld+json">
{
    "@context": "http://web.archive.org/web/20170130231951/http://schema.org",
    "@type": "Organization",
    "name": "GoAnimate",
    "url": "http://web.archive.org/web/20170130231951/http://goanimate.com",
    "logo": "http://web.archive.org/web/20170130231951/http://gawpstorage.s3.amazonaws.com/img/google_knowledge_graph_logo.jpg",
    "sameAs": [
        "http://web.archive.org/web/20170130231951/http://www.facebook.com/GoAnimateInc",
        "http://web.archive.org/web/20170130231951/http://twitter.com/GoAnimate",
        "http://web.archive.org/web/20170130231951/http://www.linkedin.com/company/goanimate",
        "http://web.archive.org/web/20170130231951/http://plus.google.com/+goanimate",
        "http://web.archive.org/web/20170130231951/http://www.youtube.com/user/GoAnimate"
    ]
}
</script>

</head>
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
                <img alt="GoAnimate for Schools" src="https://goanimateforschools.github.io/img/site/logo4s.png">
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/public_signup">Pricing &amp; Signup</a></li>
                <li><a href="/login">Login</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Learning Center <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/public_faq">FAQ</a></li>
                        <li><a href="/hc/en-us">Help Center</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
var aff_ref = '', currency = 'USD';
</script>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/?school">Home</a></li>
        <li><a href="/public_signup">Pricing &amp; Sign Up</a></li>
        <li class="active">Create an order</li>
    </ol>
    <hr>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <form class="form-horizontal" id="order-form" action="/submit_order" method="post" novalidate>
                                <div class="payment-form-section">
                    <div class="payment-form-section-header">
                        <span><strong>Plan Details</strong></span>
                        <span class="pull-right"><strong>Amount</strong></span>
                    </div>
                    <div style="padding-top:5px;">
                        <div class="payment-item-row clearfix">
                            <strong> Free Plan | 1 teacher </strong> <a href="javascript:history.go(-1);"><span class="glyphicon glyphicon-pencil"></span></a>
                            <div class="payment-item-price" id="plan-price">$0</div>
                            <input type="hidden" name="staffs" value="1">
                            <input type="hidden" name="students" value="49">
                        </div>

                        <div class="payment-item-row total">
                            <div class="payment-order-total">Total Amount: <span id="order-total"> $0</span></div>

                            <div class="small">Your subscription never expire because this is free remastered software.</div>
                        </div>
                    </div>
                </div>
                <div class="payment-form-section">
                    <div>
                        <h3>About Your School</h3>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">School Name<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="school_name" value="" maxlength="60" placeholder="School Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">School Type</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="school_level">
                                    <option value="k12">K-12</option>
                                    <option value="higher">Higher Ed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Preferred Private URL<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">https://action-ouranimate.herokuapp.com/school/</span>
                                    <input class="form-control" type="text" name="school_url" value="" maxlength="25" placeholder="your_school" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Street</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="address1" value="" maxlength="150" placeholder="Street address 1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input class="form-control" type="text" name="address2" value="" maxlength="150" placeholder="Street address 2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="city" value="" maxlength="25" placeholder="City">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">State/Province</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="state" value="" maxlength="25" placeholder="State/Province">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Postal/Zip Code</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="postal_code" value="" maxlength="50" placeholder="Postal/Zip Code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Country</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="country" value="" maxlength="25" placeholder="Country">
                            </div>
                        </div>

                        <div class="payment-form-section-divider"></div>

                        <h3>Super Teacher</h3>
                        <p class="text-muted">This person is the "teacher in charge" of the subscription</p>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">First Name<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="contact_first_name" value="" maxlength="25" placeholder="First name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Last Name<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="contact_last_name" value="" maxlength="25" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email Address<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="email" name="contact_email" value="" maxlength="100" placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone Number<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="phone" value="" maxlength="25">
                            </div>
                        </div>

                        <div class="payment-form-section-divider"></div>

                        <button class="btn btn-xs btn-default pull-right" id="btn-copy-contact" type="button">Same as above</button>

                        <h3>Finance / Admin Contact</h3>
                        <p class="text-muted">This person is in charge of billing and payments</p>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">First Name<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="financial_first_name" value="" maxlength="25" placeholder="First name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Last Name<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="financial_last_name" value="" maxlength="25" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email Address<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" type="email" name="financial_email" value="" maxlength="100" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="payment-form-section-footer">
                        <br>
                        <button class="btn btn-orange btn-lg" type="submit">Activate Free Trial &gt;</button>
                        <input type="hidden" name="subscription_type" value="trial">
                    </div>
                </div>

<input type="hidden" name="ct" value="3s57eDCEVtG8sqdLZWoAJQyyE5CPKJ55ej7nJWOl23Qik8HZ79TFGTJFAFcNoe4oYD4USQWpkMoIlC4XBjPH4GlnT5cecXehKwrSreJghSR4yLuHvqje4ElsXsNrLriOi8pRJQyeEaN8nMlyRu0sxJ30Pp1oWqCkB9JCaqb0HRPR6VYubOVsZH6u1beDsoDYrKkchEzPlb0UXJaRZcjuPSElZAdThkOcQ_6lDsKw=="/>
            </form>
<!-- SharpSpring Form begin -->
<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3q6b8sg59e.marketingautomation.services/webforms/receivePostback/MzYwN7YwMDIyBwA/']);
    __ss_noform.push(['endpoint', 'd8b497cc-b057-4aca-b319-9e1cd4bf97b6']);
    __ss_noform.push(['submitType', 'manual']);
</script>
<script type="text/javascript" src="https://koi-3q6b8sg59e.marketingautomation.services/client/noform.js?ver=1.24"></script>
<!-- SharpSpring Form end -->
<script>
$('#order-form').on('formBeforeSubmit', function() {
    __ss_noform.push(['submit', null, 'd8b497cc-b057-4aca-b319-9e1cd4bf97b6']);
});
</script>
            <br><br>
        </div>

<script src="https://goanimateforschools.github.io/js/plans_order.js"></script>

        <div class="col-md-4 col-lg-3">
            <div class="case-studies">
                <div class="case">
                    <div class="case-quote">
                        <p>My students work tirelessly to make sure the videos are just right. I have seen students preview the video, and go back to edit the dialogue so that it sounds right, or is explained more clearly. They are not satisfied with mediocre work. I have rarely seen this type of enthusiasm and attention to detail in 5th graders.</p>
                        <div class="case-customer">
                            - <span class="name"><a href="https://goanimateforschools.github.io/blog/dividing-class-time-with-goanimate-makes-fractions-cool/" target="_blank">Lisa Nowakowski</a></span>,<br>5th Grade Teacher
                        </div>
                    </div>
                </div>
                <div class="case">
                    <div class="case-quote">
                        <p>The Common Core State Standards asks students to write arguments and to present their findings. GoAnimate allows students an engaging way to present their findings to the class using technology. Pairing the use of technology and writing in an assignment allows students to be better prepared for both college and career.</p>
                        <div class="case-customer">
                            - <span class="name"><a href="https://goanimateforschools.github.io/blog/9th-graders-argue-that-goanimate-rocks-in-little-rock-ak/" target="_blank">Suzanne Rogers</a></span>,<br>M.Ed, High School Educator
                        </div>
                    </div>
                </div>
                <div class="case">
                    <div class="case-quote">
                        <p>The site’s innovative digital storytelling techniques making animation a breeze and tons of fun – and I look forward to using it more in the years to come.</p>
                        <div class="case-customer">
                            - <span class="name"><a href="https://goanimateforschools.github.io/blog/the-road-to-respect-paved-by-goanimate-for-schools/" target="_blank">James Gorcesky</a></span>,<br>7th &amp; 8th grade Art and Technology Teacher
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-in">
                <h5>As featured in:</h5>

                <img src="/img/signup/asfeatured.png" alt="">
            </div>
            <div class="security-guarantee">
                <h5>Security Guarantee</h5>

                <p>All information is encrypted and transmitted without risk using a Secure Sockets Layer (SSL) protocol.</p>

                <div class="clearfix">
                    <!-- PayPal Logo -->
                    <table border="0" cellpadding="10" cellspacing="0">
                        <tr>
                            <td>
                              <span class="norton-seal">
                                <script type="text/javascript" src="https://seal.websecurity.norton.com/getseal?host_name=goanimate.com&amp;size=S&amp;use_flash=NO&amp;use_transparent=YES&amp;lang=en"></script>
                              </span>
                            </td>
                            <td>
                                <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                                    <img class="paypal-sec-button" src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_secured_by_pp_2line.png" alt="How PayPal Works"/>
                                </a>
                            </td>
                        </tr>
                    </table>
                    <!-- PayPal Logo -->
                </div>
            </div>

            <div class="contact-goanimate">
                <h5>Got Questions?</h5>

                Phone: +1 (888) 360-9639<br>
                Email: <a href="mailto:schools@goanimate4schools.com">schools@goanimate4schools.com</a>
            </div>
        </div>
    </div>
</div>

<div class="modal order-processing-modal" id="order-processing">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Processing</h3>
            </div>
            <div class="modal-body">
                <br>
                <p class="text-center h4">Your order is processing, please wait...</p>
                <br>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer hidden-print">
    <div class="container">
        <div class="row site-footer-nav">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>About GoAnimate</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://goanimateforschools.github.io/about">Who We Are</a></li>
                        <li><a href="https://goanimateforschools.github.io/contactus">Contact Us</a></li>
                        <li><a href="https://goanimateforschools.github.io/video-maker-tips">Blog</a></li>
                        <li><a href="https://goanimateforschools.github.io/press">Press</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>GoAnimate Solutions</h5>
                    <ul class="list-unstyled">
                        <li><a href="/?school" target="_blank">GoAnimate for Schools</a></li>
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
                        <li><a href="https://goanimateforschools.github.io/termsofuse">Terms of Service</a></li>
                        <li><a href="https://goanimateforschools.github.io/privacy">Privacy Policy</a></li>
                        <li class="hidden-xs">&nbsp;</li>
                        <li class="hidden-xs">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>Getting Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://goanimateforschools.github.io/blog">Educator Experiences</a></li>
                        <li><a href="https://goanimateforschools.github.io/hc/en-us">Help Center</a></li>
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
                        <li><a class="gplus" href="https://plus.google.com/+goanimate">Google+</a></li>
                        <li><a class="youtube" href="https://www.youtube.com/user/GoAnimate">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <span class="site-footer-norton">
                      <script type="text/javascript" src="https://seal.websecurity.norton.com/getseal?host_name=goanimate.com&amp;size=S&amp;use_flash=NO&amp;use_transparent=YES&amp;lang=en"></script>
                    </span>
                    <img src="https://josephcrosmanplays532.github.io/static/477/go/img/footer/logo_amazon.png" alt="AWS Partner Network"/>
                    &nbsp;&nbsp;&nbsp;
                    GoAnimate &copy; 2021
                </div>
            </div>
        </div>

    </div>
</footer>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            This content requires the Adobe Flash Player 10.3. <a href="http://get.adobe.com/flashplayer/">Get Flash</a>
        </div>
    </div>
</div>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='https://js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/491659.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

<!-- SharpSpring begin -->
<script type="text/javascript">
var _ss = _ss || [];
_ss.push(['_setDomain', 'https://koi-3q6b8sg59e.marketingautomation.services/net']);
_ss.push(['_setAccount', 'KOI-1OTR0IV8I']);
_ss.push(['_trackPageView']);
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;

    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3Q6B8SG59E.marketingautomation.services/client/ss.js?ver=1.1.1';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>
<!-- SharpSpring end -->

</body>
</html>
