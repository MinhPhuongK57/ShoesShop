<?php
	$level = "";
	session_start();
	$isIndex = false;
	$isProducts = false;
	$isDetails= false;
	$isRegister = false;
	$isContact = false;
	$isLogin = false;
	$isCart = true;
	$isChangeAccount = false;
	$isForgotPassword = false;
	include $level.'config.php';
	include $level.'layout.php';

	
?>