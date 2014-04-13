<?php

require_once('Arm.class.php');

class ArmLn extends Arm{
	public function __construct(&$ship) {
		$this->_name			= 'Lance navale';
		$this->_loads			= 5;
		$this->_range 			= array(1, 90);
		$this->_range_short		= array(1, 30);
		$this->_range_interm 	= array(31, 60);
		$this->_range_long 		= array(61, 90);
		$this->_ship			= $ship;
	}
}

?>
