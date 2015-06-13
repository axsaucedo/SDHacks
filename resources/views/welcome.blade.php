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
    <section id="faq">
        <div id="faq-content" class="container">
            <div class="question">
                <h4>What is a Hackathon?</h4>
                <p>
                    A hackathon is an event, typically lasting several days,in which a large number of people meet to
                    engage in collaborative computer programming.
                </p>
            </div>
            <div class="question">
                <h4>Who can attend?</h4>
                <p>
                    We welcome any and all undergraduate students from any university to attend SD Hacks.
                </p>
            </div>
            <div class="question">
                <h4>How Big are the Teams?</h4>
                <p>
                    A hackathon is an event, typically lasting several days, in which a large number of people meet to
                    engage in collaborative computer programming.
                </p>
            </div>
            <div class="question">
                <h4>What if I don't have a team?</h4>
                <p>
                    No problem! We'll be having a mixer right before the hack so that you can team up. No one has to
                    hack alone.
                </p>
            </div>
            <div class="question">
                <h4>How much does it cost?</h4>
                <p>
                    The event is free to college students who make it through our registration process. Food,
                    electricity, internet, and all other necessary equipment for your development process will be provided.
                </p>
            </div>
            <div class="question">
                <h4>What If I Have a Question Not Answered Here?</h4>
                <p>
                    A hackathon is an event, typically lasting several days,in which a large number of people meet to
                    engage in collaborative computer programming.
                </p>
            </div>
        </div>
    </section>
    <section id="sponsors">
        <div id="sponsors-content" class="container-fluid">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(http://www.bloomberg.com/graphics/2015-cheatsheets/img/bofalogo.png)">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(https://www.google.com/images/srpr/logo11w.png)">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(http://www.govigaming.com/razer2.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(http://www.freelargeimages.com/wp-content/uploads/2014/11/Facebook_logo-9.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(http://i198.photobucket.com/albums/aa310/Govavi/GEAR%20STORE/VaviLogo.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(http://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Cisco_logo.svg/2000px-Cisco_logo.svg.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="logo" style="background-image: url(http://upload.wikimedia.org/wikipedia/commons/5/5d/CBS_Interactive_Logo.PNG)">
                </div>
            </div>

        </div>
    </section>
</div>
@endsection