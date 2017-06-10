<div class="gabedi-header">
	<div class="container">
		<div class="header-l clearfix">
			<div class="logo">
				<img src="logo.svg" alt="logo">
			</div>
		</div>
		<div class="header-r clearfix">
			<div class="search-bar">
				<div class="button">
					<button class="btn search-btn"><i class="fa fa-search"></i></button>
				</div>

				<div class="input hide-input">
					<input type="text" name="search_query" id="search">
				</div>
			</div>
				@if (Auth::check())
					<ul class="nav navbar-nav pull-right __nav-bar">
						<li style="padding-top:10px;background:transparent;float:left"><a href=""><i class="fa fa-bell"></i></a></li>
		                <li class="dropdown" style="padding-top:10px;float:left">
		                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		                        <div class="profile-img" style="background:gold;"><p class="initials">JD</p></div>
		                        <span class="caret"></span>
		                    </a>
		                    <ul class="dropdown-menu __dropdown-menu list-group">
		                    	<li class="list-group-item __dropdown-header">
		                    		<small><strong>{{ Auth::user()->name }}</strong></small>
		                    	</li>
		                        <li class="list-group-item">
		                            <small><strong><a href="#">Settings</a></strong></small>
		                        </li>
		                        <li class="list-group-item">
		                            <small>
		                            	<strong>
		                            	<a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                         </strong>
                                     </small>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
		                        </li>
		                    </ul>
		                </li>
            		</ul>
				@else
					<nav style="display:none">
						<a href="#">Browse Articles</a>
						<a href="#">Contact Us</a>
						<a href="#">Archives</a>
						<a href="#">Sign In</a>
					</nav>
				@endif
		</div>
	</div>
</div>