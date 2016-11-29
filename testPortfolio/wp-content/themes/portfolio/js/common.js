$(document).ready(function() {
	
	$("#popup_content").click(function() {
		$(".header_popup").fadeIn(400);
	});
	$(".btn_close").click(function() {
		$(".header_popup").fadeOut(400);
	});

	function heightDetect() {
	$("#home").css("height", $(window).height());
	};
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	});

	$('.portfolio_link  .popup_content').magnificPopup({type:"inline"});
	$(".nav_menu ul a").mPageScroll2id();
	$(".row_home a").mPageScroll2id();
	$(".price_row a").mPageScroll2id();

	$(".animation_1").animated("lightSpeedIn", "lightSpeedOut");
	$(".about_svg").animated("flipInX", "flipOutX");
	$(".animation_promo").animated("slideInLeft", "slideInRight");
	$(".animation_premium").animated("slideInUp", "slideOutIn");
	$(".animation_busines").animated("slideInRight", "slideInLeft");
});