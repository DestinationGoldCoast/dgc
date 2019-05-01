/**
 * File theme.js.
 *
 * Contains all the fancy jQuery to make DGC do its things.
 *
 */
(function($) {
    'use strict';
    $('#other-site-button').click(function() {
        $('#other-site-overlay').addClass('show');
        $('#other-site-modal').addClass('show');
    });
    $('#other-site-overlay').click(function() {
        $(this).removeClass('show');
        $('#other-site-modal').removeClass('show');
    });
})(jQuery);