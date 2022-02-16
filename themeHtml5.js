(function() {
        'use strict';
        var studioMode = 'full',
            themeName = 'business',
            copiedId = '',
            editType = null;
        switch (studioMode) {
            case 'full':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_NEW;
                break;
            case 'edit':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_EDIT;
                break;
            case 'copy':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_COPY;
                break;
            case 'remix':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_REMIX;
                break;
            default:
                break;
        }
        if (editType !== null) {
            $(window).on('amplitude_loaded', function() {
                logAmplitudeEvent(AMPLITUDE_EVENT.LAUNCH_VM, {
                    theme: themeName,
                    edit_type: editType,
                    video_id: '',
                    copied_id: copiedId
                }, {
                    latest_vm_launched: AMPLITUDE_EVENT_PROPERTIES.LEGACY_VM,
                    latest_vm_launched_legacy_date: '2019-12-15 18:58:56'
                });
            });
        }
    }());
    // Amplitude interface for Flash player.
    function logAmplitudeEvent(eventName, eventProperties, userData) {
        if (typeof amplitude === 'object') {
            if (eventName === AMPLITUDE_EVENT.PLAYS_VIDEO) {
                eventProperties["referral"] = document.referrer;
            }
            if (userData !== undefined) {
                amplitude.getInstance().setUserProperties(userData);
            }
            amplitude.getInstance().logEvent(eventName, eventProperties);
        }
    }
