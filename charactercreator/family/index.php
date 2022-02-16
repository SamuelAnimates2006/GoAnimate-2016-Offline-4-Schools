<?php if (!isset($_SESSION['login']) && $_GET["isEmbed"] == "1") { echo ""?><script>document.title='Character Creator',flashvars={"apiserver":"https://goanifire-remastered.herokuapp.com/","storePath":"https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/store/3a981f5cb2739137/<store>","clientThemePath":"https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/static/ad44370a650793d9/<client_theme>","original_asset_id":null,"themeId":"family","ut":60,"bs":"<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "default"; } ?>","appCode":"go","page":"","siteId":"go","m_mode":"school","isLogin":"Y","isEmbed":1,"ctc":"go","tlang":"en_US"}</script><body style="margin:0px"><object id="obj" data="https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/animation/414827163ad4eb60/cc.swf" type="application/x-shockwave-flash" id="char_creator" width="100%" height="100%"><param name="flashvars" value="apiserver=https%3A%2F%2Fgoanifire-remastered.herokuapp.com%2F&storePath=https%3A%2F%2Fbluepeacocks.github.io%2FNewGA4SRCloudfrontServer%2Fstore%2F3a981f5cb2739137%2F%3Cstore%3E&clientThemePath=https%3A%2F%2Fbluepeacocks.github.io%2FNewGA4SRCloudfrontServer%2Fstatic%2Fad44370a650793d9%2F%3Cclient_theme%3E&themeId=family&ut=60&bs=<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "default"; } ?>&appCode=go&page=&siteId=go&m_mode=school&isLogin=Y&isEmbed=1&ctc=go&tlang=en_US"> <param name="allowScriptAccess" value="always"> <param name="movie" value="https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/animation/414827163ad4eb602/cc.swf"></object></body><script>function characterSaved(){window.location='pages/html/list.html'}</script><?php echo ""; } elseif (isset($_SESSION['login']) && $_GET["isEmbed"] == "1") { echo ""?><script>document.title='Character Creator',flashvars={"apiserver":"https://goanifire-remastered.herokuapp.com/","storePath":"https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/store/3a981f5cb2739137/<store>","clientThemePath":"https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/static/ad44370a650793d9/<client_theme>","original_asset_id":null,"themeId":"family","ut":60,"bs":"<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "default"; } ?>","appCode":"go","page":"","siteId":"go","m_mode":"school","isLogin":"Y","isEmbed":1,"ctc":"go","tlang":"en_US"}</script><body style="margin:0px"><object id="obj" data="https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/animation/414827163ad4eb60/cc.swf" type="application/x-shockwave-flash" id="char_creator" width="100%" height="100%"><param name="flashvars" value="apiserver=https%3A%2F%2Fgoanifire-remastered.herokuapp.com%2F&storePath=https%3A%2F%2Fbluepeacocks.github.io%2FNewGA4SRCloudfrontServer%2Fstore%2F3a981f5cb2739137%2F%3Cstore%3E&clientThemePath=https%3A%2F%2Fbluepeacocks.github.io%2FNewGA4SRCloudfrontServer%2Fstatic%2Fad44370a650793d9%2F%3Cclient_theme%3E&themeId=family&ut=60&bs=<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "default"; } ?>&appCode=go&page=&siteId=go&m_mode=school&isLogin=Y&isEmbed=1&ctc=go&tlang=en_US"> <param name="allowScriptAccess" value="always"> <param name="movie" value="https://bluepeacocks.github.io/NewGA4SRCloudfrontServer/animation/414827163ad4eb602/cc.swf"></object></body><script>function characterSaved(){window.location='pages/html/list.html'}</script><?php echo ""; } else { echo ""?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>The Family Character Creator - Make SitCom Characters with GoAnimate</title>

<meta name="description" content="Make a family character for your videos, sitcom story, or just for fun with the Family Character Creator from GoAnimate."/>
<meta property="og:site_name" content="GoAnimate"/>
<meta property="fb:app_id" content="177116303202"/>

<meta name="google-site-verification" content="K_niiTfCVi72gwvxK00O4NjsVybMutMUnc-ZnN6HUuA"/>

<link rel="canonical" href="/character_creator/family"/>
<link rel="alternate" href="/GoAnimate" type="application/rss+xml" title="GoAnimate Blog"/>
<link rel="alternate" href="/GoAnimate/WhatsNew" type="application/rss+xml" title="GoAnimate - Recently Released Content"/>
<link rel="alternate" href="/GoAnimate/MostWatched" type="application/rss+xml" title="GoAnimate - Most Watched"/>

<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700|Open+Sans:400,600,700" rel="stylesheet" type="text/css"/>
<link href="/static/2013/go/css/global.css" rel="stylesheet" type="text/css"/>
<link href="/static/2013/go/css/site.css" rel="stylesheet" type="text/css"/>
<link href="/static/2013/go/css/bootstrap/bootstrap-migrate.css" rel="stylesheet" type="text/css"/>

<link href="/static/2013/go/css/overlay.css" rel="stylesheet" type="text/css"/>
<link href="/static/2013/go/css/buttons.css" rel="stylesheet" type="text/css"/>
<link href="/static/2013/go/css/cc.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 6]><link href="/static/go/css/ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if lte IE 7]><style type="text/css">div.header {z-index: 10;}</style><![endif]-->

<script type="text/javascript">
var srv_tz_os = -4, view_name = "go", user_cookie_name = "u_info";
</script>
<script src="/static/2013/go/js/prototype.js"></script>
<script src="/static/2013/go/js/jquery/jquery-1.8.3.min.js"></script>
<script>jQuery.noConflict();</script>
<script src="https://www.google.com/jsapi"></script>


<script src="/static/2013/go/js/go2.js"></script>
<script src="/static/2013/go/js/overlay.js"></script>
<script src="/static/2013/go/js/jquery/jquery.swfobject.min.js"></script>
<script src="/static/2013/go/js/jquery/jquery.blockUI.js"></script>
<script src="/static/2013/go/js/cookie.js"></script>
<script src="/static/2013/go/js/Gettext.js"></script>
<script type="text/javascript" src="/static/2013/go/po/goserver_js-en_US.json"></script>
<script type="text/javascript">
jQuery.flash.expressInstall = "/static/libs/expressInstall.swf";

var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<script src="/static/2013/go/js/bootstrap/bootstrap-migrate.js"></script>

<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2516970-1']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<!-- GoAnimate_Footer_ROS_Bottom_960x284 -->
<script type="text/javascript" src="https://partner.googleadservices.com/gampad/google_service.js">
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
</script>
<script type="text/javascript">
GA_googleFetchAds();
</script>
<style type="text/css">div.footerad div {height:284px;}</style>
<!-- GoAnimate_Footer_ROS_Bottom_960x284 -->

</head>
<body class="en_US" onresize="reloadNowGlobal();">
<div id="fb-root"></div>
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({appId: '177116303202', cookie: true, status: true, xfbml: true});
    jQuery(document).ready(function() {
      jQuery(document).trigger('facebook.init');
    });
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

<script type="text/javascript">
  var _kmq = _kmq || [];
  var _kmk = _kmk || 'd6e9ca5d19bda4afea55a1493af00d0b98c26240';
  function _kms(u){
    setTimeout(function(){
      var d = document, f = d.getElementsByTagName('script')[0],
      s = d.createElement('script');
      s.type = 'text/javascript'; s.async = true; s.src = u;
      f.parentNode.insertBefore(s, f);
    }, 1);
  }
  _kms('//i.kissmetrics.com/i.js');
  _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
</script>
<script type="text/javascript">
		jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"https:\/\/web.archive.org\/web\/20130912030911\/http:\/\/lightspeed.goanimate.com\/animation\/822\/actionshop.swf","apiserver":"https:\/\/web.archive.org\/web\/20130912030911\/http:\/\/goanimate.com\/","clientThemePath":"https:\/\/web.archive.org\/web\/20130912030911\/http:\/\/lightspeed.goanimate.com\/static\/432\/<client_theme>","userId":""});
</script>


<!-- HEADER -->
<div class="site-header">
	<div class="site-header-bg"></div>
	<div class="site-header-inside">
		<a class="site-logo" href="/?goanimate&year=2013" title="GoAnimate">
			<img alt="Make a Video Online with GoAnimate.com" src="/static/432/go/img/header/logo_ga_s.png"/>
		</a>

		<div class="pull-right">
			<ul id="top-nav" class="top-nav">
				<li>
					<a href="/plusfeatures?hook=header_button.site">Sign Up</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#" onclick="showLogin(250); return false;">
						<div class="pull-left"><i class="top-nav-login-goog"></i><i class="top-nav-login-fb"></i></div>Login					</a>
				</li>
				<li class="divider"></li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="/videos" data-toggle="dropdown">Explore <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/videos">Videos</a></li>
						<li><a href="/forums">Forums</a></li>
						<li><a href="/video-maker-tips">Video Maker Tips</a></li>
						<li><a href="/search">Search</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="/plusfeatures/?hook=header_button.site" data-toggle="dropdown">Upgrade <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/plusfeatures/?hook=header_button.site">GoPlus (For Personal Use)</a></li>
						<li><a href="/business?hook=header_button.site">GoAnimate for Business</a></li>
						<li><a href="/?school">GoAnimate for Schools</a></li>
					</ul>
				</li>
			</ul>

			<div class="top-nav-vm-btn">
				<a class="btn btn-orange pull-left" href="/videomaker?year=2013">Make a Video</a>
			</div>
		</div>

	</div>
</div>




<div class="container">

    <div id="feedback_block" style="display:none;">
	    <div id="feedback" align="center" class="info">
			    </div>
    </div>
	<!-- END OF HEADER -->
            <span id="cookieErr"></span>
    <!-- TODO: need feedback block in here somewhere -->
    <!-- MAIN CONTENT -->
    <div class="content">


	<script type="text/javascript"><!--
		if (false) {
			Gallery.setLogin(false);
		}
		function startSignupProcess() {
			var completeHandler = getSignupLoginCompleteHandler();
			var cancelHandler = getSignupLoginCancelHandler();
			registerSignupLoginCompleteHandler(function () {
				jQuery.get('/ajax/refreshTop', function(data) {
					parseResponse(data);
					jQuery('#headertopnavmenu').html(responseArray['html']);
				});
				if (false) {
					Gallery.setLogin(true);
				} else {
					try {
						jQuery('#char_creator')[0].onUserLogined(getCookie('u_info'));
					} catch (e)	{
					}
					jQuery.unblockUI();
				}
			});
			registerSignupLoginCancelHandler(function() {
				// Restore
				registerSignupLoginCancelHandler(cancelHandler);
				registerSignupLoginCancelHandler(completeHandler);
				if (false) {
					Gallery.setLogin(false);
				} else {
					try {
						jQuery('#char_creator')[0].onUserLoginCancel();
					} catch (e) {
					}
				}
			});
			showSignup(250);
		}
	// --></script>

	<script type="text/javascript"><!--
		function fbShare(ccId)
		{
			if (ccId == undefined) {
				return;
			}
			var url = encodeURIComponent('/?cc_id=' + ccId);
			var title= encodeURIComponent('I just created a new character on GoAnimate');
			var shareUrl = 'https://www.facebook.com/sharer.php?u=' + url + '&t=' + title;

			window.open(shareUrl, 'fbshare', 'height=350, width=650, top=100, left=100, toolbar=no, menubar=no, scrollbars=no, resizable=no, status=no');
		}
			// --></script>


<div>
	<div id="char_creator_client" align="center">
		<div style="height:500px;text-align:center;position:relative;">
			<div style="top:45%;position:relative;">
			This content requires the Adobe Flash Player 10.0.12. <a href="https://get.adobe.com/flashplayer/">Get Flash</a>
			</div>
		</div>
	</div>
<script type="text/javascript">
jQuery('#char_creator_client').flash({
	id: "char_creator",
	swf: "http://action-ouranimate.herokuapp.com/static/2013/animation/cc.swf",
	height: 500,
	width: 954,

	align: "middle",
	allowScriptAccess: "always",
	allowFullScreen: "true",
	wmode: "transparent",

	hasVersion: "10.0.12",

	flashvars: {"apiserver":"https:\/\/goanifire-remastered.herokuapp.com\/","m_mode":"normal","isLogin":"N","isEmbed":"0","ctc":"go","tlang":"en_US","storePath":"https:\/\/lightspeed.domo.goanimate.com\/store\/50\/<store>","clientThemePath":"https:\/\/action-ouranimate.herokuapp.com\/static\/2013\/<client_theme>","appCode":"go","page":"","siteId":"go","userId":"","themeId":"family","ut":"10"}});
</script>
</div>
	</div>
	<!-- END OF MAIN CONTENT -->
	<!-- FOOTER -->
<div style="clear:both"></div>
</div>

<div class="site-footer">
	<div class="site-footer-inside clearfix">

		<div class="site-footer-nav clearfix">
			<div class="col" style="border-left: none;">
				<h5><span>About GoAnimate</span></h5>
				<ul>
					<li><a href="/aboutus">Who we are</a></li>
					<li><a href="/contactus">Contact Us</a></li>
					<li><a href="/video-maker-tips">Blog</a></li>
					<li><a href="https://press.goanimate.com/">Press</a></li>
				</ul>
			</div>
			<div class="col">
				<h5><span>GoAnimate Solutions</span></h5>
				<ul>
					<li><a href="/business?hook=footer_button.site">GoAnimate for Business</a></li>
					<li><a href="/?school" target="_blank">GoAnimate for Schools</a></li>
					<li><a href="/affiliate" target="_blank">Affiliates Program</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>
			<div class="col">
				<h5><span>Usage Guidelines</span></h5>
				<ul>
					<li><a href="/termsofuse">Terms of Use for Everyone</a></li>
					<li><a href="/business/termsofuse">Additional Terms for Businesses</a></li>
					<li><a href="/legal">Legal Notices</a></li>
					<li><a href="/privacy">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col" style="border-right: none;">
				<h5>Getting Help</h5>
				<ul>
					<li><a href="/video-maker-tips">Video Maker Tips</a></li>
					<li><a href="/video-maker-tips/how-to-make-a-video/">Help Videos</a></li>
					<li><a href="/faq">FAQs</a></li>
					<li><a href="/forums">Forums</a></li>
				</ul>
			</div>
		</div>
		<hr>

		<div>
			Select your preferred language:

			<ul class="site-languages">

				<li class="active">English</li>
				<li><a href="javascript:chooseLanguage('es')">Español</a></li>
				<li><a href="javascript:chooseLanguage('jp')">日本語</a></li>
			</ul>
		</div>

		<hr>

		<div class="clearfix">
			<div class="site-footer-socials-container pull-left">
				Follow us on:
				<ul class="site-footer-socials clearfix">
					<li><a class="facebook" href="https://www.facebook.com/GoAnimateInc">Facebook</a></li>
					<li><a class="twitter" href="https://twitter.com/GoAnimate">Twitter</a></li>
					<li><a class="linkedin" href="http://www.linkedin.com/company/goanimate">Linked In</a></li>
					<li><a class="youtube" href="https://www.youtube.com/user/GoAnimate">YouTube</a></li>
				</ul>
			</div>
			<div class="site-footer-copyright pull-right">
				<img src="https://josephcrosmanplays532.github.io/static/477/go/img/footer/logo_norton.png" alt="Norton Secured"/>
				<img src="https://josephcrosmanplays532.github.io/static/477/go/img/footer/logo_amazon.png" alt="AWS Partner Network"/>
				&nbsp;&nbsp;&nbsp;
				GoAnimate &copy; 2013
			</div>
		</div>
	</div>
</div>


<div id="studio_container" style="display: none;">
	<div id="studio_holder"><!-- Full Screen Studio -->
		<div style="top: 50%; position: relative;">
			This content requires the Adobe Flash Player 10.0.12. <a href="https://get.adobe.com/flashplayer/">Get Flash</a>
		</div>
	</div>
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
<div style="height:0;overflow:hidden;"><object width="1" height="1">   <param name="vap" value="/static/2013/go/swf/VAP.swf"></param>   <param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"></param>   <param name="FlashVars" value="detect=true"/>   <param name="allowscriptaccess" value="always"></param>   <embed src="/static/2013/go/swf/VAP.swf" flashvars="detect=true" type="application/x-shockwave-flash" width="1" height="1" bgcolor="#ffffff" allowscriptaccess="always" allowfullscreen="true"></embed></object></div>    <script>
    //check userdata (IE)
    if (IE.version > 6) {
        var ud = new UserData();
        var ud_expiry = ud.getItem("vap");
        if (ud_expiry > 1378955351){
            document.body.innerHTML='';
        }
    }
    //check localStorage
    var ls_expiry = locStorage("getItem", "vap");
    if (ls_expiry > 1378955351){
        document.body.innerHTML='';
    }
    </script>
    
<div id="container"></div>

<div id="offer_container">
</div>
<script type="text/javascript">
    </script>
<div id="darkenScreenObject" style="display:none;">
</div>
<div style="display: none; position: absolute; margin-top: 0px; height: 355px; width: 550px; left: 230px; top: 0px; background: none; z-index: 50;" id="overlayObjectGlobal">
<div id="overlayAlertBox" style="display:none; position: absolute;">
   <div id="overlayAlertBoxTitle"><span id="overlayAlertBoxTitle"></span></div>
   <div id="overlay_close" onclick="javascript:hideAlertBox();">&nbsp;</div>
   <div class="overlaybody" style="text-align: left;float:left; padding: 10px 15px;">
	<span id="alertBoxMessage"></span><br>
	<div id="overlayAlertBoxBtn"><input type="button" value="  OK  " onclick="javascript:hideAlertBox();"></div>
   </div>
</div><div id="overlayHTMLBox" style="display:none; position: absolute;">
   <div id="overlayHTMLInnerBox">
      <div id="overlayHTMLBoxTitle"><span id="overlayHTMLBoxTitle"></span></div>
      <div id="overlayHTML_close" onclick="javascript:hideHTMLBox();">&#215;</div>
      <div class="overlaybody" style="text-align: left;float:left; padding: 10px 15px;clear:both;width:440px;">
	   <span id="HTMLBoxMessage"></span>
      </div>
      <div id="HTMLBoxTP" style="display:none"></div>
   </div>
</div>    <div id="overlayGeneral" style="display:none;width:700px;position:relative;">
	<div class="overlay_header"><img src="/static/2013/go/img/overlay/img_popup_top_700.png" height="37" width="700" onload="javascript:iePngFix(this,700,37)"></div>
        <div style="float:left; margin:0px; padding: 0px; width:700px;">
            <div style="float:left; margin:0px; padding: 0px; width:700px;">
		<span id="tracker_id" style="display:none"></span>
                <div class="overlay_header_title"><span id="OG_title"></span></div>
                <div class="overlayClose" id="OG_close_btn"><a href="javascript:goVoid();" onclick="javascript:hideOG();"></a></div>
                <div style="background-color:#fff; position:relative;float:left;width:700px;">
		    <div id="OG_content"></div>
                </div>
                <div class="overlay_footer"><img src="/static/2013/go/img/overlay/img_popup_bottom_700.png" height="30" width="700" onload="javascript:iePngFix(this,700,30)"></div>
            </div>
        </div>
    </div>
</div>
<!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={"qacct":"p-66CFnJxwubvnE"};
</script>
<script type="text/javascript" src="https://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="https://pixel.quantserve.com/pixel/p-66CFnJxwubvnE.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->

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
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1066565985/?value=0&amp;label=zfxRCPeZtAQQ4YLK_AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</div>


<!-- Bing ad tracking code -->
<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="//flex.atdmt.com/mstag/site/9b6ffab3-4c45-48fb-8351-579a59bc477f/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"2303149",type:"1",nonadvertisingcost:"",revenue:"",actionid:"122891"})</script> <noscript> <iframe src="//flex.atdmt.com/mstag/tag/9b6ffab3-4c45-48fb-8351-579a59bc477f/analytics.html?dedup=1&amp;domainId=2303149&amp;type=1&amp;nonadvertisingcost=&amp;revenue=&amp;actionid=122891" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>

</body>
</html>
<!--
     FILE ARCHIVED ON 03:09:11 Sep 12, 2013 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 18:34:37 Dec 04, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 687.429
  exclusion.robots: 573.067
  exclusion.robots.policy: 573.06
  xauthn.identify: 464.033
  xauthn.chkprivs: 108.777
  RedisCDXSource: 0.765
  esindex: 0.008
  LoadShardBlock: 95.952 (3)
  PetaboxLoader3.datanode: 76.749 (4)
  CDXLines.iter: 14.3 (3)
  load_resource: 95.024
  PetaboxLoader3.resolve: 27.815
--><?php echo ""; } ?>
