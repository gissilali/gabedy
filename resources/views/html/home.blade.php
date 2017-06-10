@extends('layouts.master')
@section('content')
	{{-- Extract this header to a partial file --}}
	@include('partials.header')
	{{-- Extract the content section  --}}
	<section style="">
		<div class="container" style="padding-top:70px">
			<h1>Welcome to your homepage</h1>
			<p>See your bookmarked articles, discover new articles and find tutors</p>
			<div class="col-md-8">
				<h4><strong>Your Bookmarks</strong></h4>
				<hr style="border-top:1px solid #D3E0E9">
				<div class="bookmark-grid">
					<div class="col-md-6" style="padding-left:0">
						<div class="bookmark-grid-item panel">
							<div class="panel-heading">
								<h4><strong>The Art of Steal</strong></h4>
							</div>
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis dolor odio id natus voluptate eligendi recusandae impedit, aliquid sit, veniam quia necessitatibus, autem eius.</p>
							</div>
							<div class="panel-footer clearfix">
								<div class="bookmark-details">
									<small class="author"><strong>Nick Babich</strong></small><span class="dot-separator">.</span><span><small>Jun 8</small></span><span class="dot-separator">.</span><span><small>3 min read</small></span>
								</div>
								<button class="btn-bookmark"><i class="fa fa-bookmark"></i></button>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="padding: 0">
						<div class="bookmark-grid-item panel">
							<div class="panel-heading">
								<h4><strong>The Art of Steal</strong></h4>
							</div>
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis dolor odio id natus voluptate eligendi recusandae impedit, aliquid sit, veniam quia necessitatibus, autem eius.</p>
							</div>
							<div class="panel-footer clearfix">
								<div class="bookmark-details">
									<small class="author"><strong>Nick Babich</strong></small><span class="dot-separator">.</span><span><small>Jun 8</small></span><span class="dot-separator">.</span><span><small>3 min read</small></span>
								</div>
								<button class="btn-bookmark"><i class="fa fa-bookmark"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="content" style="margin-top:70px;position: relative;">
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
									<a href="#" class="btn __btn __btn-cta __btn-blue-outline" style="font-weight:600;min-width:150px">Read more</a>
									<a href="#" class="btn __btn __btn-cta __btn-green" style="font-weight:600;min-width:150px">Save</a>
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