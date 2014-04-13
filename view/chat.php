<?php session_start(); ?>
<?PHP include "../controller/check_login.php"?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="Rush01 Piscine PHP">
		<meta name="keywords" content="rush01,piscine,php">
		<meta name="authors" content="Samy VACHERE, Idriss FTAITI, Adam GOOMANY">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/view/styles/styles.css">
		<title>Awesome Starships Battles II</title>
	</head>
	<body>
	<div id="title">Awesome Starships Battles II</div>
			<ul class="menu-vertical-simple-2">
				<li class="bouton_gauche"><a href="index.php">ACCUEIL</a></li>
				<li class="bouton_gauche"><a href="../game/menu.php">NOUVELLE PARTIE</a></li>
				<li class="bouton_gauche"><a href="../view/chat.php">CHAT</a></li>
				<li class="bouton_gauche"><a href="../controller/ChangePwd.class.php">MODIF MDP</a></li>
				<li class="bouton_gauche"><a href="../controller/deco.php">DECO</a></li>

			</ul>
	<div align=center>
		<iframe name="chat" src="../controller/chat.php" width="70%" height="550px"style="background-color:none"></iframe>
		<iframe name="speak" src="../controller/speak.php" width="70%" height="50px" style="background-color:none"></iframe>
	</div>
	</body>
</html>
