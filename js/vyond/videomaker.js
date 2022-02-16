$(function() {
    $('.btn-vm').on('click', function() {
        var theme = $(this).data('theme-id');

        amplitudeTrackEvent(
            AMPLITUDE_EVENT.CTA_THEME_SELECT,
            $.extend(
                {"job_role":"Accounting\/Finance","plan":"free_trial"},
                {
                    theme: theme,
                }
            )
        );
    });

    $('.vm-tutorial-trigger').click(function(e) {
        e.preventDefault();

        var $tutorial = $('.vm-tutorial');

        if ($tutorial.hasClass('expand')) {
            $('.tutorial-video').hide();
            wistiaEmbed && wistiaEmbed.pause();
        } else {
            setTimeout(function() {
                $('.tutorial-video').show();
                wistiaEmbed && wistiaEmbed.play();
            }, 400);
        }

        $tutorial.toggleClass('expand');
    });

    // acts like the select button when click on the cover video
    $('.theme').each(function() {
        var $button = $('.theme__content__cta > .btn:first-child', this);

        $('.theme__top', this).click(function(e) {
            e.preventDefault();

            if ($button.is(':hidden, :disabled')) {
                return;
            }

            if ($button.attr('href') !== undefined) {
                window.location.href = $button.attr('href');
            } else {
                $button.trigger('click');
            }
        });
    });

    function playVideo() {
        if (this.paused) {
            this.play();
        }
    }

    function resetVideo() {
        this.pause();

        // to show the video poster and make video plays from the beginning
        this.load();
    }

    $('.theme__top__video').hover(playVideo, resetVideo);
});
