<?php session_start();
if (file_get_contents("../private/chat") != FALSE){
		flock($to_lock, LOCK_SH );
		$ret = file_get_contents("../private/chat");
		flock($to_lock, LOCK_UN);
		$ret_2 = unserialize($ret);
		foreach ($ret_2 as $key =>$value){
			date_default_timezone_set('Europe/Paris');
$temps = date("H:i", $value['time']);
			$text = "[".$temps."]   <b>".$value['login']."</b>: ".$value['msg']."<br />\n";
				echo "$text";
		}
}
?>
