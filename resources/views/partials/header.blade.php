<div class="gabedi-header">
	<nav class="navbar navbar-default navbar-fixed-top __navbar">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed hamburger" data-toggle="collapse" aria-expanded="false" style="background: transparent;border:none;">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-bars fa-2x"></i>
				</button>
				<div class="logo">
					<img src="{{ asset('logo.svg') }}" alt="logo">
				</div>
				<form action="search" method="get">
					<div class="search-bar clearfix pull-right search-bar-mobile">
					<div class="search-wrapper clearfix">
						<div class="button">
							<button class="btn search-btn"><i class="fa fa-search"></i></button>
						</div>

						<div class="input hide-input">
							<input type="text" name="q" id="search" placeholder="search articles">
						</div>
					</div>
				</div>
				</form>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="nav-collapse">
				<ul class="nav navbar-nav links">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('about#contact-us') }}">Contact Us</a></li>
					<li class="active"><a href="{{ url('about') }}">About Us<span class="sr-only">(current)</span></a></li>
				</ul>

				<ul class="nav navbar-nav pull-right links">

						<li>
							<article-search inline-template>
								<form action="{{ url('search') }}" method="get">
								<div class="search-bar clearfix">
									<div class="search-wrapper clearfix">
										<div class="button">
											<button class="btn search-btn"><i class="fa fa-search"></i></button>
										</div>

										<div class="input hide-input">
											<input type="text" name="q" id="search" placeholder="search articles" v-model="query" @keyup="sendSearchRequest" autocomplete="off">
										</div>
									</div>
									
									<ul class="search-suggestion list-group" v-if="resultsAvailable">
										<li class="list-group-item" v-for="result in results"><a v-bind:href="postURL(result.slug, result.id)">@{{ result.title }}</a></li>
									</ul>
								</div>
							</form>
							</article-search>
						</li>

						<li class="dropdown __dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="click to see categories">Articles <span class="caret"></span></a>
							<ul class="dropdown-menu">
									<li><a href="{{ url('category/all') }}">All</a></li>
								@foreach ($categories as $category)
									<li><a href="{{ url('category/'.$category->slug.'/'.$category->id) }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{ url('login') }}">Login</a></li>
						@if (Auth::check())
							<li class="dropdown __dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<!-- The Profile picture inserted via div class below, with shaping provided by Bootstrap -->
								@if (Auth::user()->avatar!=NULL)
									{{-- true expr --}}<div class="profile-img" style="background-image:url({{ '../storage/'.Auth::user()->avatar}});
    		background-size:cover;">
								@else
									{{-- false expr --}}<div class="profile-img" style="background-image:url({{ asset('../images/default.png') }});
    		background-size:cover;">
								@endif
									
								</div>
								<span class="name">{{ Auth::user()->name }}</span> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu ">
									<li class="dropdown-header" style="padding:10px">
										<strong>{{ Auth::user()->name }}</strong>
										<p class="email">{{ Auth::user()->email }}</p>
									</li>
									<li>
									<a href="{{ url('settings/'.Auth::user()->id) }}">Settings</a>
									</li>
									<li>
									<a href="{{ url('notifications') }}">Notifications</a>
									</li>
									<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form>
									</li>
								</ul>
							</li>
						@endif
				</ul>
			</div>
		</div>
	</nav>
</div>