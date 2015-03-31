angular
	.module('app')
	.controller('homeCtrl', [ '$scope', function($scope){
					$scope.findOut = "HOME";
					$scope.about = "For one weekend, SD Hacks plans to turn San Diego into the 
    						hack capital of the world and you are invited.";
					$scope.title = "HOME";
					$scope.items = ['home','about','contact'];

				}]);