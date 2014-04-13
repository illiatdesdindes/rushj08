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
	
		<div id="ctrl">
			<div id="de">
				<form name="dice" action="index.php" method="post">
					<fieldset>
						<legend>Dice</legend>
						<input type="submit" name="dice" value="go">
					</fieldset>
				</form>
			</div>
			<form name="ctrl" action="index.php" method="post">
				<fieldset>
		   			<legend>Direction</legend>
		   			<input type="range" >

	 			</fieldset>
			</form>
		</div>
	</div>
</body>
</html>
