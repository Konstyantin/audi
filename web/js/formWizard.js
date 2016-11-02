;(function ($,undefined) {
    $('#rootwizard').bootstrapWizard(
        {
            onNext: function(tab, navigation, index) {},
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                    $('#rootwizard .progress-bar').css({width:$percent+'%'});
                }
        });
})(jQuery)