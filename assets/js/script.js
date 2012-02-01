jQuery(function($) {
	
    $('.input_email')
        .focus(function(){if ($(this).val() == $(this).attr('title')) {$(this).val('');}})
        .blur(function(){if ($(this).val() == '') {$(this).val($(this).attr('title'));}})
		
	$(".faq_link a").click(function () {
	$(this).parent('li').toggleClass("open");
			return false;
	})
	$(".wrap_carousel").jCarouselLite({
                 auto: 2100,
		 btnNext: ".next",
		 btnPrev: ".prev",
		 mouseWheel: true,
		 visible: 4,
		 scroll:2,
		 speed:700
	});

        $('.big_banner').click(function(){
            window.location = "/collection/";
        })
	
});