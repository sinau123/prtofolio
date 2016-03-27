$(document).ready(function(){
	$('.navbar-nav a').click(function (e) {
		 $(this).closest('.navbar-nav').find('li').removeClass('active');
		 $(this).closest('li').addClass('active');
	})
});