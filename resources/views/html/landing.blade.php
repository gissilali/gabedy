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
							@if (count($posts)>0)
								@foreach ($posts as $post)
									<article>
										<h1 class="article-title">{{ $post->title }}</h1>
										<div class="article-details">
											<span>By {{ $post->author->name }}</span>
											<span>/</span>
											<span>2 min read</span>
											<span>/</span>
											<span>Add Comment</span>
										</div>
										@if ($post->image=='' || $post->image==NULL)
										@else
											<div class="article-image">
												<img src="{{ asset('images/clock-bg.jpg') }}" alt="">
											</div>
										@endif
										<div class="article-content">
											{!! Illuminate\Support\Str::words($post->body, 55) !!}
										</div>
										<div class="article-cta">
										{{-- Extract styles to external --}}
											<a href="{{ url('read/'.$post->slug.'/'.$post->id) }}" class="btn __btn __btn-cta __btn-blue-outline" style="font-weight:600;min-width:150px;">Read more</a>
											<a href="#" class="btn __btn __btn-cta __btn-green" style="font-weight:600;min-width:150px;">Read later</a>
										</div>
									</article>
								@endforeach
							@else
								<div class="no-article">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum iure voluptatibus tempore obcaecati itaque, vel doloribus ad soluta ducimus saepe odio quod quibusdam, deleniti aliquam modi in fugit aliquid molestias laborum amet. Temporibus, animi dolore. Ea porro quo cupiditate eaque laboriosam iusto architecto vel. Nostrum, voluptas. Deleniti dolore fuga doloribus totam accusantium iure laborum maxime alias eum consectetur, quia ratione voluptates labore mollitia, ab tenetur ipsa saepe. Quos maiores eum in asperiores debitis ea perspiciatis ab quae, labore distinctio velit? Dicta eveniet at nesciunt unde odit obcaecati esse asperiores accusamus non quia, harum architecto minima, dolores, et atque odio quos.
								</div>
							@endif
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