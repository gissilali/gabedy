@extends('layouts.master')
@section('content')
	{{-- Extract this header to a partial file --}}
	@include('partials.header')
	<section style="">
		<div class="container" style="padding-top:70px">
			<h1><strong>Welcome to your homepage</strong></h1>
			<p>See your bookmarked articles, discover new articles and find tutors</p>
			<div class="col-md-8" style="padding-bottom:20px">
				@if (count($bookmarks)>0)
					<div class="bookmark-section">
					<div class="bookmark section-heading clearfix">
						<h4><strong>Your Bookmarks</strong></h4>
						<a href="{{ url('my-bookmarks/'.Auth::user()->id) }}" class="btn __btn __btn-cta __btn-blue-outline" style="font-weight:600;min-width:150px">See more</a>
					</div> 
					<hr style="border-top:1px solid #D3E0E9;margin:0;margin-bottom:20px">
					<div class="bookmark-grid">
						@foreach ($bookmarks as $bookmark)
							
						<div class="col-md-6" style="padding-left:0">
							<div class="bookmark-grid-item panel">
								<div class="panel-heading">
									<h4><strong>{{ $bookmark->post->title }}</strong></h4>
								</div>
								<div class="panel-body excerpt">
									<p class="post-body" style="background: transparent !important;font-size: 16px !important; font-weight: normal !important">{!! Illuminate\Support\Str::words($bookmark->post->body,25) !!}</p>
								</div>
								<div class="panel-footer clearfix">
									<div class="bookmark-details">
										<small class="author"><strong>{{ App\User::find($bookmark->post->author_id)->name }}</strong></small><span class="dot-separator">.</span><span><small>Jun 8</small></span><span class="dot-separator">.</span><span><small>3 min read</small></span>
									</div>
									<button class="btn-bookmark"><i class="fa fa-bookmark"></i></button>
								</div>
							</div>
						</div>	
						@endforeach
					</div>
				</div>
				@else
					<div class="bookmark-section">
					<div class="bookmark section-heading clearfix">
						<h4><strong>Your Bookmarks</strong></h4>
					</div> 
					<hr style="border-top:1px solid #D3E0E9;margin:0;margin-bottom:20px">
					<div style="padding:0px;margin:0;text-align: left;">
						<p class="subtitle-text" style="color:#2AB27B"><i class="fa fa-info-circle" style="padding:5px"></i><strong>you have no bookmarks yet</strong></p>
					</div>
				@endif
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