<?PHP
if (!isset($_SESSION) OR !isset($_SESSION['id_user']))
	header('Location: ../controller/index.php');
?>
