<?php

session_start();

require_once('../model/Game.class.php');
require_once('../model/ImperialFrigate.class.php');
$game = new Game();
$game->push(new ImperialFrigate('Hammer justice', 4, 1, Direction::$LEFT, []));
$game->push(new ImperialFrigate('truc mush', 4, 6, Direction::$DOWN, []));



echo json_encode($game->toHash());

?>

