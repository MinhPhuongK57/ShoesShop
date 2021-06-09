<?php
		
	include $level."index__data.php";
	$id_user = $list__customer_rowsdata[0][0];
					
		if($id_user!="")
		{
			header("location:index.php?emailcus=$id_user");
		}
		else
		{	
			header("location:login.php");
			
		}
		

		
?>