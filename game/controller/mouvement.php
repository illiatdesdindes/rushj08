<?php 

require_once( "../model/Game.class.php");
session_start();
$ret =  ((file_get_contents("php://input")));
$ret = (json_decode($ret, true));
$game = new Game();
$ship = $game->getShipId($ret['id']);

if ($ret['turn'] == 'right')
	$ship->turnRight();
else if ($ret['turn'] == 'left')
	$ship->turnLeft();
$ship->moveForward($ret['distance']);

echo $ship->toHash();

?>
