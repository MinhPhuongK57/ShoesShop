<?php

	$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : "";
    setcookie("id", $id_user, time() - 3600, "/");
    setcookie("gmail", $gmail, time() - 3600, "/");
    header("location:login.php");
?>