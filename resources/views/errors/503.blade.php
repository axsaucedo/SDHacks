<html>
	<head>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

        <title>SD Hacks - Under Maintenance</title>

        <meta property="og:image" content="{{ asset('/images/sdhacks_city.png') }}" />

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: white;
				display: table;
                font-family: 'Open Sans' !default;
                font-weight: 100;
                background: url(/images/scripps.jpg);
                background-size: cover;
			}

			.container-down {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 60px;
				margin-bottom: 40px;
			}
		</style>

        @if(env('APP_ENV') == 'production')
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-54846153-1', 'auto', {
                    cookieDomain: 'sdhacks.io'
                });
                ga('send', 'pageview');

            </script>
        @endif
	</head>
	<body>
		<div class="container-down">
			<div class="content">
                <div class="col-xs-8 col-sm-6 col-md-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-4">
                    <img class="img-responsive logo" src="{{ asset('images/logo.png') }}" alt="SD Hacks Logo"/>
                </div>
                <div class="col-xs-12">
                    <div class="title">We'll be right back</div>
                </div>
			</div>
		</div>
	</body>
</html>
