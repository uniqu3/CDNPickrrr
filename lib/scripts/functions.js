ZeroClipboard.setMoviePath('../modules/CDNPickrrr/lib/scripts/ZeroClipboard.swf');
jQuery(function ($) {
    $('#code:empty').hide();
    $('.cb-enable').click(function () {
        var parent = $(this).parents('.switch');
        $('.cb-disable', parent).removeClass('selected');
        $(this).addClass('selected');
        $('.checkbox', parent).attr('checked', true);
        var val = $(':checkbox:checked').map(function () {
            return $(this).next().html();
        }).get();
        $('#code').html(val.join('<br />'));
        $('#code').show();
    });
    $('.cb-disable').click(function () {
        var parent = $(this).parents('.switch');
        $('.cb-enable', parent).removeClass('selected');
        $(this).addClass('selected');
        $('.checkbox', parent).attr('checked', false);
        var val = $(':checkbox:checked').map(function () {
            return $(this).next().html();
        }).get();
        $('#code').html(val.join('<br />'));
        $('#code:empty').hide();
    });
    $('#resources li div.version').each(function () {
        clip = new ZeroClipboard.Client();
        clip.setHandCursor(true);
        var title = $(this).attr('title');
        var text = '<script src="' + $(this).find('.url').text() + '"></script>';
        clip.setText(text);
        var width = $(this).width();
        var height = $(this).height();
        var flash_movie = '<div>' + clip.getHTML(width, height) + '</div>';
        flash_movie = $(flash_movie).css({
            position: 'relative',
            marginBottom: -height,
            width: width,
            height: height,
            zIndex: 101
        })
        clip.addEventListener('complete', function (client, text) {
            alert(title + '\n' + text);
        });
        $(this).before(flash_movie);
    });
});