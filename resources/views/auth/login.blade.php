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
                    <form action="{{ route('login') }}" method="post">
                        {{  csrf_field() }}
                        <div class="panel panel-default form-panel">
                            <div class="panel-heading">
                                <h4 class="form-title">Sign In</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group {{ $errors->has('email') ? '__has-error' : '' }}">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? '__has-error' : '' }}">
                                    <label for="">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control">
                                        {{-- Extract Style --}}
                                        <span class="input-group-addon show-password __btn-blue-outline" style="cursor: pointer"><i class="fa fa-eye"></i></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn __btn __btn-blue">Login</button>
                                    <p style="margin-top:10px"><small><strong>If you do not have an account <a href="{{ url('register') }}">sign up</a></strong></small></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title')
    Login to Gabedy
@endsection