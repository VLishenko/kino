$(document).ready(function() {

	$(".menu-btn").click (function(){
		$(".hidden-nav-list a").toggleClass ("fadeInUp animated");
		return false;
	});

	//Portfolio Gallery
	var sizer = '.col-md-3';
	var container = $('#gallery');

		container.imagesLoaded(function() {
		container.masonry({
			itemSelector: '.item-masonry',
			columnWidth: sizer,
			percentPosition: true,
		})
	});

});