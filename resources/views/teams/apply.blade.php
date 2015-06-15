@extends('templates.one-md-column')

@section('title', 'Your Team')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Your Team
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

                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

                {!! BootForm::open(['action' => 'TeamsController@submitApplication']) !!}
                {!! BootForm::textarea('project', 'Describe your project', $team->project) !!}
                {!! BootForm::submit('Submit Application', ['class' => 'btn btn-boxed-white btn-block']) !!}
                {!! BootForm::close() !!}

            </div>
        </div>
    </div>
@endsection