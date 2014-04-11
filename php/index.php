<?php

require_once('Direction.trait.php');
require_once('ImperialFrigate.class.php');
require_once('Ship.class.php');
require_once('Game.class.php');


$game = new Game(150, 100, [new ImperialFrigate('Hammer of Justice', 99, 56, Direction::$RIGHT, [new ArmLn()])]);

?>
