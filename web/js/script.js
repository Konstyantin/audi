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
            this.imageManager();
            this.scrollTop();
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
                    drop_menu = $(this).find('.dropdown-menu');

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

        /**
         * ImageManager method allow to manage the found images
         * according to the attribute
         */
        imageManager:function () {

            var listImage = $('.list-image'),
                btn = listImage.find('.btn');


            listImage.on('click','a',function (e) {
                e.preventDefault();

                var $this = $(this),
                    url = $this.attr('href'),
                    image = $this.attr('data-image');
                app.ajaxRequest(url,image)
            });
        },

        /**
         * AjaxRequest method sends the received attributes to the server
         * if server return true, method perform reload page
         *
         * @param url
         * @param param
         */
        ajaxRequest:function (url,param) {
            $.ajax({
                url:url,
                data:{param:param},
                success:function (data) {
                    var elem = $('.test');
                    app.reuseSearch(elem);
                }
            });
        },

        /**
         * Method perform scroll top with animate effect 
         * @param duration
         */
        lookUp:function (duration) {
            $('html,body').stop(true,true).animate({scrollTop:0},duration);
        },

        /**
         * Method perform recycling event with select element
         * @param elem
         */
        reuseSearch:function (elem) {
            if(elem.click()){
                app.lookUp();
            }
        },

        /**
         * Method perform the display btn by scrolling page
         * at click on btn will execute method lookUp()
         */
        scrollTop:function () {
            var btn = $('.scrollTop');

            btn.on('click',function () {
                app.lookUp(1000);
            });

            $(window).on('scroll',function () {
                var $this = $(this),
                    height = $this.height(),
                    top = $this.scrollTop();

                app.hideElem(btn);

                if(top > height){
                    app.showElem(btn);
                }
            })
        },

        /**
         * Hide elem set display:none
         *
         * @param elem
         * @returns {*}
         */
        hideElem:function (elem) {
            return elem.hide();
        },

        /**
         * Hide elem set display:block
         *
         * @param elem
         * @returns {*}
         */
        showElem:function (elem) {
            return elem.show();
        },
    }

    /**
     * Initialization App
     */
    app.init();
})(jQuery)

