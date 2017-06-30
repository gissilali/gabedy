
/**
 * Show-Hide Password Toggle
 * @param  {[type]} ){	var hidePassword  State of Password
 * @return {[type]}         [description]
 */
$(document).ready(function(){
	var passwordHidden = true;
	$('.show-password').click(function(){
		if(passwordHidden){
			passwordHidden = false;
			$('#password').attr('type', 'text');
			$('.show-password i').removeClass('fa-eye').addClass('fa-eye-slash')
		}else{
			passwordHidden = true;
			$('#password').attr('type', 'password');
			$('.show-password i').removeClass('fa-eye-slash').addClass('fa-eye')
		}
		console.log(passwordHidden)
	})
})

/**
 * 
 * Slideout menu toggle
 *
 */

$(document).ready(function() {
	$('.hamburger').click(function(event){
		event.preventDefault();
		$('.slideout').toggleClass('slideout-open');
	});

	$('.close-button').click(function(event) {
		event.preventDefault();
		$('.slideout').toggleClass('slideout-open');
	});
});

$(document).ready(function(){
	var submenuClosed = true;
	$('.main-menu').click(function(event){
		event.preventDefault();
		if (submenuClosed) {
			submenuClosed = false;
			$('.sub-menu').toggleClass('open');;
		} else{
			submenuClosed = true;
			$('.sub-menu').toggleClass('open');
		}
	});
});
