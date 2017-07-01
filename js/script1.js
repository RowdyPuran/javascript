jQuery(document).ready(function()
{
	jQuery(window).scroll(function()
	{
		var windowHeight=jQuery(window).height();
		var windowScrollPosTop=jQuery(window).scrollTop();
		jQuery(".status").html(windowScrollPosTop);
	});
	




});