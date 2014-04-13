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
		$scope.selected.activated = true;
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
		var data = {id:ship.id, turn:ship.turn, distance: ship.move};
		$http.post('/game/controller/mouvement.php', data)
				.success();
	};
	$scope.fire = function(ship) {
		var data = {id:ship.id, fire:true};
		$http.post('/game/controller/fire.php', data);
	};
});
