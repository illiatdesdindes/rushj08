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
			<ul class="menu-vertical-simple-2">
				<li class="bouton_gauche"><a href="index.php">ACCUEIL</a></li>
				<li class="bouton_gauche"><a href="../game/index.php">LANCER NOUVELLE PARTIE</a></li>
				<li class="bouton_gauche"><a href="">CHAT</a></li>
				<li class="bouton_gauche"><a href="../controller/ChangePwd.class.php">MODIF MDP</a></li>
				<li class="bouton_gauche"><a href="../controller/deco.php">DECO</a></li>

			</ul>
		<form method=POST action="../controller/ChangePwd.class.php">
			<table border=0 align=center style="margin-top: 15%;">
			<tr>
					<td align=center id="title_td_index" colspan="2"><?php echo $msg;?></td>
				</tr>
				<tr>
					<td align=center id="title_td_index" colspan="2">Changement de mot de passe</td>
				</tr>
				<tr>
				<td align=center colspan="2"><input class="test" type=password name=passwd placeholder="Old password"/></td>
				</tr>
				<tr>
					<td align=center colspan="2"><input class="test" type=password name="passwd_1" placeholder="New Password"/></td>
				</tr>
				<tr>
					<td align=center colspan="2"><input class="test" type=password name="passwd_2" placeholder="Please retype"/></td>
				</tr>
				<tr>
				<td align=center colspan=2>
					<input type=submit name="sav_pwd" value="Enregistrer"/>
					</td>
				</tr>
			</table>	
		</form>	
	</body>
</html>
