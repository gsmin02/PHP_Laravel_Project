(function ($) {
    "use strict";

    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
		console.log('a');
        $('.sidebar, .content').toggleClass("open");
        return false;
    });
    
})(jQuery);

