<?php
    $level = "";
    include $level."DB/database.php";

    //product + search
    $product_search = isset($_POST['SearchData']) ? $_POST['SearchData'] : "";
    $SQL_str_listproduct = "SELECT * from product where productname like '%$product_search%'";
    $list__product = $connect->prepare($SQL_str_listproduct);
    $list__product -> execute();
    $list__product_rowsdata = $list__product ->fetchAll();

    //customer account
   	
    $email = isset($_POST['emailcus']) ? $_POST['emailcus'] : '';
    $password = isset($_POST['passwordcus']) ? $_POST['passwordcus'] : '';
    $SQL_customer = "SELECT email, username from customer_account where email = '$email' and password = '$password' ";
    $list__customer = $connect->prepare($SQL_customer);
    $list__customer -> execute();
    $list__customer_rowsdata = $list__customer ->fetchAll();

    // product detail

    $id = isset($_GET['id_product']) ? $_GET['id_product'] : '';
    $SQL_product_detail = "SELECT * from product where id_product = '$id'";
    $list__product_detail = $connect->prepare($SQL_product_detail);
    $list__product_detail -> execute();
    $list__product_detail_rowsdata = $list__product_detail ->fetchAll();

     //customer account
   	
     $gmail = isset($_COOKIE["gmail"]) ? "| LogOut" : "| LogIn";
     $list__customerupdate = $connect->prepare("SELECT * from customer_account where email = '$gmail' ");
     $list__customerupdate -> execute();
     $list__customerupdate_rowsdata = $list__customerupdate ->fetchAll();
     

     $SQL_str_listproduct_x = "SELECT * from product";
     $list__product_x = $connect->prepare($SQL_str_listproduct_x);
     $list__product_x -> execute();
     $list__product_x_rowsdata = $list__product_x ->fetchAll();
 
?>