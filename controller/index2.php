<?php session_start();
$msg = "";
if (isset($_POST['submit']) && $_POST['submit'] == "Creer un compte")
header ('Location: ../controller/Adduser.class.php');
if (isset($_POST['submit']) && $_POST['submit'] == "Se connecter"){

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




$db = new PDO('mysql:host=localhost;dbname=warhammer', 'WARHAMMER', 'passwordd', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	include_once ('../model/Adduser.class.php');
	$managerUser = new Adduser($db);
	$NouvUser = new User();
	$tab = array('User_login','User_pass');
	$NouvUser->hydrate($tab);
	$ret = $managerUser->login($NouvUser);
	if (isset($ret[0]) AND $ret[0]['user_login'] == $NouvUser->getUser_login() AND $ret[0]['user_pass'] == $NouvUser->getUser_pass()) {
		$_SESSION['id_user']=$ret[0]['id_user'];
		$_SESSION['user_login']=$ret[0]['user_login'];
			header("Location: ../view/home.php");
	}
	else{
		$msg = "ERREUR AUTHENTIFICATION";
	}

	}
include ("../view/index.php");
















?>
