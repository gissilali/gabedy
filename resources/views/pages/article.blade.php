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
										<button class="btn __btn __btn-blue __btn-cta ld-ext-right" :class="{ 'running': isLoading }" type="submit" style="font-weight:600;min-width:150px">submit response <div class="ld ld-ring ld-spin"></div></button>
									</div>
								</transition>		
							</form>
						</div>
						<div class="section-footer clearfix">
							<transition-group name="slide">
								<div class="panel panel-default comment-panel" v-for="comment in comments" v-bind:key="comment">
								<div class="panel-heading clearfix">
									<div class="profile-img" style="background-image:url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50);background-size:cover">
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
							<button class="btn __btn __btn-blue __btn-cta ld-ext-right" :class="{ 'running': isLoadingMore }" @click="loadMore({{ $post->id }})">load more <div class="ld ld-ring ld-spin"></div></button>
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
