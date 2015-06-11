@extends('layout')

@section('title')
    Apply for SD Hacks
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Apply</div>
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

                        @if (\Session::has('message'))
                            <div class="alert alert-success">
                                Your application has been saved!
                            </div>
                        @endif

                        {!! BootForm::horizontal(['store' => 'ApplicationsController@store']) !!}

                        {{-- Profile --}}
                        {!! BootForm::text('gender') !!}
                        {!! BootForm::text('phone') !!}
                        {!! BootForm::text('dob', 'Date of Birth') !!}
                        {!! BootForm::text('major') !!}
                        {!! BootForm::text('school') !!}
                        {!! BootForm::text('github', 'GitHub URL') !!}
                        {!! BootForm::text('linkedin', 'LinkedIn URL') !!}
                        {!! BootForm::text('website', 'Personal Website') !!}
                        {!! BootForm::textarea('website', 'Food Allergies') !!}

                        {{-- Application --}}
                        {!! BootForm::text('year') !!}
                        {!! BootForm::text('team_role', 'Team Role') !!}
                        {!! BootForm::checkbox('traveling') !!}
                        {!! BootForm::text('state') !!}
                        {!! BootForm::checkbox('reimbursement') !!}
                        {!! BootForm::checkbox('busing', 'Busing') !!}

                        {!! BootForm::submit() !!}

                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
