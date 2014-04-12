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
		<form method=POST action="../controller/index2.php">
			<table border=0 align=center style="margin-top: 15%;">
				<tr>
					<td align=center id="title_td_index" colspan=2>Awesome Starships Battles II</td>
				</tr>
				<tr>
					<td align=right style="color:white;">Login : </td>
					<td><input type=text name=login /></td>
				</tr>
				<tr>
					<td align=right style="color:white;">Mot de passe : </td>
					<td><input type=password name=passwd /></td>
				</tr>
				<tr>
					<td align=center colspan=2>
						<input type=button name=submit value="Se connecter"/>
					</td>
				</tr>
				<tr>
				<td align=center colspan=2>
					<input type=button name=submit value="Creer un compte"/>
					</td>
				</tr>
			</table>	
		</form>	
	</body>
</html>
