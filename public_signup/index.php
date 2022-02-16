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
<link rel="dns-prefetch" href="//action-ouranimate.herokuapp.com/">

<title>Pricing &amp; Signup - GoAnimate for Schools</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="GoAnimate for Schools is a safe environment for students to fully express their creativity through video and a great place for educators to share educational videos with other educators worldwide.">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>


<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700">
<link rel="stylesheet" href="/static/2015/school/css/common_combined.css">

<link rel="stylesheet" href="/static/2015/school/css/public/plans.css">

<script>
var srv_tz_os = -4, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://d2qrjeyl4jwu9j.cloudfront.net/static/c37213d825a55116/go/js/lib/html5shiv.js"></script>
<![endif]-->
<script src="/static/2015/school/js/common_combined.js"></script>
<script type="text/javascript" src="/static/2015/go/po/goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2516970-15']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
</head>
<body class="page-action-public_signup">
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
<div class="container">
    <a name="anchor_plan_content"></a>
    <header class="page-header">
        <div class="row">
            <div class="col-sm-8 col-lg-8">
                <h1 class="page-title">Start Making Videos Today</h1>
            </div>
            <div class="col-sm-4 col-lg-4" id="contact_info">
                <strong>Contact Info</strong><br>
                Phone: +1 (888) 360-9639<br>
                Email: <a href="mailto:schools@goanimate4schools.com">schools@goanimate4schools.com</a>
            </div>
            <div class="col-sm-4 col-lg-4" id="commoncraft_link" style="display: none;">
                <a class="remove_commoncraft"><h4><u>Pricing Without Common Craft</u></h4></a>
            </div>
        </div>
    </header>

    <div class="plans">
        <div class="plan-bg hidden-xs hidden-sm">
            <img src="/static/2015/school/img/plans/img_bg_blackboard.png">
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-4 col-md-offset-1 col-lg-offset-2">
                <div class="plan-wrapper teacher-plan">
                    <div class="plan-title">1-Year Teacher Plan</div>
                    <div class="plan-content">
                        <div class="plan-description">
                            <p>Make educational videos to use in your classroom.</p>
                            <p>For one user only.</p>
                        </div>
                        <div class="plan-accounts">
                            <div>1 Teacher</div>
                            <div>0 Students</div>
                        </div>
                    </div>

                    <a class="plan-price single_price_link" href="/public_signup/order/teacher">
                        $<span id="single_price">59</span>/year
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="plan-wrapper school-plan">
                    <div class="plan-title">
                        1 Year
                        <div class="btn-group dropdown-select">
                            <button class="btn btn-white btn-lg dropdown-toggle" data-toggle="dropdown"><span class="select-label">K-12</span> <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#" data-value="k12">K-12</a></li>
                                <li><a href="#" data-value="higher">Higher Ed</a></li>
                                <li class="divider"></li>
                                <li class="disabled"><a>Note: Select K-12 if all/most of<br> your students are under 18<br> years of age</a></li>
                            </ul>
                        </div>
                        Plan
                    </div>
                    <div class="plan-content">
                        <div class="plan-description">
                            <p>Use video to enhance learning at your school within a private and secure environment.</p>
                            <p>Customize your plan with our rate calculator. Volume discounts are built in.</p>
                        </div>
                        <div class="plan-accounts">
                            <form class="plan-form" action="/public_signup/order" method="get" role="form">
                                <input type="hidden" id="is_commoncraft" name="is_commoncraft" value="false">
                                <div class="form-row">
                                    <div class="input-control">
                                        <input class="form-control" type="text" id="school-teacher" name="t" value="5">
                                    </div>
                                    <label for="school-teacher" rel="input-tooltip" title="How many teachers will use the platform?" data-placement="right" data-trigger="manual">Teachers</label>
                                </div>
                                <div class="form-row">
                                    <div class="input-control">
                                        <input class="form-control" type="text" id="school-student" name="s" value="200">
                                    </div>
                                    <label for="school-student" rel="input-tooltip" title="How many students will use the platform?" data-placement="right" data-trigger="manual">Students</label>
                                </div>
                                <input type="hidden" id="school-level" name="l" value="k12">
                            </form>
                        </div>
                    </div>

                    <a class="plan-price plan-form-submit" href="#">
                        <span class="school-plan-price">Starting at $99/year</span>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="free-trial-section">
    <div class="container">
        <p><strong>Want to try GoAnimate for Schools before you buy?</strong></p>
        <p>Sign up for a <a href="public_signup/order/trial">14-day free trial</a>, which includes 1 teacher account and 49 student accounts.<br>
        No credit card required. No commitment.<p>
    </div>
</div>
<div class="no-free-commoncraft" style="display:none;">
    <h4>There is not a free trial available for the Common Craft theme</h4>
    <a class="remove_commoncraft"><h4><u>Pricing Without Common Craft</u></h4></a>
</div>

<div class="payment-section">
    <div class="container">
        <h3>In Charge of Payment?</h3>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                <a href="#" data-toggle="modal" data-target="#order-modal">
                    <img class="center-block img-responsive" src="/static/2015/school/img/plans/img_retrieveOrder.png">
                    Retrieve an existing order &gt;
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <a href="#" data-toggle="modal" data-target="#renew-modal">
                    <img class="center-block img-responsive" src="/static/2015/school/img/plans/img_renewSub.png">
                    Renew an existing subscription &gt;
                </a>
            </div>
        </div>
    </div>
</div>

<div class="info-section">
    <div class="container">
        <h3>Useful Information</h3>
        <div class="row">
            <div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
                <img class="img-responsive pull-right" src="/static/2015/school/img/plans/img_info.png">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul class="informations">
                    <li><a href="#" data-toggle="modal" data-target="#company-modal">Company Information &gt;</a></li>
                    <li><a href="/static/school/doc/GoAnimateW9.pdf" download="GoAnimate W9.pdf">Download our W9 (pdf) &gt;</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#get-quote-modal">How can I get an invoice or quote? &gt;</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#payment-modal">What if I am not in charge of payment? &gt;</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#whitelist-modal">Whitelist our domain name &gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="commoncraft-section">
    <div class="container" id="show_commoncraft">
        <h3>Introducing the ultimate add-on for cut-out style animated videos</h3>
        <p>Subscribe to the Common Craft theme with your GoAnimate for Schools subscription.<p>
        <div class="hidden-xs hidden-sm col-sm-8 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2">
            <img src="/static/2015/school/img/plans/img_commonCraftPrice.png">
            <button class="btn btn-green add_commoncraft" type="button">See Pricing Including Common Craft</button>
        </div>
    </div>
</div>
<div class="modal order-modal" id="order-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Retrieve an Existing Order</h4>
            </div>
            <form class="modal-form form-horizontal" id="get-order-form" novalidate>
                <div class="modal-body">
                    <p>Enter your order number below to retrieve your order and complete the transaction.</p>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Order Number</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="order_num" value="" maxlength="13" placeholder="Enter the order number here">
                            <span class="help-block"></span>
                            <span class="format-help text-muted">Format: XXXX-XXXX-XXXXX or XXXXXXXXXXXXX</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-orange" type="submit">Retrieve Order &gt;</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal renew-modal" id="renew-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Renew an Existing Subscription</h4>
            </div>
                <div class="modal-body">
                            <iframe height="360" width="560" frameborder="0" src="/login?school"></iframe> 
                <div class="modal-footer">
                    <button class="btn btn-orange" type="button" data-dismiss="modal">Close</button>
                </div>
           </div>
       </div>
    </div>
</div>

<div class="modal fade custom-quote-modal" id="custom-quote-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Contact us for a custom quote</h4>
            </div>
            <div class="modal-body">
                <p>
                    Stephanie Schiff<br>
                    Manager - Education Products<br>
                    Email: <a href="mailto:schools@goanimate4schools.com">schools@goanimate4schools.com</a><br>
                    Phone: +1 (888) 360-9639 ext. 707
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade company-modal" id="company-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Company Information</h4>
            </div>
            <div class="modal-body">
                <p>
                    Official and Remittance Address:<br>
                    GoAnimate, Inc.<br>
                    204 East 2nd Avenue, Suite 638<br>
                    San Mateo, CA 94401<br>
                    Attn: Finance
                </p>

                <p>
                    Contact Information: Stephanie Schiff, Manager - Education Products<br>
                    tel: 888-360-9639<br>
                    fax: 888-360-9639
                </p>

                <p>EIN# 98-0585510</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade get-quote-modal" id="get-quote-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">How can I get an invoice or quote?</h4>
            </div>
            <div class="modal-body">
                <p>Select a plan and fill out all necessary information. You will be able to download an invoice, formal quote, or an order summary on the Order Summary page.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade payment-modal" id="payment-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">What if I am not in charge of payment?</h4>
            </div>
            <div class="modal-body">
                <p>Select a plan of your choice and fill out all necessary information. You will get an order number when you reach the Order Summary page.</p>
                <p>The person in charge of payment can retrieve your order with the order number and complete the transaction. Your subscription will be activated when the transaction has been successfully completed.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade whitelist-modal" id="whitelist-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Whitelist our domain name</h4>
            </div>
            <div class="modal-body">
                <p>Please ask your tech department to "whitelist" the domain <b><u>goanimate4schools.com</u></b> for both web and email traffic. This will ensure you receive all communications from us.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>var currency = 'USD';</script>

<script src="/static/2015/school/js/plans.js"></script>

<footer class="site-footer hidden-print">
    <div class="container">
        <div class="row site-footer-nav">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h5>About GoAnimate</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://web.archive.org/web/20150323091609/http://goanimate.com/about">Who We Are</a></li>
                        <li><a href="https://web.archive.org/web/20150323091609/http://goanimate.com/contactus">Contact Us</a></li>
                        <li><a href="https://web.archive.org/web/20150323091609/http://goanimate.com/video-maker-tips">Blog</a></li>
                        <li><a href="https://web.archive.org/web/20150323091609/http://press.goanimate.com/">Press</a></li>
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
                    GoAnimate &copy; 2021
                </div>
            </div>
        </div>

    </div>
</footer>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            This content requires the Adobe Flash Player 10.3. <a href="https://web.archive.org/web/20150323091609/http://get.adobe.com/flashplayer/">Get Flash</a>
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
</html>
<!--
     FILE ARCHIVED ON 09:16:09 Mar 23, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:12:18 Nov 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.
     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 332.333
  exclusion.robots: 120.76
  exclusion.robots.policy: 120.753
  xauthn.identify: 90.863
  xauthn.chkprivs: 29.702
  RedisCDXSource: 1.611
  esindex: 0.007
  LoadShardBlock: 190.577 (3)
  PetaboxLoader3.datanode: 158.666 (4)
  CDXLines.iter: 16.674 (3)
  load_resource: 201.874
  PetaboxLoader3.resolve: 138.924
-->
