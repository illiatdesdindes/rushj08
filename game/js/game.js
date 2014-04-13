game = angular.module('game', []);

game.controller('CommandsCtrl', function($scope){
	
});

game.controller('ShipsCtrl', function($scope, $http, $sce){
	$http.get('/game/controller/init.php')
			.success(function(data){
				$scope.ships = data;
			});
	$scope.select = function(ship) {
		ship.top += 20;
	};
});
