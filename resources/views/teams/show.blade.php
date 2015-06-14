@extends('templates.one-sm-column')

@section('title', 'Your Team')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                Your Team
            </div>
            <div class="panel-body text-center">
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

                <h4>Your Team Code:</h4>
                <h4>{{ $team->code }}</h4>

                <p class="h5">Share this code with your friends to add them to your team</p>

                <hr />

                <h4>Team Members:</h4>
                @foreach($team->members as $member)
                    <p class="h5">{{ $member->fname . ' ' . $member->lname }}</p>
                @endforeach

            </div>
        </div>
    </div>
@endsection