<?php

require_once('Ship.class.php');
require_once('Direction.trait.php');


class ImperialFrigate extends Ship {

	public function __construct($shipName, $x, $y, $direction, $team="blue") {
		$this->_size	= array(3, 5);
		$this->_direction = Direction::$DOWN;
		$this->_life	= 20;
		$this->_lifemax = 20;
		$this->_power	= 10;
		$this->_speed	= 15;
		$this->_operate	= 4;
		$this->_shield	= 0;
		$this->_arm		= new ArmLn($this);
		parent::__construct($shipName, $x, $y, $direction, $team);
	}
}

?>
