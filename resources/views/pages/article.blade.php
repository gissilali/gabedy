@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="article">
						<div class="section-content">
							<article>
								<h1 class="article-title">{{ $post->title }}</h1>
								<div class="article-details">
									<span>By {{ $post->author->name }}</span>
									<span>/</span>
									<span><strong><small>{{ App\Post::readtime($post->body) }}</small></strong></span>
									<span>/</span>
									<span>{{ $post->updated_at->toFormattedDateString() }}</span>
								</div>
								@if ($post->image=='' || $post->image==NULL)
								@else
									<div class="article-image">
										<img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title.' image' }}" style="font-weight: bold;color:#2AB27B;text-align: center">
									</div>
								@endif
								<div class="article-content">
									{!! $post->body !!}
								</div>
							</article>
						</div>
					</div>
					<div class="suggested-posts row">
						<div class="bookmark-section">
							<div class="bookmark section-heading clearfix">
								<h4><strong>Recommended articles</strong></h4>
								
							</div> 
							<hr style="border-top:1px solid #D3E0E9;margin:0;margin-bottom:20px">
							<div class="bookmark-grid">					
								
									@if (count($recommendations) > 0)
										@foreach ($recommendations as $recommended_post)
										<div class="col-md-6" style="padding-left:0">
											<div class="bookmark-grid-item panel">
										<a href="{{ url('read/'.$recommended_post->slug.'/'.$recommended_post->id) }}" style="color:#333;">
											<div class="panel-heading">
												<h4><strong>{{ $recommended_post->title }}</strong></h4>
											</div>
											<div class="panel-body excerpt">

													<p class="post-body" style="background: transparent !important;font-size: 16px !important; font-weight: normal !important">{!! Illuminate\Support\Str::words($recommended_post->body,25) !!}</p>
											</div>
										</a>
										<div class="panel-footer clearfix">
											<div class="bookmark-details">
												<small class="author"><strong>{{ App\User::find($recommended_post->author_id)->name }}</strong></small><span class="dot-separator">.</span><span><small>{{ $post->updated_at->toFormattedDateString() }}</small></span><span class="dot-separator">.</span><span><small>{{ App\Post::readtime($recommended_post->body) }}</small></span>
											</div>
											<button class="btn-bookmark"><i class="fa fa-bookmark"></i></button>
										</div>
									</div>
									</div>
										@endforeach
									@else
										
									@endif
									
							</div>
						</div>
					</div>
					<comment-section inline-template>
						<div class="comment-section" id="comment-section" data-post-id="{{ $post->id }}" data-post-slug="{{ $post->slug }}">
						<div class="section-header clearfix">
							<h4 class="title">Responses</h4>
						</div>
						<div class="section-body">
							<form action="{{ url('respond-to/'.$post->slug.'/'.$post->id) }}" method="post" @submit.prevent="onSubmit('{{ $post->slug }}',{{ $post->id }})" >
								{{ csrf_field() }}
								<div class="form-group">
									<textarea name="body" id="comment-area" cols="30" rows="5" class="form-control __textarea" v-model="commentBody" @keydown.enter.prevent="onSubmit('{{ $post->slug }}',{{ $post->id }})"></textarea>
								</div>
								<transition name="slide">
									<div class="form-group" v-if="commentValid">
										<button class="btn __btn __btn-blue __btn-cta ld-ext-right" :class="{ 'running': isLoading }" type="submit" style="font-weight:600;min-width:150px">submit response <div class="ld ld-ring ld-spin"></div></button>
									</div>
								</transition>		
							</form>
						</div>
						<div class="section-footer clearfix">
							<transition-group name="slide">
								<div class="panel panel-default comment-panel" v-for="comment in comments" v-bind:key="comment">
								<div class="panel-heading clearfix">
									<div class="profile-img" style="background-image:url(https://www.gravatar.com/avatar/205e460b479e2e8b48aec07710c08d50);background-size:cover">
									</div>
									<div class="user-details">
										<p class="name"><strong>@{{ comment.user.name }}</strong></p>
										<p class="meta-data"><small>@{{comment.created_at | localTime }}</small></p>
									</div>
								</div>
								<div class="panel-body clearfix">
									@{{ comment.body }}
								</div>
								<div class="panel-footer clearfix">
									<div class="actions">
										<like-button :comment-id=comment.id></like-button>
									</div>
								</div>
							</div>
							</transition-group>
							<button class="btn __btn __btn-blue __btn-cta ld-ext-right" :class="{ 'running': isLoadingMore }" @click="loadMore({{ $post->id }})" v-if="shouldLoadMore">load more <div class="ld ld-ring ld-spin"></div></button>
							<transition name="slide">
								<span class="badge" v-if="paginator.lastPageReached" style="background: orange">no more comments</span>
							</transition>
						</div>
					</div>
					</comment-section>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('tinymce')
	<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
	<script>
		tinymce.init({
			selector: '#comment-area',
			height: 200,
			menubar: false,
		  	toolbar: 'undo redo | insert | styleselect | bold italic | alignleft | bullist numlist outdent indent | link image',
		    content_css: [
		    '{{ asset('css/content.min.css') }}']
		});
	</script>
@endsection
@section('title')
	{{ $post->title }}
@endsection