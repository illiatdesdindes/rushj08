<?php
class Adduser
{
  		private $_db; // Instance de PDO.
 
  		public function __construct($db)
		  {
		    $this->setDb($db);
		  }
 
 	public function test_login($NouvUser)
	
		{
		$q = $this->_db->prepare('SELECT * FROM user WHERE user_login LIKE :log');
		$q->bindValue(':log', $NouvUser->getUser_login());
		$q->execute();
		return ($q->fetchAll());
		}

		 	public function test_login2($NouvUser)
	
		{
		$q = $this->_db->prepare('SELECT * FROM user WHERE id_user LIKE :log');
		$q->bindValue(':log', $_SESSION['id_user']);
		$q->execute();
		return ($q->fetchAll());
		}

		public function login($NouvUser)
	
		{
		$q = $this->_db->prepare('SELECT * FROM user WHERE user_login LIKE :log');
		$q->bindValue(':log', $NouvUser->getUser_login());
		$q->execute();
		return ($q->fetchAll(PDO::FETCH_ASSOC));
		}

 	public function add($NouvUser)
	
		{
		$q = $this->_db->prepare('INSERT INTO user SET user_login = :log, user_pass = :pwd');
		$q->bindValue(':log', $NouvUser->getUser_login());
		$q->bindValue(':pwd', $NouvUser->getUser_pass());
		$q->execute();
		}
		
		 public function update_pwd($NouvUser)
  {
    $q = $this->_db->prepare('UPDATE user SET  user_pass =? WHERE id_user=?');
    $q->execute(array($NouvUser->getUser_pass(),$_SESSION['id_user']));
  }
  
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}
?>
