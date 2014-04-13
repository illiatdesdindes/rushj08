<?php

require_once('../model/Game.class.php');
require_once('../model/ImperialFrigate.class.php');
session_start();
include "../../controller/check_login.php";

$game = new Game([
		new ImperialFrigate('Hammer justice', 4, 1, Direction::$RIGHT),
		new ImperialFrigate('truc mush', 4, 6, Direction::$DOWN),
		new ImperialFrigate('Machin', 10, 2, Direction::$DOWN),
		new ImperialFrigate('Hammer fist', 148, 90, Direction::$UP, 'red'),
		new ImperialFrigate('Hammer fist', 128, 90, Direction::$UP, 'red'),
		new ImperialFrigate('Hammer fist', 110, 90, Direction::$UP, 'red'),
]);

echo json_encode($game->toHash());
$game->sessionSave();
?>

