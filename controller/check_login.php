<?PHP
session_start();
if (!isset($_SESSION) OR !isset($_SESSION['id_user']))
	header('Location: ../view/index.php');
?>
