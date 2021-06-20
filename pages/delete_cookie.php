<?php

	$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : "";
    setcookie("id", $id_user, time() - 3600, "/");
    $gmail=isset($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "";
    setcookie("gmail", $gmail, time() - 3600, "/");
    $id_card=isset($_COOKIE["id_card"]) ? $_COOKIE["id_card"] : "";
    setcookie("id_card", $id_card, time() - 3600, "/");
    header("location:../login.php");
?>