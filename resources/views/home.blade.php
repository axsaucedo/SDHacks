@extends('layout')

@section('content')

    <div class="page">
        <!-- Header -->
        <section id="home" class="header">
            <!--CONTAINER FOR THE GRID-->
            <div class="container">
                <!--ROW for the grid-->
                <div class="row">
                    <div class="col-xs-12 col-lg-12 text-vertical-center home-logo-margin">
                        <h1><img src="{{ asset('images/logo.png') }}" alt="Logo"></h1>
                    </div>
                    <div class=" text-vertical-center col-xs-12 col-lg-12  ">
                        <div class="btn btn-dark btn-lg ">
                            <div class="home-label">
                                Find out when San Diego's First Premier Hackathon goes live
                            </div>
                            <form class=" form-inline">

                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email">
                                </div>

                                <button type="submit" class="btn btn-default">I'M READY</button>

                            </form>
                        </div>
                        <!--BUTTON AREA -->
                    </div>
                </div>
            </div>
            <!--ROW-->
        </section>
    </div><!--CONTAINER-->


    <!-- About -->
    <section id="about" class="about">
        <div style="padding:100px ">
            <div class="container">
                <div class="row  ">
                    <div class="col-xs-12 col-lg-12">
                        <div class="col-s-4 col-lg-12 about-label ">
                            <label id="aboutLabel">For one weekend, SD Hacks plans to turn San Diego into the
                                hack capital of the world and you are invited.</label>
                        </div>
                        <div class="col-s-4 col-md-3">
                            <div class="circles">
                                5+ COMPANIES
                            </div>

                        </div>

                        <div class="col-s-4 col-md-3">
                            <div class="circles">
                                1000+ HACKERS
                            </div>

                        </div>

                        <div class="col-x-4 col-md-3">
                            <div class="circles">
                                36 HOURS
                            </div>

                        </div>

                        <div class="col-s-4 col-md-3">
                            <div class="circles">
                                $1000s IN PRIZES
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>


    <!-- FAQ -->
    <section id="faq" class="faq">
        <div style="padding:100px ">
            <div class="container">
                <div class="row ">
                    <div class=" col-md-4 faq-question-labels">
                        WHAT IS A HACKATHON?
                    </div>

                    <div class=" col-md-4 faq-question-labels">
                        WHO CAN ATTEND?
                    </div>

                    <div class=" col-md-4 faq-question-labels">
                        HOW BIG ARE THE TEAMS?
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-4 faq-info-labels">
                        A hackathon is an event,
                        typically lasting several days,
                        in which a large number of
                        people meet to engage in
                        collaborative computer
                        programming.
                    </div>

                    <div class=" col-md-4 faq-info-labels">
                        We welcome any and all
                        undergraduate students
                        from any university to
                        attend SD Hacks.
                    </div>

                    <div class=" col-md-4 faq-info-labels">
                        We encourage a policy of
                        no lone hackers, and no
                        teams bigger than five.
                        We believe that this best
                        promotes both what a hack
                        means to us, and what is
                        the most fun.
                    </div>
                </div>

                <div class="row" style="padding:25px">

                </div>

                <div class="row ">
                    <div class="col-xs-2 col-md-4 faq-question-labels">
                        WHAT IF I DON'T HAVE A TEAM?
                    </div>

                    <div class="col-xs-2 col-md-4 faq-question-labels">
                        HOW MUCH DOES IT COST?
                    </div>

                    <div class="col-xs-2 col-md-4 faq-question-labels">
                        WHAT IF I HAVE A QUESTION NOT ANSWERED HERE?
                    </div>
                </div>

                <div class="row ">
                    <div class="col-xs-2 col-md-4 faq-info-labels">
                        No problem! We'll be
                        having a mixer right before
                        the hack so that you can
                        team up. No one has to
                        hack alone.
                    </div>

                    <div class="col-xs-2 col-md-4 faq-info-labels">
                        The event is free to college
                        students who make it
                        through our registration
                        process. Food, electricity,
                        internet, and all other
                        necessary equipment for
                        your development process
                        will be provided.
                    </div>

                    <div class="col-xs-2 col-md-4 faq-info-labels">
                        Feel free to contact our
                        team by using the form
                        below OR send an email
                        to support@sdhacks.io!
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- SPONSORS -->
    <section id="sponsors" class="sponsors">
        <div style="padding:100px ">
            <div class="container-fluid">
                <div class="row ">
                    <!--Sponsors DIVS IMAGES -->
                    <div class="col-xs-4 col-md-4 faq-question-labels">
                    </div>

                    <div class="col-xs-4 col-md-4 faq-question-labels">
                    </div>

                    <div class="col-xs-4 col-md-4 faq-question-labels">
                    </div>
                </div>


                <div class="row" style="padding:25px">

                </div>
            </div>

        </div>
    </section>


    <!-- Contact -->
    <section id="contact" class="contact">
        <div style="padding:100px ">
            <div class="container ">
                <div class="row ">
                    <!--EMAIL TEXT-->
                    <div class="contact-margin">
                        <div class="col-xs-12 col-lg-12 text-vertical-center ">
                            <a class="email-text" href="mailto:sdhacks@sdhacks.io">sdhacks@sdhacks.io</a>
                        </div>

                        <!--ICONS -->
                        <div class="col-xs-12 col-lg-12 text-vertical-center ">

                            <a href="https://www.facebook.com/SDHacks"><i
                                        class="fa fa-facebook fa-fw fa-inverse fa-5x"></i></a>

                            <a href="#"><i class="fa fa-twitter fa-fw fa-inverse fa-5x"></i></a>

                            <a href="mailto:sdhacks@sdhacks.io"><i class="fa fa-envelope-o fa-fw fa-inverse fa-5x"></i></a>

                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-12 text-vertical-center presented-margin presented-text">
                        PRESENTED BY
                    </div>

                    <div class="col-xs-12 col-lg-12 text-vertical-center logos-margin">
                        <img style="margin-right: 20px" src="{{ asset('images/tescLogo.png') }}" alt="Logo">
                        <img src="{{ asset('images/mlhLogo.png') }}" alt="Logo">
                    </div>


                    <div class="col-xs-12 col-lg-12 text-vertical-center built-text">
                        Built by SD Hacks Team 2015 with &hearts;
                    </div>

                </div>
                <!--ROW-->
            </div>
            <!--CONTAINER-->
        </div>
        <!--SECTION PADING-->
    </section>
@endsection