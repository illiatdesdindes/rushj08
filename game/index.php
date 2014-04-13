<html>
<head>
	<title>Piscine PHP - J08</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div id="title">RUSH !!!</div>
	<div id="game">
	<?PHP
	require_once("model/Grid.class.php");
	require_once('model/ImperialFrigate.class.php');
	$grid = new grid;
	$ship = new ImperialFrigate('Hammer justice', 4, 1, Direction::$LEFT, []);
	$ship2 = new ImperialFrigate('truc mush', 4, 6, Direction::$DOWN, []);
	$ship->draw();
	$ship2->draw();
	$grid->draw();
	?>
	<div id="de">
	<form name="dice" action="index.php" method="post">
<fieldset>
<legend>Dice</legend>
<input type="submit" name="dice" value="go">
</fieldset>
	</form>
	<?php
	if (isset($_POST['dice']) == "de")
		echo mt_rand(1,6);
	?>
	</div>

<form name="ctrl" action="index.php" method="post">
<fieldset>
       <legend>Direction</legend>

       <label for="devant">------- ^ --------</label><br/>
       <label for="left"> < </label>
       <input type="radio" name="direction" id="left" />

       <input type="radio" name="direction" id="avance" />
 
       <input type="radio" name="direction" id="right" />
       <label for="right"> > </label>

 </fieldset>
<fieldset>
       <legend>Move</legend>

       <label for="less"> - </label>
       <input type="submit" name="less" id="less" />
       <label for="more"> + </label>
       <input type="radio" name="direction" id="right" />
 </fieldset>
<fieldset>
       <legend>Move</legend>
 

</fieldset>

 
</form>
		</div>
			<area shape="rect" alt="Up" coords="42,0,76,44" />
			<area shape="rect" alt="Left" coords="0,44,43,76" />
			<area shape="rect" alt="Right" coords="75,44,120,76" />
		</map>
</body>
</html>
