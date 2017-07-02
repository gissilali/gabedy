<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="articles">
							<div class="section-heading">
								<h4 class="section-title">{{ $category->name or 'Latest' }} Articles</h4>
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
											<transition name="slide">
												<bookmark-button  :post-id="{{ $post->id }}"  inline-template>
												<button class="fa fa-bookmark bookmark-button" v-if="bookmarked"></button>
												<a class="btn __btn __btn-cta __btn-green" style="font-weight:600;min-width:150px;" @click.prevent="bookmark({{ $post->id }})" v-else > Read later </a>
											</bookmark-button>
											</transition>
										</div>
									</article>
								@endforeach
							@else
								<div class="error-fullpage clearfix" style="min-height: 100vh; padding:80px 0">
									<div class="col-md-4 col-md-offset-4 ">
										<div class="alert-image" style="width:100%;padding-top:20px;">
											<img src="{{ asset('images/noarticle.png') }}" alt="no article" style="width:100%">
										</div>
										<div class="alert-text" style="text-align: center;">
											<h3>oops, no articles just yet</h3>
											<a href="http://www.freepik.com"><small><strong>image credits</strong></small></a>
											<div class="cta">
												<a href="{{ url('/') }}" class="btn __btn __btn-cta __btn-blue"><strong>go home</strong></a>
											</div>
										</div>
									</div>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>