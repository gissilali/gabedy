@extends('layouts.master')
@section('content')
	@include('partials.header')
	<section class="hero jumbotron jumbotron-fluid" style="background: url(../images/clock-bg.jpg);background-size:cover;background-repeat:no-repeat;background-attachment: fixed">
		<div class="banner">
			<div class="banner-content">
				<h1 class="title">Gabedy</h1>
				<p class="subtitle">Transforming the scope and content of academic writing</p>
				<p class="blurb">Browse through thousands of schorlaly articles and web contents. Better still, find writing help from our pool of proffesional writers</p>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class=" col-xs-6 col-xs-offset-3">
							<a href="{{ url('subscribe') }}" class="btn __btn __btn-green btn-lg __btn-cta" style="width:100%;font-weight:600" title="subscribe for our newsletter" data-toggle="tooltip" data-placement="top" >Subscribe</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('partials.article-browser')
@endsection
@section('title')
	gabedy.com
@endsection
@section('footer')
	@include('partials.footer')
@endsection