<?php
		
	include "index__data.php";
	$id_user = $list__customer_rowsdata[0][1];
	$gmail = $list__customer_rowsdata[0][0];
	$id_card = $list__customer_rowsdata[0][2];				
		if($id_user!="")
		{
			setcookie("id", $id_user, time() + 3600, "/");
			setcookie("gmail", $gmail, time() + 3600, "/");
			setcookie("id_card", $id_card, time() + 3600, "/");
			header("location:../index.php");
		}
		else
		{	
			
			header("location:../login.php");
			
		}
		

		
?>