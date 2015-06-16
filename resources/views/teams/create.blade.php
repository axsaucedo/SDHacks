@extends('templates.one-sm-column')

@section('title', 'Create a Team')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create a Team
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

                <p>Create or join a team to compete with your friends! You'll also have the chance to submit your team's idea to win an all inclusive trip to SD Hacks! We'll cover your travel and all the materials you need to make your idea real.</p>

                <hr />

                {!! BootForm::open(['action' => 'TeamsController@join']) !!}
                {!! BootForm::text('code', 'Join a team', null, ['placeholder' => 'Enter your team join code']) !!}
                {!! BootForm::submit('Join A Team', ['class' => 'btn btn-boxed-white btn-block']) !!}
                {!! BootForm::close() !!}

                <hr/>
                {!! BootForm::open(['action' => 'TeamsController@store']) !!}
                {!! BootForm::submit('Create Your Team', ['class' => 'btn btn-boxed-white btn-block']) !!}
                {!! BootForm::close() !!}

                <hr />

                <a class="btn btn-boxed-white btn-block" href="{{ route('dashboard') }}">Go Back</a>


            </div>
        </div>
    </div>
@endsection