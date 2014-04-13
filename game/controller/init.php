<?php
session_start();


require_once('../model/ImperialFrigate.class.php');
$ship = new ImperialFrigate('Hammer justice', 4, 1, Direction::$LEFT, []);
$ship2 = new ImperialFrigate('truc mush', 4, 6, Direction::$DOWN, []);
//$ship->draw();
//$ship2->draw();

echo json_encode([
					$ship->toHash(),
					$ship2->toHash()
				]);

?>

