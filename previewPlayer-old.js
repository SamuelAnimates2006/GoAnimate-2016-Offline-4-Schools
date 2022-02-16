$("#previewPlayerContainer, #video-tutorial").hide();

var movieDataXmlStr = null,
    filmXmlStr = null,
    previewStartFrame = 0;

function checkBrowser() {
    return window.WebSocket && window.MediaSource;
}

function checkTheme(themeList) {
    if (themeList === undefined) {
        return true;
    }

    var themeCount = themeList.length,
        h5Themes = {
            'common' : true,
            'infographics': true,
            'business': true,
            'whiteboard': true,
            'commoncraft': true
        };

    for (var i = 0; i < themeCount; i++) {
        if (h5Themes[themeList[i]] === undefined) {
            return false;
        }
    }

    return true;
}

function checkPreviewServer() {
    return previewPlayer._connectionState === PreviewPlayerConstants.STATE_READY;
}

function loadH5Preview() {
    if (filmXmlStr === null) {
        return;
    }

    $('#h5-playerdiv').data('previewPlayerControl').reset();
    previewPlayer.preview(filmXmlStr, previewStartFrame);
    $('#previewPlayer').addClass('using-h5');
}

function loadLegacyPreview() {
    if (movieDataXmlStr === null) {
        return;
    }

    pauseH5PreviewPlayer();

    savePreviewData(movieDataXmlStr);
    createPreviewPlayer("playerdiv", {
        height: 360,
        width: 640,
        player_url: "https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/animation/414827163ad4eb60/player.swf",
        quality: "high"
    }, {
        movieOwner: "", movieOwnerId: "", movieId: "", ut: "-1",
        movieLid: "8", movieTitle: "", movieDesc: "", userId: "", username: "", uemail: "",
        apiserver: "/", thumbnailURL: "", copyable: "0", isPublished: "0", ctc: "go", tlang: "en_US", is_private_shared: "0",
        autostart: "1", appCode: "go", is_slideshow: "0", originalId: "0", is_emessage: "0", isEmbed: "0", refuser: "",
        utm_source: "", uid: "", isTemplate: "1", showButtons: "0", chain_mids: "", showshare: "0", averageRating: "",
                    s3base: "https://s3.amazonaws.com/fs.goanimate.com/,https://assets.vyond.com/",
                ratingCount: "", fb_app_url: "/", numContact: 0, isInitFromExternal: 1, storePath: "https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/store/3a981f5cb2739137/<store>", clientThemePath: "https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/static/ad44370a650793d9/<client_theme>", animationPath: "https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/animation/414827163ad4eb60/",
        startFrame: previewStartFrame
    });
    $('#previewPlayer').removeClass('using-h5');
}

function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
    movieDataXmlStr = dataXmlStr;
    previewStartFrame = startFrame;

    filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];

    if (typeof startFrame == 'undefined') {
        startFrame = 1;
    } else {
        startFrame = Math.max(1, parseInt(startFrame));
    }

    if (containsChapter) {
        $("#preview-alert-block").show();
    } else {
        $("#preview-alert-block").hide();
    }

    previewSceen();

    $("#previewPlayerContainer").show();

    var isThemeSupport = checkTheme(themeList);

    if (checkBrowser() && isThemeSupport && checkPreviewServer()) { // Preview with next
        loadH5Preview();
    } else {
        // fallback to legacy preview
        loadLegacyPreview();

        if (!checkPreviewServer() && (previewPlayerRetryCount > 0)) { // Retry on WebSocket connection problem
            previewPlayer.connect();
            previewPlayerRetryCount--;
        }
    }
}

function pauseH5PreviewPlayer() {
    $("#h5-preview-player").get(0).pause();
}

function switchBackToStudio() {
    try {
        ($("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
    } catch (err) {};

    pauseH5PreviewPlayer();

    $("#previewPlayerContainer").hide();
    restoreStudio();
    document.getElementById("Studio").onExternalPreviewPlayerCancel();
}
function publishStudio() {
    try {
        ($("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
    } catch (err) {};

    pauseH5PreviewPlayer();

    $("#previewPlayerContainer").hide();
    restoreStudio();
    document.getElementById("Studio").onExternalPreviewPlayerPublish();
}
function exitStudio(share) {
    loadedFullscreenStudio = false;
}

function studioUpsellUpgrade() {
    $('#upsell-modal').modal('hide');
    restoreStudio();
    document.getElementById("Studio").onUpsellUpgrade();
}

function customFontBanner() {
    var plansAndPricingUrl = 'https://www.vyond.com/pricing';
    window.open(plansAndPricingUrl, '_blank');
}

window.addEventListener(PreviewPlayerEvent.ANIMATION_INCOMPATIBLE, function() {
    loadLegacyPreview();
});

VideoTutorial.tutorials.composition = {
    title: 'Composition Tutorial',
    wistiaId: 'nuy96pslyp',
};
VideoTutorial.tutorials.enterexit = {
    title: 'Enter and Exit Effects Tutorial',
    wistiaId: 'fvjsa3jnzc',
}
