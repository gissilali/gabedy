<div id="menu" style="">
	<div class="slideout-menu-customizer">
		<ul class="list-group">
			<li class="clearfix list-group-item">
				<button class="btn close-button fa fa-times __btn-blue"></button>
			</li>
			@if (Auth::check())
				<li class="clearfix list-group-item">
					<div class="__slideout-header">
						<div class="image-wrapper">
							<div class="profile-img" style="background-image:url({{ asset('../images/default.png') }});background-size:cover;">
							</div>
	    				<div class="user-details">
	    					<p class="name"><strong>{{ Auth::user()->name }}</strong></p>
	    					<p class="email">{{ Auth::user()->email }}</p>
	    				</div>
					</div>
				</li>
			@else
				<li class="clearfix list-group-item">
					<div class="__slideout-header">
						<ul class="auth-links">
							<li class="list-group-item"><a href="{{ url('login') }}" class="btn __btn __btn-cta __btn-green btn-sm"><strong>login</strong></a></li>
							<li class="list-group-item"><a href="{{ url('register') }}" class="btn __btn __btn-cta __btn-blue btn-sm"><strong>register</strong></a></li>
						</ul>
					</div>
				</li>
			@endif
			<li class="clearfix list-group-item __menu-links">
				<i class="fa fa-home"></i><a href="{{ url('/') }}">Home</a>
			</li>
			<li class="clearfix list-group-item __menu-links main-menu">
				<i class="fa fa-list"></i><a href="">Articles <span class="caret"></span></a>
				<ul class="sub-menu">
					<li class="list-group-item"><a href="{{ url('category/all') }}">All</a></li>
					@foreach ($categories as $category)
						<li class="list-group-item"><a href="{{ url('category/'.$category->slug.'/'.$category->id) }}">{{ $category->name }}</a></li>
					@endforeach
				</ul>
			</li>
			@if (Auth::check())
				<li class="clearfix list-group-item __menu-links">
				<i class="fa fa-bookmark"></i><a href="{{ url('my-bookmarks') }}">My Bookmarks</a>
			</li>
				<li class="clearfix list-group-item __menu-links">
					<i class="fa fa-bell"></i><a href="#">Notifications</a>
					<span class="badge" style="background: orange"><small>coming soon</small></span>
				</li>
				<li class="clearfix list-group-item __menu-links">
				<i class="fa fa-power-off"></i><a href="#" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                      </form>
			</li>
			@endif
			<li class="clearfix list-group-item __menu-links">
				<i class="fa fa-info"></i><a href="{{ url('about') }}">About Us</a>
			</li>
			<li class="clearfix list-group-item __menu-links">
				<i class="fa fa-question"></i><a href="{{ url('help') }}">Help</a>
			</li>
		</ul>
	</div>
</div>