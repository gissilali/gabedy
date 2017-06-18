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
                    <form action="{{ route('register') }}" method="post">
                        {{  csrf_field() }}
                        <div class="panel panel-default form-panel">
                        <div class="panel-heading">
                            <h4 class="form-title">Sign Up</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group {{ $errors->has('name') ? '__has-error' : '' }}">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
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
                            <div class="form-group {{ $errors->has('terms') ? '__has-error' : ''}}">
                                <label for="terms">
                                    <input type="checkbox" name="terms" id="terms" {{ old('remember') ? 'checked' : '' }}> <small><a href="#">I Agree to Terms & Conditions</a></small>
                                </label>
                                @if ($errors->has('terms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('terms') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn __btn __btn-blue">Finish</button>
                                <p style="margin-top:10px"><small><strong>If you already have an account <a href="{{ url('login') }}">login</a></strong></small></p>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection