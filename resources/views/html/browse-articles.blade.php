@extends('layouts.master')
@section('content')
	@include('partials.header')
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
									<a href="#" class="btn __btn __btn-cta __btn-blue-outline" style="font-weight:600;min-width:150px">Read more</a>
									<a href="#" class="btn __btn __btn-cta __btn-green" style="font-weight:600;min-width:150px">Save</a>
								</div>
							</article>
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
						<nav class="section-footer">
							<a class="btn __btn __btn-blue __btn-cta" href="#" style="font-weight:600;min-width:150px">Load more</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection