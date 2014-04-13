<?php session_start();
	class User
	{
		private $_User_pass;
		private $_User_pass_old;
		

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
		
		public function getUser_pass()
		{
			return $this->_User_pass;
		}
		
		public function getUser_pass_old()
		{
			return $this->_User_pass_old;
		}

  // Setters
		
		private function setUser_pass()
		{
			$crypt_pass = hash('whirlpool', mysql_real_escape_string(htmlspecialchars(strip_tags($_POST['passwd_2']))));
			$this->_User_pass = $crypt_pass;
		}

		private function setUser_pass_old()
		{
			$crypt_pass = hash('whirlpool', mysql_real_escape_string(htmlspecialchars(strip_tags($_POST['passwd']))));
			$this->_User_pass_old = $crypt_pass;
		}
		
	}
$msg = "";
	if (isset($_POST) AND isset($_POST['sav_pwd']) AND $_POST['sav_pwd'] == "Enregistrer" AND $_POST['passwd_2'] == $_POST['passwd_1']){
	$db = new PDO('mysql:host=localhost;dbname=warhammer', 'WARHAMMER', 'passwordd', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	include_once ('../model/Adduser.class.php');
	$managerUser = new Adduser($db);
	$NouvUser = new User();
	$tab = array("User_pass","User_pass_old");
	$NouvUser->hydrate($tab);
	$ret = $managerUser->test_login2($NouvUser);
	if (isset($ret[0]) AND $ret[0]['user_pass'] == $NouvUser->getUser_pass_old()) {
		$managerUser->update_pwd($NouvUser);
		$_SESSION['id_user']=$ret[0]['id_user'];

			header("Location: ../view/home.php");
	}

	
	}
include ("../view/Changepwd.php");

?>
