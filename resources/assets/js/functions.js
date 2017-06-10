/**
 * Sticky Header Function
 * @param  {fuck parameters bitch!!} ){	var windowHeight  Height of the viewport
 * @return {return what?}     
 */
$(document).ready(function(){
	var windowHeight = $(window).height();
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if(scrollTop > windowHeight+500){
			$('.gabedi-header').addClass('black');
		} else if(scrollTop < windowHeight+50){
			$('.gabedi-header').removeClass('black');
		}
	})
});
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

$(document).ready(function($) {
	var inputHidden = true;
	$('.search-btn').click(function(event) {
		event.preventDefault();
		if (inputHidden) {
			inputHidden = false;
			$('.input').removeClass('hide-input').addClass('show-input');
		} else {
			inputHidden = true;
			$('.input').removeClass('show-input').addClass('hide-input');
		}
	});
});