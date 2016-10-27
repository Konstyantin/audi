/**
 * Created by kostya on 10.10.16.
 */
;(function ($,undefined) {

    var app = {

        /**
         * Initialization App methods
         *
         * @return methods
         */
        init:function () {
            this.nav_dropdown();
        },

        /**
         * Creat mouseover dropdown site navigation
         */
        nav_dropdown:function () {
            /**
             * Declare variable
             * @type {*|HTMLElement}
             */
            var nav = $('.nav'),
                nav_drop = nav.find('.dropdown'),
                drop_menus = nav.find('.dropdown-menu'),

                duration = 200;

            /**
             * Desribe behavior "mouseover" element
             */
            nav_drop.on('mouseover',function () {
                var $this = $(this),
                    drop_menu = $this.find('.dropdown-menu');

                $this.addClass('open');
            });

            /**
             * Desribe behavior "mouseleave" element
             */
            nav_drop.on('mouseleave',function () {
                var $this = $(this),
                    drop_menu = $this.find('.dropdown-menu');

                if($this.hasClass('open')){
                    $this.removeClass('open');
                }
            });
        },

        /**
         * Hide element
         * @param {html} elem
         * @param {number} duration
         */
        slidesUp:function (elem,duration) {
            elem.stop(true,true).slideUp(duration);
        },

        /**
         * Show element
         * @param {html}elem
         * @param {number}duration
         */
        slidesDown:function (elem,duration) {
            elem.stop(true,true).slideDown(duration);
        },
    }

    /**
     * Initialization App
     */
    app.init();

})(jQuery)