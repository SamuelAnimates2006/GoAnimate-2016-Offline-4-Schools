<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Share video</h3>
        </div>
        <div class="modal-body">

            <h4 class="compact">Embed this GoAnimate video on other sites</h4>
            <p>Let users watch this GoAnimate video on other sites using the GoAnimate embedded player.</p>
            <div class="row">
                <div class="col-md-6">                        <a class="share-btn facebook gtm-ga-event" rel="tooltip" title="Post your video on Facebook" href="#" data-gtmv-action="Embed - Facebook - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_FACEBOOK); FB.ui({method: 'share', href: 'https://action-ouranimate.herokuapp.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>utm_source=social&amp;utm_medium=facebook&amp;utm_campaign=usercontent'}); return false;"></a>
                        <a class="share-btn pinterest gtm-ga-event" rel="tooltip" title="Post your video on Pinterest" href="//pinterest.com/pin/create/button/?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>%3Dutm_source%3Dsocial%26utm_medium%3Dpinterest%26utm_campaign%3Dusercontent&amp;media=<?php if (isset($_GET["imgPintrestShareUrl"])) { echo $_GET["imgPintrestShareUrl"]; }?>&amp;description=<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>" data-gtmv-action="Embed - Pinterest - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_PINTEREST); window.open(this.href, '_blank','height=450,width=550,directories=no,menubar=no,scrollbars=yes,status=no,toolbar=no'); return false;"></a>
                                    </div>
                <div class="col-md-6">
                                        <div class="input-group">
                        <span class="input-group-addon">&lt;/&gt;</span>
                        <input class="form-control gtm-ga-event" type="text" value="<iframe scrolling=&quot;no&quot; allowTransparency=&quot;true&quot; allowfullscreen frameborder=&quot;0&quot; width=&quot;640&quot; height=&quot;360&quot; src=&quot;https://action-ouranimate.herokuapp.com/player/embed/style?<?php if (isset($_GET["year"])) { echo $_GET["year"]; } else { echo "2015"; } ?>&movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>&title=<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>&desc=<?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?>&modified=<?php if (isset($_GET["modified"])) { echo $_GET["modified"]; }?>&creator=<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>&imgUrl=<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>&duration=<?php if (isset($_GET["duration"])) { echo $_GET["duration"]; }?>&utm_source=social&amp;utm_medium=tumblr&amp;utm_campaign=usercontent&quot; ></iframe>" data-gtmv-action="Embed - Click text field" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_EMBED); this.focus();this.select()">
                    </div>
                                    </div>
            </div>

            <div class="modal-body-separator"></div>

            <h4 class="compact">Share a link to this GoAnimate video</h4>
            <p>Users clicking this link will watch this video on GoAnimate.</p>
            <div class="row">
                <div class="col-md-6">
                                            <a class="share-btn linkedin gtm-ga-event" rel="tooltip" title="Post a link to your video on Linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>%3Dutm_source%3Dsocial%26utm_medium%3Dlinkedin%26utm_campaign%3Dusercontent&amp;title=loopl&amp;summary=&amp;source=GoAnimate" data-gtmv-action="Share - LinkedIn - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_LINKEDIN); window.open(this.href, '_blank','height=570,width=520,directories=no,menubar=no,scrollbars=yes,status=no,toolbar=no'); return false;"></a>
                        <a class="share-btn reddit gtm-ga-event" rel="tooltip" title="Post a link to your video on Reddit" href="http://www.reddit.com/submit?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>%3Dutm_source%3Dsocial%26utm_medium%3Dreddit%26utm_campaign%3Dusercontent" data-gtmv-action="Share - Reddit - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_REDDIT); window.open(this.href, '_blank'); return false;"></a>
                        <a class="share-btn twitter gtm-ga-event" rel="tooltip" title="Post a tweet about your video" href="https://twitter.com/share?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>%3Dutm_source%3Dsocial%26utm_medium%3Dtwitter%26utm_campaign%3Dusercontent&amp;text=loopl" data-gtmv-action="Share - Twitter - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_TWITTER); window.open(this.href, '_blank','height=450,width=550,directories=no,menubar=no,scrollbars=yes,status=no,toolbar=no'); return false;"></a>
                        <a class="share-btn su gtm-ga-event" rel="tooltip" title="Post a link to your video on StumbleUpon" href="http://www.stumbleupon.com/submit?url=https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fvideos%2F%3Fmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>%3Dutm_source%3Dsocial%26utm_medium%3Dstumbleupon%26utm_campaign%3Dusercontent" data-gtmv-action="Share - StumbledUpon - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_STUMBLEUPON);"></a>
                        <a class="share-btn tumblr gtm-ga-event" rel="tooltip" title="Post a link to your video on Tumblr" href="http://www.tumblr.com/share/video?embed=%3Ciframe+scrolling%3D%22no%22+allowTransparency%3D%22true%22+allowfullscreen+frameborder%3D%220%22+width%3D%22640%22+height%3D%22360%22+src%3D%22https%3A%2F%2Faction-ouranimate.herokuapp.com%2Fplayer%2Fembed%2Fstyle%3F<?php if (isset($_GET["year"])) { echo $_GET["year"]; } else { echo "2015"; } ?>%3Dmovie%26<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>%3Futm_source%3Dsocial%26utm_medium%3Dtumblr%26utm_campaign%3Dusercontent%22+%3E%3C%2Fiframe%3E%0A&amp;caption=loopl" data-gtmv-action="Share - Tumbler - Click" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_TUMBLR);"></a>
                                    </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon">URL</span>
                        <input class="form-control gtm-ga-event" type="text" value="http://action-ouranimate.herokuapp.com/videos/?movie=<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>&title=<?php if (isset($_GET["title"])) { echo $_GET["title"]; }?>&desc=<?php if (isset($_GET["desc"])) { echo $_GET["desc"]; }?>&modified=<?php if (isset($_GET["modified"])) { echo $_GET["modified"]; }?>&creator=<?php if (isset($_GET["creator"])) { echo $_GET["creator"]; }?>&imgUrl=<?php if (isset($_GET["imgUrl"])) { echo $_GET["imgUrl"]; }?>&duration=<?php if (isset($_GET["duration"])) { echo $_GET["duration"]; }?>&imgPintrestShareUrl=https%3A%2F%2Fvyondlegacy2019.herokuapp.com%2Fmovie_thumbs%2F<?php if (isset($_GET["movie"])) { echo $_GET["movie"]; }?>.png&utm_source=linkshare&amp;utm_medium=linkshare&amp;utm_campaign=usercontent" data-gtmv-action="Share - Click text field" data-gtmv-category="" data-gtmv-label="10753900 - Guest" onclick="amplitudeTrackShare(AMPLITUDE_EVENT_PROPERTIES.SHARE_LINK_SHARE); this.focus(); this.select()">
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
