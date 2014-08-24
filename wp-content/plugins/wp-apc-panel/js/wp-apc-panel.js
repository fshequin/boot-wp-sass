jQuery(function($) {
    var el = $('#makevisible');

    el.removeAttr('disabled');

    el.click(function() {
        $.ajax({
            type: 'post',
            data: 'make_visible=' + ( el.is(':checked') ? '1' : '0' )
                + '&action=wap_visible_to_site_admins&'
                + el.next().attr('name') + '=' + el.next().val(),
            url: ajaxurl,
            beforeSend: function() {
                el.attr('disabled', 'disabled');
            },
            success: function( r ) {
                if( r == 1 ) {
                    var optionSaved = $('<span>Option saved! </span>');
                    el.before( optionSaved );
                    optionSaved.fadeOut( 1000, function() { optionSaved.remove(); });
                }

                el.removeAttr('disabled');
            },
            error: function() {
                el.removeAttr('disabled');
            }
        });
    });
});