<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta name="description" content="Rush01 Piscine PHP">
		<meta name="keywords" content="rush01,piscine,php">
		<meta name="authors" content="Samy VACHERE, Idriss FTAITI, Adam GOOMANY">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/view/styles/styles.css">
		<title>Awesome Starships Battles II - Install</title>
	</head>
	<body>
		<table align=center style="color:white;">
		<tr>
		<td>
		INSTALLATION EN COURS.<br />
		</td>
		</tr>
<?php
if(isset($_POST)){
	if (isset($_POST['log_adm_bdd'])){
		$user = htmlentities($_POST['log_adm_bdd']);
	}
	if (isset($_POST['passwd_adm_bdd'])){
		$pwd = ($_POST['passwd_adm_bdd']);
	}
	if (($_POST['mysql_socket']) == ""){
		$socket = "3306";
	}
	else
		$socket = htmlentities($_POST['mysql_socket']);
	if (trim($_POST['mysql_serv']) == ""){
		$serv = "localhost";
	}
	else
		$serv = htmlentities($_POST['mysql_serv']);
}
$handler = mysqli_connect($serv.":".$socket,$user, $pwd);
if (!$handler){
	echo "<tr><td><p>Erreur de connexion a MySQL</p></td></tr>\n";
	header('Refresh: 5;url=../view/install.php');
}
else {
	echo "<tr><td><p>Connexion a MySQL OK.</p></td></tr>\n";
	echo "<tr><td><p>Creation de la BdD et du user</p></td></tr>\n";
	$sql = file_get_contents("../controller/warhammer.sql");
	$sql_array = explode (";\n",$sql);
	foreach ($sql_array as $val) {
		if ($val != "")
			mysqli_query($handler,$val)or die("<tr><td><p>Erreur dans l'injection de la BdD de base!</p></td></tr>");
	}

	$handler_2 =  mysqli_connect($serv.":".$socket,$user,$pwd,'mysql')or die ("<tr><td><p>Erreur</p></td></tr>");
	$ret = mysqli_query($handler_2, "SELECT * FROM `user` WHERE User LIKE 'WARHAMMER';");
	if (mysqli_num_rows($ret) == 1)
		mysqli_query($handler_2, "DROP USER 'WARHAMMER'@'".$serv."';");
	mysqli_close($handler_2);

	mysqli_query($handler, "CREATE USER 'WARHAMMER'@'".$serv."' IDENTIFIED BY 'passwordd';") or die("<tr><td><p>Erreur dans la creation de l'utilisateur de la BdD</p></td></tr>");
	mysqli_query($handler, "GRANT ALL PRIVILEGES ON `warhammer`.* TO 'WARHAMMER'@'".$serv."' WITH GRANT OPTION;");
	mysqli_close($handler);
	file_put_contents("../controller/data.conf", $serv.":".$socket);
	unlink('../controller/void');
	header('Refresh: 2;url=../../index.php');

}
?>
</table>
</div>
</div>
	</body>
	</html>
