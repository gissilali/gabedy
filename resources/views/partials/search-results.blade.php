@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content">
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1">
				@if (count($posts)>0)
					<div class="article-list search-results">
						<h2>Search results for "{{ $query }}"</h2>
						<ul>
							@foreach ($posts as $post)
								<li class="article-listing">
								<h3><a href="{{ url('read/'.$post->slug.'/'.$post->id) }}">{{ $post->title }}</a></h3>
								<div class="article-meta-data">
									<span class="name"><strong>{{ App\User::find($post->author_id)->name }}</strong></span><span class="bull">&bull;</span>
									<span class="date">12th Jul 2012</span>
								</div>
								<div class="panel-body excerpt">
									<p class="post-body" style="background: transparent !important;font-size: 16px !important; font-weight: normal !important">{!! Illuminate\Support\Str::words($post->body,25) !!}</p>
								</div>
							</li>
							<hr>
							@endforeach
						</ul>
					</div>
				@else
					<div class="no-article clearfix" style="width:100%">
									<div class="alert-image" style="height:200px;padding-top:20px;">
										<img src="{{ asset('images/noarticle.png') }}" alt="no article" style="height:100%">
									</div>
								</div>
								<div class="alert-text" style="text-align: center;">
										<h3>oops no search results for "{{ $query }}"</h3>
										<a href="http://www.freepik.com"><small><strong>image credits</strong></small></a>
										<div class="cta">
											<a href="{{ url('/') }}" class="btn __btn __btn-cta __btn-blue"><strong>go home</strong></a>
										</div>
								</div>
				@endif
			</div>
		</div>
	</div>
@endsection