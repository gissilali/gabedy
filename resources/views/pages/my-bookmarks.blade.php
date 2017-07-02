@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content">
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1">
				@if (count($bookmarks)>0)
					<div class="article-list search-results">
						<h2>Your bookmarks</h2>
						<ul>
							@foreach ($bookmarks as $bookmark)
								<li class="article-listing">
									<h3><a href="{{ url('read/'.$bookmark->post->slug.'/'.$bookmark->post->id) }}">{{ $bookmark->post->title }}</a></h3>
									<div class="article-meta-data">
										<span class="name"><strong>{{ App\User::find($bookmark->post->author_id)->name }}</strong></span><span class="bull">&bull;</span>
										<span class="date">12th Jul 2012</span>
									</div>
									<div class="panel-body excerpt">
										<p class="post-body" style="background: transparent !important;font-size: 16px !important; font-weight: normal !important">{!! Illuminate\Support\Str::words($bookmark->post->body,25) !!}</p>
									</div>
									<div class="bookmark-action">
										<form action="{{ url('remove-bookmarks/'.$bookmark->post->id) }}" method="post">
											{{ csrf_field() }}
											<button type="submit" class="btn __btn-cta btn-sm __btn-green"><strong>remove bookmark</strong></button>
										</form>
									</div>
								</li>
								<hr>
							@endforeach
						</ul>
					</div>
				@else
					<div class="error-fullpage clearfix" style="min-height: 100vh; padding:80px 0">
						<div class="col-md-4 col-md-offset-4 ">
							<div class="alert-image" style="width:100%;padding-top:20px;">
								<img src="{{ asset('images/noarticle.png') }}" alt="no article" style="width:100%">
							</div>
							<div class="alert-text" style="text-align: center;">
								<h3>you have no bookmarks</h3>
								<a href="http://www.freepik.com"><small><strong>image credits</strong></small></a>
								<div class="cta">
									<a href="{{ url('/') }}" class="btn __btn __btn-cta __btn-blue"><strong>browse articles</strong></a>
								</div>
							</div>
						</div>
					</div>
				@endif
				</div>
			</div>
		</div>
	</div>
@endsection