@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content">
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="error-fullpage clearfix" style="min-height: 100vh;">
					<div class="col-md-4 col-md-offset-4 ">
						<div class="alert-image" style="width:100%;padding-top:20px;">
							<img src="{{ asset('images/noarticle.png') }}" alt="no article" style="width:100%">
						</div>
						<div class="alert-text" style="text-align: center;">
							<h3>error 404 we cannot find what you seek</h3>
							<a href="http://www.freepik.com"><small><strong>image credits</strong></small></a>
							<div class="cta">
								<a href="{{ url('/') }}" class="btn __btn __btn-cta __btn-blue"><strong>go home</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection