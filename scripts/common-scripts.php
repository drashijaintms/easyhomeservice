<script type="text/javascript">
$(window).on('load', function () {

	/* ---------------- Mobile Menu ---------------- */
	$('.mob-mnu-ic').click(function(e) {
		$('.mobilemenu').slideToggle();
		$('.dl-trigger').toggleClass('dl-active');
	});
	
	$('.menuOpen').click(function(e) {
		$(this).next('.dropdown-mobile').slideToggle();
		$(this).toggleClass('mnutog');
	});

	/* ---------------- Slick Slider ---------------- */
	if ($('.customer_review_row').length) {
		$('.customer_review_row').slick({
			dots: false,
			arrows: true,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: true,
			responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					dots: false,
					centerMode: true,
					variableWidth: true,
				}
			}]
		});
	}

	/* ---------------- Accordion ---------------- */
	$(".acdn-heading").click(function() {

		var questionDiv = $(this);
		var answerDiv   = $(this).next('.acdn-content');
		var idx = $('.acdn-content').index(answerDiv);
		
		$('.acdn-content').each(function(index, ansDiv) {
			if(index != idx && $(ansDiv).is(':visible')) {
				$(ansDiv).slideUp(500, function() {
					$(ansDiv).prev('.acdn-heading').removeClass('accordion-open');
				});
			}
		});
					
		if (answerDiv.is(':visible')) {
			answerDiv.stop().slideUp(500, function() {
				questionDiv.removeClass('accordion-open');
			});
		} else {
			questionDiv.addClass('accordion-open');
			answerDiv.stop().slideDown(500);
		}
	});

	/* ---------------- Tabs ---------------- */
	$(".custom-tab-btn").click(function () {

		$(".custom-tab-btn").removeClass("active");
		$(".tab-pane-custom").removeClass("active");

		$(this).addClass("active");
		$($(this).data("tab")).addClass("active");
	});

});


/* ---------------- Scroll Function ---------------- */
$(window).on('scroll', function () {

	if ($(this).scrollTop() > 40){
		$('.top-fix-bar').addClass('fixed-nav');
	}else{
		$('.top-fix-bar').removeClass('fixed-nav');
	}
	
	if ($(this).scrollTop() > 10){
	   $('.mobilemenu').addClass('mobimenu-top');
	}else{
	   $('.mobilemenu').removeClass('mobimenu-top');
	}
});


/* ---------------- Modal Popup ---------------- */
$(document).on('click', '#app_common_modal_close', function() {
	$('#app_common_modal').remove();
});	

function openNewWindow(page_url, type, window_name, width, height, top, left, features) {

	if (!type) type = 'popup';
	if (!width) width = 480;
	if (!height) height = 480;
	if (!top) top = 50;
	if (!left) left = 50;
	if (!features) features = 'resizable,scrollbars';

	if (type == 'popup') {

		var settings = 'height=' + height + ',';
		settings += 'width=' + width + ',';
		settings += 'top=' + top + ',';
		settings += 'left=' + left + ',';
		settings += features;

		win = window.open(page_url, window_name, settings);
		win.window.focus();

	} else if (type == 'modal') {

		var html = '';
		html += '<div id="app_common_modal">';
		html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><iframe src="' + page_url + '" frameborder="0"></iframe></div>';
		html += '</div>';

		if (!$('#app_common_modal').length) {
			$('body').append(html);
		}
		$('#app_common_modal').fadeIn();
	}
}
</script>