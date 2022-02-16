<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO PREVIEW PAGE IF NOT LOGGED IN
if (!isset($_SESSION['login'])) {
  header("Location: https://app-ouranimate.herokuapp.com/go_full/previewVideoMaker/theme/light");
  exit();
}
?>
<?php if (isset($_GET["dark"])) { echo "<object id=\"obj\" data=\"https://josephcrosmanplays532.github.io/animation/503/go_full.swf\" type=\"application/x-shockwave-flash\" id=\"Studio\" swf=\"https://josephcrosmanplays532.github.io/animation/503/go_full.swf\" width=\"100%\" height=\"100%\" align=\"middle\" allowScriptAccess=\"always\" allowFullScreen=\"true\" wmode=\"window\" hasVersion=\"10.3\"><param name=\"flashvars\" value=\"apiserver=https%3A%2F%2Fapp-ouranimate.herokuapp.com%2F&storePath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fstore%2F50%2F%3Cstore%3E&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fstatic%2F477%2F%3Cclient_theme%3E&themeId=business&tlang=en_US&presaveId=m-17&goteam_draft_only=1&isWide=1&tray=retro&nextUrl=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fdashboard%2Fvideos\"> <param name=\"movie\" value=\"https://josephcrosmanplays532.github.io/animation/503/go_full.swf\"></object>"; } ?>
<?php if (isset($_GET["light"])) { echo "<link rel=\"stylesheet\" href=\"https://josephcrosmanplays532.github.io/pages/css/global.css\"><link rel=\"stylesheet\" href=\"https://josephcrosmanplays532.github.io/pages/css/swf.css\"><object id=\"obj\" data=\"https://josephcrosmanplays532.github.io/animation/"?><?php if (isset($_GET["swfId"])) { echo $_GET["swfId"]; } else { echo "503"; } ?><?php echo "/go_full.swf\" type=\"application/x-shockwave-flash\" id=\"Studio\" width=\"100%\" height=\"100%\"><param name=\"flashvars\" value=\"movieId=&loadas=0&asId=&originalId=&apiserver=https%3A%2F%2Fapp-ouranimate.herokuapp.com%2F&storePath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fstore%2F50%2F%3Cstore%3E&clientThemePath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fstatic%2F477%2F%3Cclient_theme%3E&animationPath=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fanimation%2F"?><?php if (isset($_GET["swfId"])) { echo $_GET["swfId"]; } else { echo "503"; } ?><?php echo "%2F&userId=0cf4CMw1ZNCk&username=bakeryb40488&uemail=bakeryb40488%40gmail.com&numContact=0&ut=23&ve=false&isEmbed=0&nextUrl=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fdashboard%2Fvideos&presaveId=m-17&bgload=https%3A%2F%2Fjosephcrosmanplays532.github.io%2Fanimation%2F"?><?php if (isset($_GET["swfId"])) { echo $_GET["swfId"]; } else { echo "503"; } ?><?php echo "%2Fgo_full.swf&lid=1&ctc=go&themeColor=silver&tlang=en_US&siteId=13&templateshow=false&forceshow=false&appCode=go&lang=en&tmcc=4048901&fb_app_url=%2F&is_published=0&is_private_shared=1&is_password_protected=false&upl=1&hb=1&pts=1&msg_index=&ad=0&has_asset_bg=1&has_asset_char=0&initcb=studioLoaded&retut=0&s3base=https%3A%2F%2Fs3.amazonaws.com%2Ffs.goanimate.com%2F%2Chttps%3A%2F%2Fassets.vyond.com%2F&st=&uisa=0&u_info=OjI6elg5SnZCOUEyTHZiY2lhZGRXTm9Nd0ljVWhNbEpGaXJFdkpEdkltdEp6RWhrQ0VIbXZIVTBjRTlhUGZKMjJoVHVTUE5vZk1XYnFtSE1vZG5TeldyQVJNcDFmUFB2NDVtR0FTSlZZ&tm=FIN&tray=retro&isWide=1&newusr=1&goteam_draft_only=0\"> <param name=\"allowScriptAccess\" value=\"always\"></object></body><iframe style=\"display:none\" name=\"dummy\"></iframe><script src=\"../../../videomaker.js\"></script>

<div id=\"import_popup_container\" style=\"display:none\">
	<div id=\"import_popup\">
		<h2 id=\"import-an-asset\">Import an Asset</h2>
		<p class=\"close-button\" onclick=\"hideImporter()\">X</p>
		<!-- Import form -->
		<div id=\"import_image\">
			<form id=\"uploadbanner\" enctype=\"multipart/form-data\" method=\"post\" action=\"/ajax/saveUserProp\" target=\"dummy\">
				<input id=\"fileupload\" name=\"import\" type=\"file\" accept=\".mp3,.wav,.png,.jpg\">
				<h3 id=\"import-as\">Import As:</h3>
				<input type=\"radio\" value=\"prop\" name=\"subtype\"> Prop</input>
				<br />
				<input type=\"radio\" value=\"background\" name=\"subtype\"> Background</input>
				<br />
				<input type=\"submit\" value=\"Import\" onclick='document.getElementById(\"Studio\").importerUploadComplete(\"importerUploadComplete\"); document.getElementById(\"import_popup_container\").style.display = \"none\";' id=\"submit\" class=\"button_import\" />
			</form>
		</div>
	</div>
</div>
<div id=\"preview_popup_container\" style=\"display:none\">
	<div id=\"preview_popup\">
		<h2 id=\"preview-video\">Preview Video</h2>
		<p class=\"close-button\" onclick=\"hidePreviewer()\">X</p>
		<object data=\"https://josephcrosmanplays532.github.io/animation/"?><?php if (isset($_GET["swfId"])) { echo $_GET["swfId"]; } else { echo "503"; } ?><?php echo "/player.swf\" type=\"application/x-shockwave-flash\" id=\"preview_player\">
			<!-- The flashvars are a huge mess, have fun looking at them. :) -->
			<param name=\"flashvars\" value=\"apiserver=https://app-ouranimate.herokuapp.com/&storePath=https://josephcrosmanplays532.github.io/store/50/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://josephcrosmanplays532.github.io/static/477/<client_theme>&themeId=custom&tlang=en_US&isInitFromExternal=1&goteam_draft_only=1&isWide=1&collab=0&startFrame=previewStartFrame&autostart=1&nextUrl=../../../dashboard/videos&tray=custom\">
			<param name=\"allowScriptAccess\" value=\"always\">
			<param name=\"allowFullScreen\" value=\"true\">
		</object>
                <a class=\"button_big text-uppercase\" href=\"#\" onclick=\"hidePreviewer()\">Back to editing</a>
		<a class=\"button_big text-uppercase\" href=\"#\" onclick=\"saveVideo()\">Save now</a>
	</div>
</div>"; } ?>
