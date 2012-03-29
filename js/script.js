$(document).ready(function() {
	$('.comments-list').masonry({
		// options
		itemSelector : 'article'
	});
	
	$("body").addClass("js");
	
	$(".read-more").click(function() {
		$(this).closest(".post").addClass("open-entry");
		return false;
	});
	
	$(".close-link").click(function() {
		$(this).closest(".post").removeClass("open-entry");
		return false;
	});
	
	$(function(){
		$("select, input:file").uniform({fileBtnText: 'Browse', fileDefaultText: ''});
	});
	
	$(".about-header .title").click(function(){
		$(".about-header .title").removeClass("current");
		$(".about-header .content-block").removeClass("current");
		var showId = $(this).attr("rel");
		$('#'+showId).addClass("current");
		$(this).addClass("current");
	});
	
	$(".job-description").each(function(){
		var shortText = $(this).children(".job-description-text").text()
		.trim()   
	    .substring(0, 70)    
	    .split(" ") 
	    .slice(0, -1)    
	    .join(" ") + "...";
		
		$(this).children(".job-description-text").hide();
		
		$(this).prepend('<div class="job-description-short">' + shortText + '</div>');
	});
		
	$("a.job-read-more").fancybox({
		'width'			: 	'500', 
		'autoDimensions': 	true,
		'padding'		:  	'30',	
		'overlayShow'	:	true
	});
});