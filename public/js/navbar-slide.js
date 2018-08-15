$( document ).ready(function() {
    $(function () {
        var lastScrollTop = 0;
        var $navbar = $('.navbar');
        var navbarHeight = $navbar.outerHeight();
        var movement = 0;
        var lastDirection = 0;

        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            movement += st - lastScrollTop;

            if (st > lastScrollTop) { // scroll down
                if (lastDirection != 1) {
                    movement = 0;
                }
                var margin = Math.abs(movement);
                if (margin > navbarHeight) {
                    margin = navbarHeight;
                }
                margin = -margin;
                $navbar.css('margin-top', margin+"px")

                lastDirection = 1;
            } else { // scroll up
                if (lastDirection != -1) {
                    movement = 0;
                }
                var margin = Math.abs(movement);
                if (margin > navbarHeight) {
                    margin = navbarHeight;
                }
                margin = margin-navbarHeight;
                $navbar.css('margin-top', margin+"px")

                lastDirection = -1;
            }

            lastScrollTop = st;
            // console.log(margin);
        });
    });
});
