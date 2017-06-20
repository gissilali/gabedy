@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content">
{{--         <div class="jumbotron jumbotron-fluid article-cover">
			<div class="container">
				<h1 class="display-3">Fluid jumbotrons in bootstrap</h1>
				<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of it's parent.</p>
			</div>
		</div> --}}
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="article">
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
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, suscipit, unde! Iste, officia impedit praesentium nisi sunt. Tenetur alias, repellendus necessitatibus omnis aperiam esse nisi porro velit quisquam quos accusamus, odio in cupiditate quae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, magni eos amet pariatur obcaecati laborum, deleniti modi omnis aut, provident adipisci accusamus, quia in. Autem minima sequi quod reiciendis aperiam repellendus earum, nostrum dicta ducimus vero officiis explicabo, similique blanditiis in ullam sint quaerat libero vitae adipisci dolores voluptatem? Quaerat labore, quo quia? Laudantium, alias dolores!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam dolorum maiores quo nemo distinctio, alias culpa magnam. Aliquam dolorum, voluptas animi sed, reprehenderit labore in. Magni facilis, velit est, perferendis libero omnis amet rerum tenetur molestias distinctio, veniam animi? Neque nihil, tenetur cumque officiis perferendis dolorum fugit nobis tempora. Itaque, nesciunt quia adipisci ut architecto eius laudantium unde impedit suscipit facilis! Obcaecati odio similique tempora! Quaerat consectetur repudiandae consequuntur dolorum officiis, aut nulla, omnis fuga laboriosam natus tenetur consequatur porro doloribus sapiente iste saepe cumque, sequi. Eos non officiis facilis id illo. Possimus eum non, nulla culpa cupiditate voluptatum nisi quia veniam.</p>
									<p>lorem23</p>
								</div>
							</article>
						</div>
					</div>
					<div class="comment-section">
						<div class="section-header clearfix">
							<h4 class="section-title">3 COMMENTS</h4>
						</div>
						<div class="section-body">
							<form action="">
								{{ csrf_field() }}
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="10" class="form-control __textarea"></textarea>
								</div>
								<div class="form-group">
									<a class="btn __btn __btn-blue __btn-cta" href="#" style="font-weight:600;min-width:150px">submit comment</a>
								</div>
							</form>
						</div>
						<div class="section-footer clearfix">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection