$(document).ready(function() {
	$(".read-more").click(function() {
		$(this).closest(".post").addClass("open-entry");
		return false;
	});
	
	$(".close-link").click(function() {
		$(this).closest(".post").removeClass("open-entry");
		return false;
	});
});