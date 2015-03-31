
<html>

	<head>
	   	 <script data-require="angular.js@1.2.10" data-semver="1.2.10" src="http://code.angularjs.org/1.2.10/angular.js"></script>
	   	 <script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
	    <link rel="stylesheet" href="css/app.css" />
	    <link rel="stylesheet" href="css/sdhacks.css" />
    
 	</head>

	<div  ng-app = "app">
			<!-- <header ng-include="'templates/nav.html'"> </header> -->
			<div ui-view></div>
			<!-- <footer ng-include="'templates/footer.html'"> </footer> -->
 	</div> 



 	  <script src="js/app2.js"></script>
 	  <script src="js/controllers/homeCtrl.js"></script>  
</html>