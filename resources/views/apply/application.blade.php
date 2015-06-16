@extends('layout')

@section('title')
    Apply for SD Hacks
@endsection

@section('content')
    <div id="application">
        <div class="header">
            <div class="content">
                <h1>SD Hacks 2015 Application</h1>
                <a href="#gender-group" class="btn btn-lg btn-boxed-white">Get Started</a>
            </div>
        </div>
        <div class="container">
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
                <div class="alert alert-danger">
                    {{ \Session::get('message') }}
                </div>
            @endif

            {!! Form::open(['action' => 'ApplicationsController@store']) !!}

            {{-- Profile --}}
                <div id="gender-group" class="form-group form-high-group">
                    <label class="control-label" for="gender">
                        What gender do you identify as?
                    </label>

                    <input id="gender" class="form-control" type="text" name="gender"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="phone">
                        What's your phone number?
                    </label>

                    <input id="phone" class="form-control" type="text" name="phone"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="dob">
                        When were you born?
                    </label>

                    <input id="dob" class="form-control" type="date" name="dob"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="major">
                        What's your major?
                    </label>

                    <input id="major" class="form-control" type="text" name="major"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="school">
                        Where do you go to school?
                    </label>

                    <input id="school" class="form-control" type="text" name="school"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="github">
                        What's your GitHub URL?
                    </label>

                    <input id="github" class="form-control" type="text" name="github"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="linkedin">
                        What's your LinkedIn URL?
                    </label>

                    <input id="linkedin" class="form-control" type="text" name="linkedin"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="website">
                        What's your personal website URL?
                    </label>

                    <input id="website" class="form-control" type="text" name="website"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="allergies">
                        Do you have any food allergies?
                    </label>

                    <textarea id="allergies" class="form-control" name="allergies"></textarea>
                </div>

            {{-- Application --}}
                <div class="form-group form-high-group">
                    <label class="control-label" for="year">
                        What year in college are you?
                    </label>

                    <input id="year" class="form-control" type="text" name="year"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="team_role">
                        What role do you play on a team?
                    </label>

                    <input id="team_role" class="form-control" type="text" name="team_role"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="traveling">
                        Will you be traveling?
                    </label>

                    <input id="traveling" class="form-control" type="text" name="traveling"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="state">
                        Are you out of state? Which state will you be state from?
                    </label>

                    <input id="state" class="form-control" type="text" name="state"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="reimbursement">
                        Will you be requiring a travel reimbursement?
                    </label>

                    <input id="reimbursement" class="form-control" type="text" name="reimbursement"/>
                </div>

                <div class="form-group form-high-group">
                    <label class="control-label" for="busing">
                        Will you be busing?
                    </label>

                    <input id="busing" class="form-control" type="text" name="busing"/>
                </div>

                <button type="submit" class="btn btn-lg btn-boxed-white">
                    Submit
                </button>

            {!! Form::close() !!}
        </div>


    </div>
@endsection
