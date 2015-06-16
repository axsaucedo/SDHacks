@extends('templates.one-sm-column')

@section('title')
    Settings
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Account Settings</div>
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

            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

            {{--{!! BootForm::open(['action' => 'Auth\AuthController@update']) !!}--}}
            {{--{!! BootForm::text('email', 'Email') !!}--}}
            {{--{!! BootForm::text('password', 'Password') !!}--}}
            {{--{!! BootForm::text('password_confirmation', 'Confirm Password') !!}--}}
            {{--{!! BootForm::submit('Save', ['class' => 'btn btn-block btn-lg btn-boxed-white']) !!}--}}

            {{--<hr />--}}

                <a href="{{ action('Auth\AuthController@redirectToGitHub') }}" class="btn btn-boxed-white btn-lg btn-block">
                    <i class="fa fa-lg fa-github"></i> Connect GitHub</a>
        </div>
    </div>
@endsection
