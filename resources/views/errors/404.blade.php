@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="full-width clearfix" style="height: 100vh;padding: 200px">
		<div class="no-article clearfix" style="width:100%">
			<div class="alert-image" style="height:200px;padding-top:20px;">
				<img src="{{ asset('images/noarticle.png') }}" alt="no article" style="height:100%">
			</div>
		</div>
		<div class="alert-text" style="text-align: center;">
				<h3>error 404 what you are looking for cannot be found</h3>
				<a href="http://www.freepik.com"><small><strong>image credits</strong></small></a>
				<div class="cta">
					<a href="{{ url('/') }}" class="btn __btn __btn-cta __btn-blue"><strong>go home</strong></a>
			</div>
		</div>
	</div>
@endsection