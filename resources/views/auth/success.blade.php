@extends('layout')

@section('title', 'Success!')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Success</div>
                    <div class="panel-body">
                        <p>You should have received an email containing a confirmation link. Please verify your email address by clicking the link before filling out your application.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
