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
<h1 align=center style="color:white;">Bienvenue dans l'installation de Awesome Starships Battles II</h1>
<table align=center>
<form method="POST" action="../controller/install2.php">
<tr>
<td style="color:white;">
Login de l'administrateur de MySQL :
</td><td>
<input type="text" name="log_adm_bdd"  required ><br />
</td>
</tr>
<tr>
<td style="color:white;">
Mot de passe de l'administrateur :
</td><td>
<input type="password" name="passwd_adm_bdd"  required><br />
</td>
</tr>
<tr>
<td style="color:white;">
Port de MySQL (si different de 3306):
</td><td>
<input type="text" name="mysql_socket" value="3306" required><br />
</td>
</tr>
<tr>
<td style="color:white;">
Adresse du serveur MySQL (si different de localhost):
</td><td>
<input type="text" name="mysql_serv" value="localhost" required><br />
</td>
</tr>
<tr align=center>
<td colspan=2>
<input type="submit" name="start_inst" value="Soumettre">
</td>
</tr>
</table>
</form>
	</body>
	</html>
