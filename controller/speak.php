<?php session_start();
date_default_timezone_set('Europe/Paris');
if ($_SESSION['id_user'] != "" OR $_SESSION OR $_SESSION == TRUE){
	if (isset($_POST['msg']) AND $_POST['msg'] != ""){
		$moment = time();
		$user = $_SESSION['user_login'];
		$msg = $_POST['msg'];
		if (file_get_contents("private/chat") == FALSE){
		$tab['login'] = $user;
		$tab['time'] = $moment;
		$tab['msg'] = $msg;
		$ret[] = $tab;
		$to_lock = fopen("private/chat");
		flock($to_lock, LOCK_SH | LOCK_EX);
		file_put_contents("private/chat", serialize($ret));
		flock($to_lock, LOCK_UN);
		}
		else{
		flock($to_lock, LOCK_SH | LOCK_EX);
			$ret = file_get_contents("private/chat");
		flock($to_lock, LOCK_UN);
			$ret_2 = unserialize($ret);
		$tab['login'] = $user;
		$tab['time'] = $moment;
		$tab['msg'] = $msg;
		$ret_2[] = $tab;
		flock($to_lock, LOCK_SH | LOCK_EX);
		file_put_contents("private/chat", serialize($ret_2));
		flock($to_lock, LOCK_UN);
		}
	}
	echo "
	<script langage=\"javascript\">top.frames['chat'].location = '../controller/chat.php';</script>
<form method=\"POST\" action=\"speak.php\">
Dire : <input type=\"text\" name=\"msg\" autofocus>
</form>";
}
else{
echo "ERROR\n";
}
?>
