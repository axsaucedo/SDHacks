@extends('templates.one-sm-column')

@section('title', 'Reset Password')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Reset Password</div>
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

            <form role="form" method="POST" action="{{ url('/password/reset') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">

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
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
