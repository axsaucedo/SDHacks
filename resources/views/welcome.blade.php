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
                $1000s in prizes
            </div>
            <div class="bar">
                36 hours
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
                    Feel free to contact our team by sending an email to <a href="mailto:support@sdhacks.io" target="_blank">support@sdhacks.io</a>!
                </p>
            </div>
        </div>
    </section>
    <section id="sponsors">
        <div id="sponsors-content" class="container-fluid">
            <div class="col-md-8 col-md-offset-2">
                <div class="logo" style="background-image: url(http://d2vhierclfllnw.cloudfront.net/wp-content/uploads/sites/7/2014/09/affiliate-qualcomm-logo-01352357fc32cec6fb50356b86350d401.png);"></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="logo" style="background-image: url(http://www.bloomberg.com/graphics/2015-cheatsheets/img/bofalogo.png)">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="logo" style="background-image: url(https://www.google.com/images/srpr/logo11w.png)">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-4">
                <div class="logo" style="background-image: url(http://www.govigaming.com/razer2.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-4">
                <div class="logo" style="background-image: url(http://www.freelargeimages.com/wp-content/uploads/2014/11/Facebook_logo-9.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4">
                <div class="logo" style="background-image: url(http://i198.photobucket.com/albums/aa310/Govavi/GEAR%20STORE/VaviLogo.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4">
                <div class="logo" style="background-image: url(http://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Cisco_logo.svg/2000px-Cisco_logo.svg.png)">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4">
                <div class="logo" style="background-image: url(http://upload.wikimedia.org/wikipedia/commons/5/5d/CBS_Interactive_Logo.PNG)">
                </div>
            </div>
        </div>
    </section>
    <section id="presented">
        <div id="presented-content" class="container-fluid">
            <div class="section-title col-xs-12">
                Presented By
            </div>
            <div class="logo-container col-xs-12 col-md-8 col-md-offset-2">
                <img alt="TESC | UC San Diego - Jacobs School of Engineering" src="/images/tesc_blue.png">
                <img alt="MLH" src="http://static.mlh.io/brand-assets/logo/mlh-logo.png">
            </div>
        </div>
    </section>
    <section id="footer">
        <div id="footer-content" class="container-fluid">
            <img class="mini-logo" src="/images/mini_logo_white.png">
            <a href="mailto:support@sdhacks.io" target="_blank">support@sdhacks.io</a>
            <div style="float: right; padding-right: 15px;">Copyright SD Hacks 2015</div>
        </div>
    </section>
</div>
@endsection