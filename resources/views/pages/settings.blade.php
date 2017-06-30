@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content settings-panel">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="settings-section-header">
						
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="panel form-panel edit profile">
							<div class="panel-heading">
								<h4 class="form-title">Profile</h4>
							</div>
							<div class="panel-body">
								<form action="{{ url('edit/profile/1') }}" method="post">
									{{ csrf_field() }}
									<div class="form-group {{ $errors->has('name') ? '__has-error' : '' }}">
		                                <label for="">Name</label>
		                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name')  ?  old('name')  :  Auth::user()->name }}">
		                                @if ($errors->has('name'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('name') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                            <div class="form-group {{ $errors->has('email') ? '__has-error' : '' }}">
		                                <label for="">Email</label>
		                                <input type="email" name="email" id="email" class="form-control" value="{{ old('name')  ?  old('name')  :  Auth::user()->email }}">
		                                @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
									<div class="form-group">
										<button type="submit" class="btn __btn __btn-blue" >Update Profile</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel form-panel edit profile">
						<div class="panel-heading">
							<h4 class="form-title">Change Password</h4>
						</div>
						<div class="panel-body">
							<form action="{{ url('change/password/'.Auth::user()->id) }}" method="post">
								{{ csrf_field() }}
								<div class="form-group {{ $errors->has('old_password') ? '__has-error' : '' }}">
									<label for="">Current Password</label>
									<input type="password" name="old_password" id="old_password" class="form-control">
									@if ($errors->has('old_password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('old_password') }}</strong>
	                                    </span>
		                            @endif
								</div>
								<div class="form-group {{ $errors->has('password') ? '__has-error' : '' }}">
									<label for="">New Password</label>
									<input type="password" name="password" id="password" class="form-control">
									@if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
								</div>
								<div class="form-group {{ $errors->has('password_confirmed') ? '__has-error' : '' }}">
									<label for="">Confirm New Password</label>
									<input type="password" name="password_confirmed" id="password_confirmed" class="form-control">
									@if ($errors->has('password_confirmed'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password_confirmed') }}</strong>
		                                    </span>
		                                @endif
								</div>
								<div class="form-group">
									<button type="submit" class="btn __btn __btn-blue">Update</button>
								</div>
							</form>
						</div>
					</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
@endsection