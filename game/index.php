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
	
		<div id="ctrl">
			<h3>Selected Ship : {{selected.name}}</h3>
			<form name="ctrl" action="index.php" method="post">
				<fieldset>
		   			<legend>Direction</legend>
					<input type="button" value="turn left" ng-click="turnleft(selected)"/>
		   			<input type="range" max="{{selected.speed}}" ng-model="selected.move"> {{selected.move}}
					<input type="button" value="turn right" ng-click="turnright(selected)"/>

	 			</fieldset>
			</form>
		</div>
	</div>
</body>
</html>
