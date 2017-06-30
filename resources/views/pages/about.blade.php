@extends('layouts.master')
@section('content')
	@include('partials.header')
	<section class="hero jumbotron jumbotron-fluid" style="background: url(../images/clock-bg.jpg);background-size:cover;background-repeat:no-repeat;background-attachment: fixed;margin:0">
		<div class="banner">
			<div class="banner-content">
				<h1 class="title">Gabedy</h1>
				<p class="subtitle">Transforming the scope and content of academic writing</p>
				<p class="blurb">Browse through thousands of schorlaly articles and web contents. Better still, find writing help from our pool of proffesional writers</p>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">							
					<a href="#our-story" class="btn __btn __btn-blue btn-lg __btn-cta" style="width:120px;font-weight:600">our story</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="our-story"></div>
	<section class="jumbotron jumbotron-fluid" >
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="panel-section panel">
					<h3 class="title">{{ $article->title }}</h3>
					<div class="text-justify clearfix">
						{!! $article->body !!}
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-xs-offset-1">
				<div id="contact-us"></div>
				<div class="panel-section panel">
					<h3>Talk to us</h3>
					<h4 class="subtitle">you can give us your feedback or just say hi!</h4>
					<div class="contact-form">
						<form action="" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-6">
									<label for="">Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="col-sm-6">
									<label for="">Email</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<label for="">Subject</label>
									<input type="text" class="form-control">
								</div>
								<div class="col-sm-6">
									<label for="">Phone</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<label for="">Message</label>
									<textarea name="" id="" cols="30" rows="10" class="form-control __textarea"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<button class="btn __btn __btn-blue __btn-cta" type="submit" style="font-weight:600;min-width:150px">submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('title')
	About Us
@endsection