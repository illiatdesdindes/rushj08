<?php

require_once('../model/Game.class.php');
session_start();
$ret = json_decode(file_get_contents("php://input"), true);
$game = new Game();
$ship = $game->getShipId($ret['id']);
$ship->fire($game->getShips());
?>
