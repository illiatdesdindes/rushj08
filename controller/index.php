<?php session_start();
if (file_exists("../controller/void") == TRUE)
	include("../view/install.php");
else{
if (isset($_SESSION) AND $_SESSION['id_user'] AND $_SESSION['role'])
include("../view/home.php");
else
include("../view/index.php");
}
?>