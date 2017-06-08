@extends('layouts.master')
@section('content')
	<div class="form-page-centering">
		<div class="container">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-container">
					<div class="form-logo-heading clearfix">
						<div class="logo-container">
							<img src="logo.svg" alt="gabedy-logo">	
						</div>
					</div>
					<div class="panel panel-default form-panel">
						<div class="panel-heading">
							<h4 class="form-title">Sign In</h4>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" name="" id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<div class="input-group">
									<input type="password" name="" id="" class="form-control">
									{{-- Extract Style --}}
									<span class="input-group-addon show-password __btn-blue-outline" style="cursor: pointer"><i class="fa fa-eye"></i></span>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn __btn __btn-blue">Login</button>
								<p style="margin-top:10px"><small><strong>If you don't have an account you can <a href="">sign up</a> here</strong></small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection