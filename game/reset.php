<?php
session_start();

$_SESSION['ships'] = [];

header("Location: /game");
?>
