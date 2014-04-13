game = angular.module('game', []);

game.controller('CommandsCtrl', function($scope){
	
});

game.controller('ShipsCtrl', function($scope, $http, $sce){
	$scope.selected = {};
	$scope.selected.move = 0;
	$scope.ships = [];
	$http.get('/game/controller/init.php')
			.success(function(data){
				$scope.ships = data;
			});
	$scope.select = function(ship) {
		if (ship.alive) {
			$scope.selected = ship;
			$scope.selected.activated = true;
		}
	};
	$scope.turnright = function(ship) {
		if (!$scope.selected.turn)
			$scope.selected.turn = "right";
	};
	$scope.turnleft = function(ship) {
		if (!$scope.selected.turn)
			$scope.selected.turn = "left";
	};
	$scope.move = function(ship) {
		if (!ship.turn)
			ship.turn = "";
		var data = {id:ship.id, 'turn':ship.turn, distance: ship.move};
		$http.post('/game/controller/mouvement.php', data)
				.success(function(data){
					$scope.selected.top = data.top;
					$scope.selected.left = data.left;
					$scope.selected.width = data.width;
					$scope.selected.height = data.height;
					$scope.selected.life = data.life;
					$scope.selected.alive = data.alive;
				});
	};
	$scope.fire = function(ship) {
		var data = {id:ship.id, fire:true};
		$http.post('/game/controller/fire.php', data)
				.success(function(data){
					//$scope.selected.life = data.life;
					//$scope.selected.alive = data.alive;
					$scope.ships = data;
				});
	};
});
