<?php session_start();
include '../controller/check_login.php';
date_default_timezone_set('Europe/Paris');
$to_lock = fopen("chat","a");
if ($_SESSION['id_user'] != "" OR $_SESSION OR $_SESSION == TRUE){
	if (isset($_POST['msg']) AND $_POST['msg'] != ""){
		$moment = time();
		$user = $_SESSION['user_login'];
		$msg = $_POST['msg'];
		if (file_get_contents("chat") == FALSE){
		$tab['login'] = $user;
		$tab['time'] = $moment;
		$tab['msg'] = $msg;
		$ret[] = $tab;
		$to_lock = fopen("chat");
		flock($to_lock, LOCK_SH | LOCK_EX);
		file_put_contents("chat", serialize($ret));
		flock($to_lock, LOCK_UN);
		}
		else{
		flock($to_lock, LOCK_SH | LOCK_EX);
			$ret = file_get_contents("chat");
		flock($to_lock, LOCK_UN);
			$ret_2 = unserialize($ret);
		$tab['login'] = $user;
		$tab['time'] = $moment;
		$tab['msg'] = $msg;
		$ret_2[] = $tab;
		flock($to_lock, LOCK_SH | LOCK_EX);
		file_put_contents("chat", serialize($ret_2));
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
