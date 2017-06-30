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
									<span>2 min read</span>
									<span>/</span>
									<span>Add Comment</span>
								</div>
								<div class="article-content">
									{!! $post->body !!}
								</div>
							</article>
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
									<textarea name="body" id="body" cols="30" rows="5" class="form-control __textarea" v-model="commentBody"></textarea>
								</div>
								<transition name="slide">
									<div class="form-group" v-if="commentValid">
										<button class="btn __btn __btn-blue __btn-cta" type="submit" style="font-weight:600;min-width:150px">submit response</button>
									</div>
								</transition>		
							</form>
						</div>
						<div class="section-footer clearfix">
							<div class="panel panel-default comment-panel" v-for="comment in comments">
								<div class="panel-heading clearfix">
									<div class="profile-img" style="background:url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50);background-size:cover">
									</div>
									<div class="user-details">
										<p class="name">@{{ comment.user.name }}</p>
										<p class="meta-data">@{{comment.created_at | localTime }}</p>
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
						</div>
					</div>
					</comment-section>
				</div>
			</div>
		</div>
	</div>
@endsection
