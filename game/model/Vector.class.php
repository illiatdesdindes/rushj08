<?PHP
class Vector{
	private $_x;
	private $_y;
	public function __construct($x, $y){
		$this->_x = $x;
		$this->_y = $y;
	}
	public function add(Vector $offset){
		$this->_x =+ $offset->getX;
		$this->_y =+ $offset->getY;
	}
	public function getX(){return $this->_x;}
	public function getY(){return $this->_y;}
	public function setX($x){$this->_x = $x;}
	public function setY($y){$this->_y = $y;}
}
?>

