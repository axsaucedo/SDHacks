@extends('templates.one-sm-column')

@section('content')
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
                        <button type="submit" class="btn btn-boxed-white btn-lg btn-block">Login</button>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ action('Auth\AuthController@getRegister') }}" class="btn btn-boxed-white btn-lg
                                        btn-block">Register</a>
                    </div>
                </div>

                <br />

                <div class="row">
                    <div class="col-xs-12">
                        <a href="{{ action('Auth\AuthController@redirectToGitHub') }}" class="btn btn-boxed-white btn-lg btn-block">
                            <i class="fa fa-lg fa-github"></i> Login/Register with GitHub</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="panel-extension text-center">
        <a href="{{ url('/password/email') }}">Forgot Your
            Password?</a>
    </div>
@endsection
