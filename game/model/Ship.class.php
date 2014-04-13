<?php

require_once('ArmLn.class.php');
require_once('Direction.trait.php');

abstract class Ship {

	use Direction;

	protected	$_id;
	protected	$_x;
	protected	$_y;
	protected	$_name; 
	protected	$_size;
	protected	$_life;
	protected	$_lifemax;
	protected	$_power;
	protected	$_speed;
	protected	$_operate;
	protected	$_shield;
	protected	$_arm;
	protected	$_team ="blue";
	protected	$_alive = true;


	public function __construct($shipName, $x, $y, $direction, $team) {
		$this->_id			= uniqid();
		$this->_x			= $x;
		$this->_y			= $y;
		$this->_name		= $shipName;
		$this->setDirection($direction);
		$this->_team 		= $team;
	}

	public function getId() {
		return $this->_id;
	}
	public function getX() {
		return $this->_x;
	}
	public function getY() {
		return $this->_y;
	}
	public function moveForward($nbr){
		$dir = $this->_direction;
		if ($dir == self::$UP)
			$this->_y -= $nbr;
		else if ($dir == self::$DOWN)
			$this->_y +=  $nbr;
		else if ($dir == self::$RIGHT)
			$this->_x +=  $nbr;
		else if ($dir == self::$LEFT)
			$this->_x -=  $nbr;
		if ($this->_x < 0 OR $this->_x > 150 OR $this->_y < 0 OR $this->_y > 100){
			$this->_life = 0;
			$this->_alive = false;
		}

	}
	public function fire($ships) {
		$this->_arm->fire($this, $ships);
	}

	public function collide($x, $y) {
		$ox = $this->_x - $this->getHalfX();
		$oy = $this->_y - $this->getHalfY();
		$w = $this->_size[0];
		$h = $this->_size[1];
		if ($x >= $ox 
			&& $x < $ox + $w
			&& $y >= $oy 
			&& $y < $oy + $h)
			return true;
		else
			return false;
	}

	public function takeDamage($damage) {
		$this->_life -= $damage;
		if ($this->_life <= 0) {
			$this->_life = 0;
			$this->_alive = false;
		}	
	}

	public function draw() {
		$width = $this->_size[0] * (11 + 1) - 1;
		$height = $this->_size[1] * (11 + 1) - 1;
		$left = ($this->_x - $this->getHalfX()) * 12;
		$top = ($this->_y - $this->getHalfY()) * 12 ;
		echo "
			<div class='ship' style='width:$width;height:$height;top:$top;left:$left;margin-bottom:-$height'>
			$this->_name
			</div>
		";
	}

	public function toHash() {
		$width = $this->_size[0] * (11 + 1) - 1;
		$height = $this->_size[1] * (11 + 1) - 1;
		$left = ($this->_x - $this->getHalfX()) * 12;
		$top = ($this->_y - $this->getHalfY()) * 12 ;
		return ['width' => $width,'height' => $height,
			'top' => $top,'left' => $left,
			'name' => $this->_name,
			'id' => $this->_id,
			'speed' => $this->_speed,
			'move' => 0,
			'life' => round($this->_life / $this->_lifemax * 100),
			'alive' => $this->_alive,
			'team' => $this->_team
			];
	}
	public static function doc(){
		echo file_get_contents('Ship.doc.txt');
		return ;
	}
}

/*
// Frégate Impérial
class ImperialFrigate				extends Ship
{
	public static	size		= array(1, 4);
	public static	hull		= 5;
	public static	pp 			= 10;
	public static	speed		= 15;
	public static	operate		= 4;
	public static	shield		= 0;
}

// Destroyer Impériale
class ImperialDestroyer				extends Ship
{
	public static	size		= array(1, 3);
	public static	hull		= 4;
	public static	pp 			= 10;
	public static	speed		= 18;
	public static	operate		= 3;
	public static	shield		= 0;
}

// Cuirassé Impériale
class ImperialBattleship			extends Ship
{
	public static	size		= array(2, 7);
	public static	hull		= 8;
	public static	pp 			= 12;
	public static	speed		= 10;
	public static	operate		= 5;
	public static	shield		= 2;
}

// Vésso d’attak Ravajeur Ork
class ArmouredAttackDestructiveOrk	extends Ship
{
	public static	size		= array(1, 2);
	public static	hull		= 4;
	public static	pp 			= 10;
	public static	speed		= 19;
	public static	operate		= 3;
	public static	shield		= 0;
}

// Vésso d’attak Explozeur Ork
class ArmouredAttackExploderOrk		extends Ship
{
	public static	size		= array(1, 5);
	public static	hull		= 6;
	public static	pp 			= 10;
	public static	speed		= 12;
	public static	operate		= 4;
	public static	shield		= 0;
}

new ImperialFrigate('Honorable Duty', array('bldf'));
new ImperialDestroyer('Sword Of Absolution', array('bldf'));
new ImperialFrigate('Hand Of The Emperor', array('ln'));
new ImperialBattleship('Imperator Deus', array('ln', 'ln'));
new ArmouredAttackDestructiveOrk('Orktobre Roug’', array('bldf'));
new ArmouredAttackExploderOrk('Ork’N’Roll!', array('mslp', 'mk'));
 */

?>
