<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.svg') }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-mods.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/mango-slideout.css') }}">
	<link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
	<script>
		var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
	</script>
</head>
<body>
	<div id="app">
		<auth-modal inline-template>
			<div class="auth-modal" :class="{ hide:modalClosed }" v-if="openModal">
				<div class="form-page-centering">
					<div class="container">
						<div class="col-md-4 col-md-offset-4">
							<div class="form-container">
								<div class="form-logo-heading clearfix">
									<div class="logo-container">
										<img src="{{ asset('logo.svg') }}" alt="gabedy-logo">	
									</div>
								</div>
								<div class="panel panel-default form-panel">
									<div class="panel-heading">
										<button class="close fa fa-times" @click.prevent="closeModal()"></button>
										<h4 class="form-title">Almost there!</h4>
									</div>
									<div class="panel-body">
										<p><strong>Sign in to your account or create a new one to start interacting</strong></p>
									</div>
									<div class="panel-footer clearfix">
										<div class="col-md-6">
											<a href="{{ url('login') }}" class="btn __btn __btn-green  __btn-cta"><strong>login</strong></a>
										</div>
										<div class="col-md-6">
											<a href="{{ url('register') }}" class="btn __btn __btn-blue __btn-cta"><strong>register</strong></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</auth-modal>
		@include('partials.slideout-menu')
		<div id="panel">
			@yield('content')
		</div>
		@include('partials.footer')
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		$(document).ready(function() {
					$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		});
		});
	</script>
	<script src="{{ asset('js/slideout.min.js') }}"></script>
	{{-- <script>
	   $(document).ready(function() {
	   		$('.hamburger').click(function(event) {
	   			event.preventDefault();
	   			$('.slideout').addClass('slideout-open')
	   		});
	   		$('.close-button').click(function(event) {
	   			event.preventDefault();
	   			$('.slideout').removeClass('slideout-open')
	   		});
	   });
	</script> --}}
	<script>
	  var slideout = new Slideout({
	    'panel': document.getElementById('panel'),
	    'menu': document.getElementById('menu'),
	    'padding': 256,
	    'tolerance': 70
	  });
	  document.querySelector('.hamburger').addEventListener('click', function() {
        slideout.open();
      });
      document.querySelector('.close-button').addEventListener('click', function() {
        slideout.close();
      });
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	{{-- Extract this conditions to a toastr.blade --}}
	@if (Session::has('email_sent'))
		<script>
			$(document).ready(function() {
				toastr.info('an email has been sent to {{ Session::get('email_sent') }}');
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": false,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			});
		</script>
	@endif
	@if (Session::has('profile_updated'))
		<script>
			$(document).ready(function() {
				toastr.success('{{ Session::get('profile_updated') }}');
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": false,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			});
		</script>
	@endif
	@if (Session::has('password_updated'))
		<script>
			$(document).ready(function() {
				toastr.success('{{ Session::get('password_updated') }}');
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": false,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			});
		</script>
	@endif
	@if (Session::has('password_not_matching'))
		<script>
			$(document).ready(function() {
				toastr.error('{{ Session::get('password_not_matching') }}');
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": false,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			});
		</script>
	@endif
</body>
</html>