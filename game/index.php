<html ng-app='game'>
<head>
	<title>Piscine PHP - J08</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
	<script src="js/game.js"></script>
</head>
<body >
	<div id="title">RUSH !!!</div>
	<div id="game" ng-controller='ShipsCtrl'>
		<div ng-repeat="ship in ships" >
			<div class='ship' style='width:{{ship.width}};height:{{ship.height}};top:{{ship.top}};left:{{ship.left}};margin-bottom:{{-ship.height}}'>
				{{ship.name}}
			</div>
		</div>
		<?PHP
		/*
		require_once("model/Grid.class.php");
		require_once('model/ImperialFrigate.class.php');
		$grid = new grid;
		$ship = new ImperialFrigate('Hammer justice', 4, 1, Direction::$LEFT, []);
		$ship2 = new ImperialFrigate('truc mush', 4, 6, Direction::$DOWN, []);
		$ship->draw();
		$ship2->draw();*/
		require_once("model/Grid.class.php");
		$grid = new grid;
		$grid->draw();
		?>
	</div>
	<div id="ctrl">
			<img src="images/arrow.png" usemap="ctrlmap" />
			<div id="add">
				<div>
					Move<br />
					<img src="images/less.png" onclick="Add(0, 0, this);" />
					<span>1</span>
					<img src="images/more.png" onclick="Add(0, 1, this);" />
				</div>
				<div>
					Shield<br />
					<img src="images/less.png" onclick="Add(1, 0, this);" />
					<span>1</span>
					<img src="images/more.png" onclick="Add(1, 1, this);" />
				</div>
			</div>
		<map id="ctrlmap" name="ctrlmap">
			<area shape="rect" alt="Up" coords="42,0,76,44" />
			<area shape="rect" alt="Left" coords="0,44,43,76" />
			<area shape="rect" alt="Right" coords="75,44,120,76" />
		</map>
		</div>
</body>
</html>
