<?php

class Game {

	private	$_x;
	private	$_y;
	private	$_ships = [];

	public function __construct(array $ships = []) {
		if (isset($_SESSION['ships']) && $_SESSION['ships'] !== [])
			$this->sessionLoad();
		else
			$this->_ships = $ships;
		$this->_x = 150;
		$this->_y = 100;
	}

	public function push(Ship $ship) {
		$this->_ships[] = $ship;
	}
	public function rmId($shipId) {
		
	}
	public function sessionLoad() {
		$this->_ships = $_SESSION['ships'];
	}
	public function sessionSave() {
		$_SESSION['ships'] = $this->_ships;
	}
	public function toHash() {
		$shipsHash = [];
		foreach($this->_ships as $ship)
			$shipsHash[] = $ship->toHash();
		return $shipsHash;
	}

	public function getShips(){
		return $this->_ships;
	}
	public static function doc(){
		echo file_get_contents('Game.doc.txt');
		return ;
	}
}

?>
