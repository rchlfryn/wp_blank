/**
 * File base.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Staff memeber selection function
	$('.staff-member').on('click',function(){
	  $('.staff-member').removeClass('active');
	  $(this).addClass('active');
	 	var activeStaffName = $(this).find('.staff-name')[0].innerText;
	 	var activeStaffImage = $(this).find('.staff-image img').attr('src');
	 	console.log(activeStaffImage)
	 	$('.staff-name-selected')[0].innerText = activeStaffName;
	 	$('.staff-image-selected img').attr('src', activeStaffImage);
	})

} )( jQuery );