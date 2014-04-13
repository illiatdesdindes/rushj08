<?PHP session_start();
include "../controller/check_login.php"?>
<html>
	<head>
		<meta name="description" content="Rush01 Piscine PHP">
		<meta name="keywords" content="rush01,piscine,php">
		<meta name="authors" content="Samy VACHERE, Idriss FTAITI, Adam GOOMANY">
		<meta charset="utf-8">
		<link rel="stylesheet" href="../view/styles/styles.css">
		<title>Awesome Starships Battles II</title>
	</head>
	<body>
				
		<ul class="menu-vertical-simple-2">
				<li class="bouton_gauche"><a href="index.php">ACCUEIL</a></li>
				<li class="bouton_gauche"><a href="../game/menu.php" target="_blank">NOUVELLE PARTIE</a></li>
				<li class="bouton_gauche"><a href="../view/chat.php">CHAT</a></li>
				<li class="bouton_gauche"><a href="../controller/ChangePwd.class.php">MODIF MDP</a></li>
				<li class="bouton_gauche"><a href="../controller/deco.php">DECO</a></li>
		</ul>
		<form name="game_init" action="" method="post" >
			<fieldset>
				Type de flotte<br /><select id="Type de flotte" name="Type de flotte">
					<option value="">Flotte Imperiale</option>
					<option value="">Flotte Orks</option>
					<option value="">Flotte Necron</option>
					<option value="">Flotte Tyranid</option>
					</select><br />
Valeure de flotte<br/>
		0<input type="range" name="Valeur de flotte" min="0" max="500">500
			</fieldset>
		</form>	
	</body>	
</html>
