@extends('templates.one-md-column')

@section('title', 'Dashboard')

@section('content')
    <div id="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Welcome, hacker!</h1>
                    <div class="text-center" style="padding: 10px 0;">
                        <a class="btn btn-boxed-white" href="{{ action('Auth\AuthController@edit') }}">
                            <i class="fa fa-cog fa-lg"></i> Account Settings</a>
                        <a class="btn btn-boxed-white" href="{{ action('Auth\AuthController@getLogout') }}">
                            <i class="fa fa-sign-out fa-lg"></i> Log Out</a>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Apply</div>
                                <div class="panel-body text-center">
                                    @if(\Auth::user()->application)
                                        <p>Thanks for submitting an application!</p>
                                        <p>Check your email for more information soon.</p>
                                    @else
                                        <a href="{{ action('ApplicationsController@create') }}" class="btn btn-block btn-boxed-white">Apply Now</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Team</div>
                                <div class="panel-body text-center">
                                    @if(\Auth::user()->team)
                                        <p>Your team join code is:</p>
                                        <p>{{ \Auth::user()->team->code }}</p>
                                        <a href="{{ action('TeamsController@show') }}" class="btn btn-block btn-boxed-white">View Team Information</a>
                                    @else
                                        <p>You don't have a team yet!</p>
                                        <a href="{{ action('TeamsController@create') }}" class="btn btn-block btn-boxed-white">Create/Join a Team</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection