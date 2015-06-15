@extends('templates.form')

@section('head')
    <title>SD Hacks - Register</title>
@endsection

@section('section-id')
    register
@endsection

@section('form')

<div class="col-xs-4 col-xs-offset-4">
    <form role="form" method="POST" action="{{ url('/auth/register') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="control-label">Email</label>

            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label class="control-label">Password</label>

            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label class="control-label">Confirm Password</label>

            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-boxed-white btn-lg btn-block">
                Register
            </button>
        </div>

    </form>
</div>


<!--
    <div class="panel panel-default">
        <div class="panel-heading">Register</div>
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
        </div>
    </div>
    -->
@endsection
