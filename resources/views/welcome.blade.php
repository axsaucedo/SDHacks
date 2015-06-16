@extends('templates.default')

@section('head')
    <title>SD Hacks - Welcome</title>
@endsection

@section('content')
<div id="welcome-page">

    <div id="nav-bar" class="container-fluid hidden-xs">
        <div class="logo">
            SDHACKS<span>2015</span>
        </div>
        <div class="dots">
            <a href="#splash-content">
                <div class="dot splash active">
                    <div class="circle">
                    </div>
                    <div class="title">
                        <span>Home</span>
                    </div>
                </div>
            </a>
            <a href="#innovation-content" data-offset="-160">
                <div class="dot innovation">
                    <div class="circle">
                    </div>
                    <div class="title">
                        <span>Innovate</span>
                    </div>
                </div>
            </a>
            <a href="#overview-content" data-offset="-75">
                <div class="dot overview">
                    <div class="circle">
                    </div>
                    <div class="title">
                        <span>About</span>
                    </div>
                </div>
            </a>
            <a href="#faq-content" data-offset="-75">
                <div class="dot faq">
                    <div class="circle">
                    </div>
                    <div class="title">
                        <span>FAQ</span>
                    </div>
                </div>
            </a>
            <a href="#sponsors-content" data-offset="-75">
                <div class="dot sponsors">
                    <div class="circle">
                    </div>
                    <div class="title">
                        <span>Sponsors</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="hidden-xs" style="width: 100vw; height: 100px; z-index:0; background-color:rgba(36,164,199,0.6); position: absolute; bottom:-100px;" >
    </div>
    <section id="splash" class="container-fluid">
        <div id="splash-content">
            <div class="center-content">
                <img id="main-logo" src="/images/logo.png" alt="SD Hacks Logo">

                <div class="info-box row">
                    <p class="hook">What if the only limit on what you could build was your imagination?</p>
                    <p class="info">UC San Diego | October 2-4</p>

                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <a href="{{ action('Auth\AuthController@getLogin') }}" class="button register-button col-md-4 col-md-offset-1 col-xs-12">
                            Register
                        </a>
                        <a href="mailto:sponsor@sdhacks.io" target="_blank" class="button register-button hidden-xs col-md-4 col-md-offset-2 col-xs-12">
                            Sponsor
                        </a>
                    </div>

                    <div class="social col-xs-12">
                        <a href="https://www.facebook.com/SDHacks" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/sdhacks" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="mailto:support@sdhacks.io" target="_blank">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="background-layer" id="background-layer-1"></div>
        <div class="background-layer" id="background-layer-2"></div>
        <div class="background-layer" id="background-layer-3"></div>

    </section>

    <section id="innovation">
        <div id="innovation-content" class="container-fluid">
            <div class="section-title">
                Let Innovation Shine
            </div>
            <div class="content container">
                Until July 1st, SD Hacks will be listening to you for the best ideas you can dream of. The top 5 ideas with
                their teams will have an all-expenses paid trip to San Diego, as well as all the supplies the hackers need
                waiting for them at the event. Consider this the real-life gateway into your imagination.
            </div>
        </div>
    </section>

    <section id="overview">
        <div id="overview-content" class="container-fluid">
            <h3 class="section-title">
                For one weekend, SD Hacks plans to turn San Diego into the hack capital of the world and you're invited.
            </h3>

            <div class="bar">
                1000+ hackers
            </div>
            <div class="bar hidden-xs">
                International Competition
            </div>
            <div class="bar">
                $1000's in prizes
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
                    A hackathon is an event, typically lasting several days, in which a large number of people meet to
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
                    Teams can be as large as you’d like, but only groups of up to 4 people are eligible for all prizes and
                    team-based travel reimbursement.
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
                <h4>How Do I Get To The Event?</h4>
                <p>
                    Several students will be awarded direct travel reimbursements, and there will be free bussing from
                    major locations around California.
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
            <div class="row">
            <!--
                <div class="col-md-8 col-md-offset-2">
                    <div class="logo" style="background-image: url(http://d2vhierclfllnw.cloudfront.net/wp-content/uploads/sites/7/2014/09/affiliate-qualcomm-logo-01352357fc32cec6fb50356b86350d401.png);"></div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="logo" style="background-image: url(http://www.bloomberg.com/graphics/2015-cheatsheets/img/bofalogo.png)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="logo" style="background-image: url(https://www.google.com/images/srpr/logo11w.png)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                    <div class="logo" style="background-image: url(http://www.govigaming.com/razer2.png)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-4">
                    <div class="logo" style="background-image: url(http://www.freelargeimages.com/wp-content/uploads/2014/11/Facebook_logo-9.png)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4">
                    <div class="logo" style="background-image: url(http://i198.photobucket.com/albums/aa310/Govavi/GEAR%20STORE/VaviLogo.png)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4">
                    <div class="logo" style="background-image: url(http://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Cisco_logo.svg/2000px-Cisco_logo.svg.png)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4">
                    <div class="logo" style="background-image: url(http://upload.wikimedia.org/wikipedia/commons/5/5d/CBS_Interactive_Logo.PNG)">
                    </div>
                    <div class="hidden-xs"></div>
                </div>
                -->
                <a href="mailto:sponsor@sdhacks.io" target="_blank">
                    <div class="sponsor-button col-xs-12">
                        Become a Sponsor <i class="fa fa-arrow-circle-right" style="font-size: 2rem;"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="presented">
        <div id="presented-content" class="container-fluid">
            <div class="section-title col-xs-12">
                Presented By
            </div>
            <div class="logo-container col-xs-12 col-md-8 col-md-offset-2 hidden-xs">
                <img alt="TESC | UC San Diego - Jacobs School of Engineering" src="/images/tesc_blue.png">
                <a href="https://mlh.io/" target="_blank">
                    <img alt="MLH" src="/images/mlh-logo.png">
                </a>
            </div>
            <div class="logo-container col-xs-12 col-md-8 col-md-offset-2 visible-xs-block">
                <img alt="TESC | UC San Diego - Jacobs School of Engineering" src="/images/tesc_blue.png" style="width: auto; height: 56px;">
                <br>
                <br>
                <a href="https://mlh.io/" target="_blank">
                    <img alt="MLH" src="/images/mlh-logo.png" style="height: 56px;">
                </a>
            </div>
        </div>
    </section>

    <section id="footer">
        <div id="footer-content" class="container-fluid">
            <img class="mini-logo" src="/images/mini_logo_white.png">
            <div>Copyright SD Hacks 2015</div>
        </div>
    </section>
</div>
@endsection