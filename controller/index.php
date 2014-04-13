<?php session_start();
if (file_exists("../controller/void") == TRUE)
	include("../view/install.php");
else{
if (isset($_SESSION) AND isset($_SESSION['id_user']))
include("../view/home.php");
else
include("../view/index.php");
}
?>