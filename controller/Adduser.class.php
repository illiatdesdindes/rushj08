<?php
	class User
	{
		private $_User_login;
		private $_User_pass;
		

//Constructeur
		public function hydrate($donnees)
		{
			foreach ($donnees as $value)
			{
				$method = 'set'.$value;
				if (method_exists($this, $method))
				{
				$this->$method();
				}
			}
		}
  
//Getters
public function getUser_login()
		{
			return $this->_User_login;
}
		
		public function getUser_pass()
		{
			return $this->_User_pass;
		}
		

  // Setters
		private function setUser_login()
		{
			$this->_User_login = mysql_real_escape_string(htmlspecialchars(strip_tags($_POST['login'])));
		}
		
		private function setUser_pass()
		{
			$crypt_pass = hash('whirlpool', mysql_real_escape_string(htmlspecialchars(strip_tags($_POST['passwd']))));
			$this->_User_pass = $crypt_pass;
		}
		
	}
$msg = "";
	if (isset($_POST) AND isset($_POST['create']) AND $_POST['create'] == "Creer le compte"){
	$db = new PDO('mysql:host=localhost;dbname=warhammer', 'WARHAMMER', 'passwordd', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	include_once ('../model/Adduser.class.php');
	$managerUser = new Adduser($db);
	$NouvUser = new User();
	$tab = array("User_login","User_pass");
	$NouvUser->hydrate($tab);
	$ret = $managerUser->test_login($NouvUser);
	if (empty($ret) == TRUE ) {
		$managerUser->add($NouvUser);
			header("Location: ../index.php");
	}
	else{
		$msg = "LOGIN DEJA EXISTANT";
	}
	
	}
include ("../view/Adduser.php");

?>
