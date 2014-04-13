<?php

trait Direction {
	
	public static	$UP			= 0;
	public static	$RIGHT		= 1;
	public static	$DOWN		= 2;
	public static	$LEFT		= 3;
	protected		$_direction	= 0;

	public function turnRight() {
		$newDir = $this->_direction;
		$newDir += 1;
		$newDir = $newDir % 4;
		$this->setDirection($newDir);
		return ($this->_direction);
	}

	public function turnLeft() {
		$newDir = $this->_direction;
		$newDir -= 1;
		$newDir = $newDir % 4;
		$this->setDirection($newDir);
		return ($this->_direction);
	}

	public function getDirection() {
		return ($this->_direction);
	}

	public function setDirection($direction) {
		$prev = $this->_direction;
		if (($prev == self::$LEFT || $prev == self::$RIGHT)
			&& ($direction == self::$UP || $direction == self::$DOWN))
		{
			$newSize = $this->_size;
			$this->_size[0] = $newSize[1];
			$this->_size[1] = $newSize[0];
		}
		else if (($prev == self::$DOWN || $prev == self::$UP)
			&& ($direction == self::$RIGHT || $direction == self::$LEFT))
		{
			$newSize = $this->_size;
			$this->_size[0] = $newSize[1];
			$this->_size[1] = $newSize[0];
		}
		$this->_direction = $direction % 4;
		return ;
	}
	public function getHalfX() {
		$half = ($this->_size[0] / 2);
		if (is_int($half)
			&& ($this->_direction == self::$RIGHT
				|| $this->_direction == self::$DOWN))
			return $half;
		return 	round($half) - 1;
	}
	public function getHalfY() {
		$half = ($this->_size[1] / 2);
		if (is_int($half)
			&& ($this->_direction == self::$RIGHT
				|| $this->_direction == self::$DOWN))
			return $half;
		return 	round($half) - 1;
	}
	public static function doc(){
		echo file_get_contents('Direction.doc.txt');
		return ;
	}
}

?>
