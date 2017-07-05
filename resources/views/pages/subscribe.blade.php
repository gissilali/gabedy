@extends('layouts.master')
@section('content')
    <div class="form-page-centering">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-container">
                    <div class="form-logo-heading clearfix">
                        <div class="logo-container">
                            <a href="{{ url('/') }}">
                                <img src="logo.svg" alt="gabedy-logo">  
                            </a>
                        </div>
                    </div>
                    <form action="{{ url('subscribe') }}" method="post">
                        {{  csrf_field() }}
                        <div class="panel panel-default form-panel">
                        <div class="panel-heading">
                            <h4 class="form-title">Subscribe to our Emails</h4>
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
                            <div class="form-group">
                                <button type="submit" class="btn __btn __btn-blue">Finish</button>
                                <p style="margin-top:10px"><small><strong>By subscribing you agree to our <a href="{{ url('terms-and-conditions') }}">T&C</a></strong></small></p>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection