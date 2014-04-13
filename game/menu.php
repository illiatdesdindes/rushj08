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
		<div id="title">Awesome Starships Battles II</div>
				
		<ul class="menu-vertical-simple-2">
				<li class="bouton_gauche"><a href="../index.php">ACCUEIL</a></li>
				<li class="bouton_gauche"><a href="../view/chat.php">CHAT</a></li>
				<li class="bouton_gauche"><a href="../controller/ChangePwd.class.php">MODIF MDP</a></li>
				<li class="bouton_gauche"><a href="../controller/deco.php">DECO</a></li>
		</ul>
		<form name="game_init" action="../game/menu.php" method="post" >
			<fieldset>
				Type de flotte	<br /><select id="Type de flotte" name="flotte_type">
					<option selected="selected" value="Imperiale">Flotte Imperiale</option>
					<option value="Orks">Flotte Orks</option>
					<option value="Necron">Flotte Necron</option>
					<option value="Tyranid">Flotte Tyranid</option>
					</select><br />
Valeure de flotte<br/>
		0<input type="range" name="flotte_value" min="0" max="500">500
		<br />	<input type="submit" name="jouer" value="jouer"> 
			</fieldset>
		</form>

<?php
if(isset($_POST['flotte_type']) && isset($_POST['flotte_value']))
{
	$_SESSION['flotte_type'] = $_POST['flotte_type'];
	$_SESSION['flotte_value'] = $_POST['flotte_value'];
	header('location: index.php');
}
?>
	</body>	


