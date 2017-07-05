<div class="footer-container clearfix">
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div class="social-media-panel">
						<ul class="social-media-links">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="footer-links">
						<ul style="text-align: center;">
							<li><a href="{{ url('about') }}">About us</a></li>
							<li><a href="{{ url('term-and-privacy') }}">Terms & Privacy</a></li>
							<li><a href="{{ url('faqs') }}">FAQs</a></li>
							<li><a href="{{ url('avertise-with-us') }}">Advertise</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="row">
						<div class='subscription-form'>
							<form action='{{ url('subscribe') }}' id='subscribe' method='post' target='_top'>
								{{ csrf_field() }}
								<input id='email' name='email' placeholder='your email' type='text' class="form-control"/>
								<button id='search-button' type='submit'><strong><small>subscribe me</small></strong></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container" style="text-align: center;">
					<small><strong style="color:white">Design by L'Homme Idee all rights reserved &copy; {{ Carbon\Carbon::now()->year }}</strong></small>
				</div>
			</div>
		</div>
	</footer>
</div>