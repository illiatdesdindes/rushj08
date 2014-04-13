<?php 

include "../model/Game.class.php";
session_start();
$ret =  ((file_get_contents("php://input")));
$test = (json_decode($ret, true));
$test2 = new Game();
print_r($test2->getShips());
echo $test['id']."<br/>";
echo $test['distance']."<br/>";
echo $test['turn']."<br/>";
?>
