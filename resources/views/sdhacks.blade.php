
<html>

	<head>
	   	 <script data-require="angular.js@1.2.10" data-semver="1.2.10" src="http://code.angularjs.org/1.2.10/angular.js"></script>
	   	 <script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
	    <link rel="stylesheet" href="css/app.css" />
	    <link rel="stylesheet" href="css/sdhacks.css" />

	    <!--FONTS STYLES -->
    	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
 		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

 		<!--FONT AWESOME-->
 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 	</head>

	<div  ng-app = "app">
			<!-- <header ng-include="'templates/nav.html'"> </header> -->
			<div ui-view></div>
			<!-- <footer ng-include="'templates/footer.html'"> </footer> -->
 	</div> 



 	  <script src="js/app2.js"></script>
 	  <script src="js/controllers/homeCtrl.js"></script>  
</html>