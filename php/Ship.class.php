<?php

require_once('Arm.class.php');
require_once('Direction.trait.php');


abstract class Ship {

	use Direction;

	protected	$_x;
	protected	$_y;
	protected	$_name; 
	protected	$_size;
	protected	$_hull;
	protected	$_pp;
	protected	$_speed;
	protected	$_operate;
	protected	$_shield;
	protected	$_arms = [];

	public function __construct($shipName, $x, $y, $direction, array $arms) {
		$this->_x			= $x;
		$this->_y			= $y;
		$this->_name		= $shipName;
		$this->_arms		= $arms;
		$this->_direction	= $direction;
	}

	public function draw() {
		$width = $this->_size[0] * (11 + 1) - 1;
		$height = $this->_size[1] * (11 + 1) - 1;
		$left = ($this->_x) * 12;
		$top = ($this->_y) * 12 ;
		echo "
			<div class='ship' style='width:$width;height:$height;top:$top;left:$left;margin-bottom:-$height'>
			</div>
		";
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