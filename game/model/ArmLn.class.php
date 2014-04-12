<?php

class ArmLn {
	public function __construct() {
		$this->name				= 'Lance navale';
		$this->loads			= 0;
		$this->range_short		= array(1, 30);
		$this->range_interm 	= array(31, 60);
		$this->range_long 		= array(61, 90);
		$this->effect_zone		= array(0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1,
			array(0, 0, 0, 0)
		);
	}
}

?>
