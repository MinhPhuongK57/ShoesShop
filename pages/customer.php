
<?php
		
		include "database.php";
		$email = isset($_POST['emailcus']) ? $_POST['emailcus'] : '';
		$password = isset($_POST['passwordcus']) ? $_POST['passwordcus'] : '';
		if($email!="" & $password!="")
		{
	
			$SQL_customer = "SELECT email, username, id_card, status from customer_account where email = '$email' and password = '$password' ";
			$list__customer = $connect->prepare($SQL_customer);
			$list__customer -> execute();
			$list__customer_rowsdata = $list__customer ->fetchAll();
			if(count( $list__customer_rowsdata)>0)
			{
	
				$id_user = $list__customer_rowsdata[0][1];
				$gmail = $list__customer_rowsdata[0][0];
				$id_card = $list__customer_rowsdata[0][2];
				$status = $list__customer_rowsdata[0][3];		
				$err = [];		
				if($status==0)
				{
					header("location:../login.php?action=locked");
					
				}
				if($id_user!="" & $status!=0)
				{
					setcookie("id", $id_user, time() + 3600, "/");
					setcookie("gmail", $gmail, time() + 3600, "/");
					setcookie("id_card", $id_card, time() + 3600, "/");
					header("location:../index.php");	
				}
			}
			else
			{	
				header("location:../login.php?action=false");
					
			}
		}
	?>