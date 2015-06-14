@extends('layout')

@section('content')
    <div id="auth">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-logo text-center">
                            <img src="{{ asset('/images/logo.png') }}" alt="SD Hacks Logo"/>
                        </div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form role="form" method="POST" action="{{ url('/auth/login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="control-label">Email</label>

                                    <input type="email" class="form-control" name="email"
                                           value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Password</label>

                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ action('Auth\AuthController@getRegister') }}" class="btn btn-primary btn-lg
                                        btn-block">Register</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="panel-extension text-center">
                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your
                            Password?</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
