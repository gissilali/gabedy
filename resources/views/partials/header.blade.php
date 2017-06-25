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
				<div class="search-bar clearfix pull-right search-bar-mobile">
					<div class="search-wrapper clearfix">
						<div class="button">
							<button class="btn search-btn"><i class="fa fa-search"></i></button>
						</div>

						<div class="input hide-input">
							<input type="text" name="search_query" id="search" placeholder="search gabedy">
						</div>
					</div>
				</div>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="nav-collapse">
				<ul class="nav navbar-nav links">
					<li><a href="#">Contact Us</a></li>
					<li class="active"><a href="#">About Us<span class="sr-only">(current)</span></a></li>
				</ul>

				<ul class="nav navbar-nav pull-right links">

						<li>
							<div class="search-bar clearfix">
								<div class="search-wrapper clearfix">
									<div class="button">
										<button class="btn search-btn"><i class="fa fa-search"></i></button>
									</div>

									<div class="input hide-input">
										<input type="text" name="search_query" id="search">
									</div>
								</div>
							</div>
						</li>

						<li class="dropdown __dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="click to see categories">Categories <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Life</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="">Stuff</a></li>
								<li><a href="">Politics</a></li>
								<li><a href="">Archives</a></li>
							</ul>
						</li>
						@if (Auth::check())
							<li class="dropdown __dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<!-- The Profile picture inserted via div class below, with shaping provided by Bootstrap -->
								<div class="profile-img" style="background-image:url({{ '../storage/'.Auth::user()->avatar}});
    		background-size:cover;">
									
								</div>
								<span class="name">{{ Auth::user()->name }}</span> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu ">
									<li class="dropdown-header" style="padding:10px">
										<strong>{{ Auth::user()->name }}</strong>
										<p class="email">{{ Auth::user()->email }}</p>
									</li>
									<li>
									<a href="#">Settings</a>
									</li>
									<li>
									<a href="#">Notifications</a>
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