@extends('templates.default')

@section('head')
    <title>SD Hacks - Welcome</title>
@endsection

@section('content')
<div id="welcome-page">
    <section id="splash" class="container-fluid">
        <div id="splash-content">
            <div class="center-content">
                <img id="main-logo" src="/images/logo.png" alt="SD Hacks Logo">

                <div class="info-box row">
                    <p>Find out when San Diego's Primier Hackathon Goes Live</p>
                    <input type="text" class="col-xs-8">
                    <div class="button register-button col-xs-4">
                        Register
                    </div>
                </div>

            </div>
        </div>

        <div class="background-layer" id="background-layer-1"></div>
        <div class="background-layer" id="background-layer-2"></div>

    </section>
    <section id="overview">
        <div id="overview-content" class="container-fluid">
            <h3 class="section-title">
                For one weekend, SD Hacks plans to turn San Diego into the hack capital of the world and you're invited.
            </h3>

            <div class="bar">
                1000+ hackers
            </div>
            <div class="bar">
                5+ companies
            </div>
            <div class="bar">
                36 hours
            </div>
            <div class="bar">
                $1000s in prizes
            </div>
        </div>
    </section>
</div>
@endsection