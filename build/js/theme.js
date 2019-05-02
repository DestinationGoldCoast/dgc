/**
 * File theme.js.
 *
 * Contains all the fancy jQuery to make DGC do its things.
 *
 */
(function($) {
    'use strict';
    $('#other-site-button').click(function() {
        $(this).addClass('up');
        $('#other-site-overlay').addClass('show');
        $('#other-site-modal').addClass('show');
    });
    $('#other-site-overlay').click(function() {
        $(this).removeClass('show');
        $('#other-site-button').removeClass('up');
        $('#other-site-modal').removeClass('show');
    });
})(jQuery);