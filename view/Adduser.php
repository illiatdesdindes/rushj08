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
		<form class="login"  method=POST action="../controller/Adduser.class.php">
			<table>
			<tr>
					<td align=center id="title_td_index" colspan="2"><?php echo $msg;?></td>
				</tr>
				<tr>
					<td align=center id="title_td_index" colspan="2">Creation de compte</td>
				</tr>
				<tr>
				<td align=center colspan="2"><input class="test" type=text name=login placeholder="Login desire" required/></td>
				</tr>
				<tr>
					<td align=center colspan="2"><input class="test" type=password name=passwd placeholder="Password" required/></td>
				</tr>
				<tr>
				<td align=center colspan=2>
					<input type=submit name=create value="Creer le compte"/>
					</td>
				</tr>
			</table>	
		</form>	
	</body>
</html>
