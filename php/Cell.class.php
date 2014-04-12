<?PHP
class Cell{
	static $_content = "empty";
	public function __construct($content){$this->content = $content;}
		public function draw(){
			$str = '<div class="'.self::$_content.'"></div>'.PHP_EOL;
			print($str);
		}	
}
?>
