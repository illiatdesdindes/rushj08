<html>
<head>
	<title>Piscine PHP - J08</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div id="title">Piscine PHP - J08</div>
	<div id="game">
	<?PHP
	require "php/Grid.class.php";
	include 'php/Direction.trait.php';
	include 'php/Ship.class.php';
	include 'php/ImperialFrigate.class.php';
	$grid = new grid;
	$ship = new ImperialFrigate('Hammer justice', 3, 6, Direction::$LEFT, []);
	$ship2 = new ImperialFrigate('Hammer justice', 9, 2, Direction::$LEFT, []);
	$ship->draw();
	$ship2->draw();
	$grid->draw();
	?>	
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
		</div>
		<map id="ctrlmap" name="ctrlmap">
			<area shape="rect" alt="Up" coords="42,0,76,44" />
			<area shape="rect" alt="Left" coords="0,44,43,76" />
			<area shape="rect" alt="Right" coords="75,44,120,76" />
		</map>
</body>
</html>
