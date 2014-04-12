<?php

require_once('Ship.class.php');

class ImperialFrigate extends Ship {

	public function __construct($shipName, $x, $y, $direction, array $arms) {
		$this->_size	= array(3, 5);
		$this->_hull	= 5;
		$this->_pp 		= 10;
		$this->_speed	= 15;
		$this->_operate	= 4;
		$this->_shield	= 0;
		parent::__construct($shipName, $x, $y, $direction, $arms);
	}
}

?>
