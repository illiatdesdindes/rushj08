game = angular.module('game', []);

game.controller('CommandsCtrl', function($scope){
	
});

game.controller('ShipsCtrl', function($scope, $http, $sce){
	$scope.selected = {};
	$scope.selected.move = 0;
	$http.get('/game/controller/init.php')
			.success(function(data){
				$scope.ships = data;
			});
	$scope.select = function(ship) {
		$scope.selected = ship;
	};
	$scope.select = function(ship) {}
});
