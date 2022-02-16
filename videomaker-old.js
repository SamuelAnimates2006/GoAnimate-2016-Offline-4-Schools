interactiveTutorial.isShowTutorial = false;
        var hideHTMLBox = function() {
            window.close();
        };
        function tutorialStarted() {
        }
        function tutorialStep(sn) {
        }
        function tutorialCompleted() {
            $.ajax({
                type: 'POST',
                url: '/ajax/tutorialStatus/completed'
            });
        }
        var enable_full_screen = true;
        var studio_data = {
            id: "Studio",
            swf: "https://josephcrosmanplays532.github.io/Vyond-Legacy-2019-Offline/server/animation/414827163ad4eb60/go_full.swf",
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
        studio_data.flashvars = ${JSON.stringify(params.flashvars)};
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
            show_cc_ad = false;
            // CC template studio widget
            if (show_cc_ad) {
                _ccad = new CCBannerAd("business");
                (function() {
                    var ccId = undefined;
                    _ccad
                        .onBuyCCInsufficientBalance(function() {
                            $('#Studio').get(0).showBuyGoBuckPopUp();
                        })
                        .onBuyCCComplete(function(aid, trackInfo, templateId) {
                            if (trackInfo) {
                            var logger = CCStandaloneBannerAdUI.gaLogTx.createCCPartLogger(aid);
                            if (templateId) {
                                logger.setTemplateId(templateId);
                            }
                            $.grep(trackInfo.parts, function(n, i) {
                                return $.inArray(n.ctype, [ 'GoUpper', 'GoLower', 'upper_body', 'lower_body', 'hair' ]) >= 0;
                            }).each(function(n) {
                                logger.addItem(n);
                            });
                            logger.submit();
                            }
                            ccId = aid;
                            if (typeof ccId != undefined) {
                                try {
                                    $('#Studio').get(0).reloadAllCC(ccId);
                                } catch (e) {
                                }
                                ccId = undefined;
                            }
                        });
                })();
            }
            show_voice_ad = true;
            $('#studio_container').append($('div.templates div.voice-vendor-ad').clone());
            if (show_voice_ad) {
                showVoiceAdWidget();
            }
            $('div#studioBlock').css('height', '0px');
            $('#studio_holder').flash(studio_data);
            full_screen_studio();
            ajust_studio();
        }
        function hideCCWidget() {
            show_cc_ad = false;
            $('div.studiotemplatebrowser').css('display', 'none');
            var widget_right = 0;
            if (show_voice_ad) {
                $('#studio_container div.voice-vendor-ad').css('right', widget_right);
                widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            }
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }
        function showVoiceAdWidget() {
            show_voice_ad = true;
            $('#studio_container div.voice-vendor-ad').css('display', 'block');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            $('#studio_container div.voice-vendor-ad').css('right', widget_right);
            widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }
        function hideVoiceAdWidget() {
            show_voice_ad = false;
            $('#studio_container div.voice-vendor-ad').css('display', 'none');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }
        function showWorknoteWidget() {
            show_worknote = true;
            $('#studio_container div.studio-worknote').css('display', 'block');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            if (show_voice_ad) {
                widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            }
            $('#studio_container div.studio-worknote').css('right', widget_right);
            ajust_studio();
            return false;
        }
        function hideWorknoteWidget() {
            show_worknote = false;
            $('#studio_container div.studio-worknote').css('display', 'none');
            ajust_studio();
            return false;
        }
        function toggleWorknoteContent() {
            $('#studio_container .studio-worknote').toggleClass('collapsed expand');
            ajust_studio();
            return false;
        }
        var studioApiReady = false;
        function studioLoaded() {
            studioApiReady = true;
            $(document).trigger('studioApiReady');
        };
        var studioWorknoteModule = null;
        var studioModule = null;
        var videoTutorial = null;
        $(document).ready(function() {
            if (enable_full_screen) {
                if (!false) {
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
                    studioModule = new StudioModule();
                }
                $('.ga-importer').prependTo($('#studio_container'));
            } else {
                $('#studioBlock').flash(studio_data);
            }
            // Video Tutorial
            videoTutorial = new VideoTutorial($("#video-tutorial"));
        })
        // restore studio when upsell overlay hidden
        .on('hidden.bs.modal', '#upsell-modal', function(e) {
            if ($(e.target).attr('id') == 'upsell-modal') {
                restoreStudio();
            }
        })
        .on('studioApiReady', function() {
            var api = studioApi($('#studio_holder'));
            api.bindStudioEvents();
            studioModule = new StudioModule();
        })
    var previewPlayer = new PreviewPlayer("wss://preview.vyond.com", true),
        previewPlayerRetryCount = 5;
    previewPlayer.setVideoElement(document.getElementById('h5-preview-player'));
    previewPlayer.setMovieId('');
    previewPlayer.setUserAuthenticationToken('1:760a913514c85f012a4977b79b920687c0b33a7b268c26340021d6720a6ea026:y8X5juI1C+TKXDaGsW/6CLASVlqRtMZyE2rJVx2aUzc=');
    previewPlayer.setFromPptConversion(false);
    previewPlayer.connect();
