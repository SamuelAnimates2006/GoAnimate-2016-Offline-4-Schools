$('#demo-video').on('show.bs.modal', function(e) {
    $(this).find('.embed-responsive').html('<iframe class="embed-responsive-item" allowfullscreen src="https://www.youtube.com/embed/posciGtOQFY"></iframe>');
}).on('hide.bs.modal', function(e) {
    $(this).find('.embed-responsive').empty();
});
