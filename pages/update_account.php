<?php
	$level = "";
	include "database.php";
	$id = isset($_COOKIE["id"]) ? $_COOKIE["id"] : "Guest";
	$gmail = isset($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "1";
    $id_card=isset($_COOKIE["id_card"]) ? $_COOKIE["id_card"] : "";
	$err = [];  
    $SQL_account_info = "SELECT * from customer_account where email = '$gmail'";
    $list__customerupdate = $connect->prepare($SQL_account_info);
    $list__customerupdate -> execute();
    $list__customerupdate_rowsdata = $list__customerupdate ->fetchAll();
    if($gmail!='')
    {

        if (isset($_POST['fullname'])) {
            $fullname = $_POST['fullname'];
            $phonenum = $_POST['phonenum'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            if ($fullname=="") {
                header("location:../account.php?action=fullname");
                
            }
            else if (empty($phonenum)) {
                header("location:../account.php?action=phonenum");
                
            }
    
            else if (empty($email)) {
                header("location:../account.php?action=email");
    
            }
            else if (empty($address)) {
                header("location:../account.php?address=address");
    
            }
    
            else {
                setcookie("id", $id, time() - 3600, "/");
                setcookie("gmail", $gmail, time() - 3600, "/");
                setcookie("id_card", $id_card, time() - 3600, "/");
                setcookie("id", $fullname, time() + 3600, "/");
                setcookie("gmail", $email, time() + 3600, "/");
                setcookie("id_card", $id_card, time() + 3600, "/");
                $a = " UPDATE customer_account SET username = N'$fullname' , PhoneNum = '$phonenum', email = '$email' , address = N'$address' WHERE  email = '$gmail' ";
                $account_customer = $connect->prepare($a);
                $account_customer->execute();
                header("location:../account.php?action=true");
            }
            if($gmail=='1')
            {
                header("location:../login.php");
            }
        }
    }

?>