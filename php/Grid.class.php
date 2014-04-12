<?PHP
require_once "php/Cell.class.php";
class Grid{
	static $_index = array();
	static $_fixobjects = array();
	public static $height = 100; 
	public static $width = 150;
	private $_ships = [];
	
	public function __construct(){
		$i = 0;
		while($i < (self::$height * self::$width))
		{self::$_index[$i++] = new Cell(NULL);}
	}

	public function getCellindex(){
		return new Vector($this->_index[$i]);
	}
	public function SetCellcontent(){
	
	}
	public function register($object) {
		$this->_ships[] = $object;
	}
	public function draw(){
		$i = 0;
		while($i < (self::$height * self::$width))
		{	
			echo '<div class="cadre">';
			foreach ($this->_ships as $ship) 
				$ship->draw();
			$j = 0;
			while($j < self::$width)
			{
				$cell = self::$_index[$i];
				$cell::draw();
				$j++;
				$i++;
			}
			echo "</div>";
		}
	 	
	}
}
?>
