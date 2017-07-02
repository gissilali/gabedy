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
				<form action="{{ url('search') }}" method="get" class="typeahead search-bar-mobile">
					{{ csrf_field() }}
					 <div class="input-group __search-bar-margin-top">
				      <input type="text" class="form-control typeahead-search search" placeholder="Search for...">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button" style="border:none;color:#2AB27B"><i class="fa fa-search"></i></button>
				      </span>
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
							<form action="{{ url('search') }}" method="get" class="typeahead">
								{{ csrf_field() }}
								 <div class="input-group __search-bar-margin-top">
							      <input type="text" class="form-control typeahead-search search" placeholder="Search for...">
							      <span class="input-group-btn">
							        <button class="btn btn-default" type="button" style="border:none;color:#2AB27B"><i class="fa fa-search"></i></button>
							      </span>
							    </div>
							</form>
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
									<a href="{{ url('my-bookmarks/') }}">My Bookmarks</a>
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
						@else
							<li><a href="{{ url('login') }}">Login</a></li>
						@endif
				</ul>
			</div>
		</div>
	</nav>
</div>