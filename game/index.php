<?php include '../controller/check_login.php' ?> 
<html ng-app='game'>
<head>
	<title>Awesome Starships Battles II</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
	<script src="js/game.js"></script>
</head>
<body >
	<div id="title">Awesome Starships Battles II</div>
	<div id="game" ng-controller='ShipsCtrl'>
		<div ng-repeat="ship in ships" >
			<div 	class='ship' 
					style='width:{{ship.width}};height:{{ship.height}};top:{{ship.top}};left:{{ship.left}};margin-bottom:{{-ship.height}}'
					ng-click="select(ship)">
				{{ship.name}}
			</div>
		</div>
		<?PHP
			require_once("model/Grid.class.php");
			$grid = new grid;
			$grid->draw();
		?>
	
		<div id="ctrl" ng-show="selected.id">
			<h3>Selected Ship : {{selected.name}}</h3>
			<form name="ctrl" action="index.php" method="post">
				<fieldset>
					<legend>Direction</legend>
					<h4>
						<span ng-show="selected.turn">Turn {{selected.turn}} and</span> 
						Move forward {{selected.move}}
					</h4>
					<input type="button" value="turn left" ng-click="turnleft(selected)"/>
		   			<input type="range" max="{{selected.speed}}" ng-model="selected.move">
					<input type="button" value="turn right" ng-click="turnright(selected)"/>
					<input type="button" value="MOVE" ng-click="move(selected)"/>

	 			</fieldset>
			</form>
			<form>
				<fieldset>
					<legend>Fire</legend>
					<h4>Do you want to fire ?</h4>
					<input type="button" value="FIRE" ng-click="fire(selected)"/>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>
