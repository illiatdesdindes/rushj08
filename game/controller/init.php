<?php

require_once('../model/Game.class.php');
require_once('../model/ImperialFrigate.class.php');
session_start();
include "../../controller/check_login.php";

$game = new Game([
		new ImperialFrigate('Hammer justice', 4, 1, Direction::$LEFT, []),
		new ImperialFrigate('truc mush', 4, 6, Direction::$DOWN, [])
]);

echo json_encode($game->toHash());
$game->sessionSave();
?>

