<?php

require_once('ArmLn.class.php');

abstract class Arm {

	protected	$_name;
	protected	$_loads;
	protected	$_range;
	protected	$_ship;
	protected	$_range_short;
	protected	$_range_interm;
	protected	$_range_long;
	protected	$_effect_zone;

	public function fire($myShip, $ships) {
		foreach($ships as $ship) {
			if ($myShip != $ship) {
				$this->hit($myShip, $ship);
			}
		}
	}
	public function hit($myShip, $foeShip) {
		$dir = $myShip->getDirection();
		foreach(range($this->_range[0], $this->_range[1]) as $i) {
			if ($dir == Direction::$UP)
				$hit = $foeShip->collide($myShip->getX(), $myShip->getY() - $i);
			if ($dir == Direction::$RIGHT)
				$hit = $foeShip->collide($myShip->getX() + $i, $myShip->getY());
			if ($dir == Direction::$DOWN)
				$hit = $foeShip->collide($myShip->getX(), $myShip->getY() + $i);
			if ($dir == Direction::$LEFT)
				$hit = $foeShip->collide($myShip->getX() - $i, $myShip->getY());
			if ($hit)
				$foeShip->takeDamage($this->_loads);
		}
	}

}



/*
class ArmBldf	implements iArm
{
	public static	name			= 'Batteries laser de flancs';
	public static	loads			= 0;
	public static	range_short		= array(1, 10);
	public static	range_interm 	= array(11, 20);
	public static	range_long 		= array(21, 30);
	public static	effect_zone		= array(0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1,
		array(0, 0, 0, 0),
		array(1, 0, 1, 0)
	);
}

class ArmLn		implements iArm
{
	public static	name			= 'Lance navale';
	public static	loads			= 0;
	public static	range_short		= array(1, 30);
	public static	range_interm 	= array(31, 60);
	public static	range_long 		= array(61, 90);
	public static	effect_zone		= array(0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1,
		array(0, 0, 0, 0)
	);
}

class ArmLnl	implements iArm
{
	public static	name			= 'Lance navale lourde';
	public static	loads			= 3;
	public static	range_short		= array(1, 30);
	public static	range_interm 	= array(31, 60);
	public static	range_long 		= array(61, 90);
	public static	effect_zone		= array(1, 1, 3, 1, 1, 1, 0, 0, 0, 1, 1,
		array(0, 0, 0, 0)
	);
}

class ArmMslp	implements iArm
{
	public static	name			= 'Mitrailleuses super lourdes de proximité';
	public static	loads			= 5;
	public static	range_short		= array(1, 3);
	public static	range_interm 	= array(4, 7);
	public static	range_long 		= array(8, 10);
	public static	effect_zone		= array(0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1,
		array(0, 0, 0, 0)
	);
}

class ArmMc		implements iArm
{
	public static	name			= 'Macro canon';
	public static	loads			= 0;
	public static	range_short		= array(1, 10);
	public static	range_interm 	= array(11, 20);
	public static	range_long 		= array(21, 30);
	public static	effect_zone		= array(0, 0, 3, 1, 1, 1, 0, 0, 0, 9, 9,
		array(0, 0, 0, 0)
	);
}
 */

?>
