@extends('layouts.master')
@section('content')
	{{-- Extract this header to a partial file --}}
	@include('partials.header')
	<section class="hero jumbotron jumbotron-fluid" style="background: url(../images/clock-bg.jpg);background-size:cover;background-repeat:no-repeat;background-attachment: fixed">
		<div class="banner">
			<div class="banner-content">
				<h1 class="title">Gabedy</h1>
				<p class="subtitle">Transforming the scope and content of academic writing</p>
				<p class="blurb">Browse through thousands of schorlaly articles and web contents. Better still, find writing help from our pool of proffesional writers</p>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class=" col-xs-6">
							<a href="{{ url('register') }}" class="btn __btn __btn-blue btn-lg __btn-cta" style="width:100%;font-weight:600">Join for free</a>
						</div>
						<div class=" col-xs-6">
							<a href="#" class="btn __btn __btn-green btn-lg __btn-cta" style="width:100%;font-weight:600">Find Tutors</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- Extract the content section  --}}
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="articles">
						<div class="section-heading">
							<h4 class="section-title">Latest Articles</h4>
						</div>
						<div class="section-content">
							<article>
								<h1 class="article-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
								<div class="article-details">
									<span>By Jeff Bridges</span>
									<span>/</span>
									<span>2 min read</span>
									<span>/</span>
									<span>Add Comment</span>
								</div>
								<div class="article-image">
									<img src="{{ asset('images/clock-bg.jpg') }}" alt="">
								</div>
								<div class="article-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore error nobis aliquid quia explicabo iste corrupti neque porro qui dolore, adipisci magnam non officia suscipit obcaecati beatae possimus iure reprehenderit sed totam autem eius architecto quibusdam et consectetur. Minima enim architecto ad iste, sunt magni dignissimos iusto quibusdam sit assumenda facilis impedit. Praesentium, recusandae, vitae. Iure.</p>
								</div>
								<div class="article-cta">
								{{-- Extract styles to external --}}
									<a href="#" class="btn __btn __btn-cta __btn-blue-outline" style="font-weight:600;min-width:150px;">Read more</a>
									<a href="#" class="btn __btn __btn-cta __btn-green" style="font-weight:600;min-width:150px;">Save</a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('title')
	gabedy.com
@endsection
@section('footer')
	@include('partials.footer')
@endsection