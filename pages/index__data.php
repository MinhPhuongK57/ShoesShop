<?php
   
    include "database.php";

    //product + search
    $product_search = isset($_POST['SearchData']) ? $_POST['SearchData'] : "";
    $Provider = isset($_POST['Provider']) ? $_POST['Provider'] : "";
    $ProductType = isset($_POST['ProductType']) ? $_POST['ProductType'] : "";
    $SQL_str_listproduct = "SELECT * from product where productname like '%$product_search%' and id_provider like '%$Provider%' and id_producttype like '%$ProductType%'";
    $list__product = $connect->prepare($SQL_str_listproduct);
    $list__product -> execute();
    $list__product_rowsdata = $list__product ->fetchAll();

    //customer account
   	
    $email = isset($_POST['emailcus']) ? $_POST['emailcus'] : '';
    $password = isset($_POST['passwordcus']) ? $_POST['passwordcus'] : '';
    $SQL_customer = "SELECT email, username, id_card from customer_account where email = '$email' and password = '$password' ";
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
   	
    $gmail = isset($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "";
     $list__customerupdate = $connect->prepare("SELECT * from customer_account where email = '$gmail' ");
     $list__customerupdate -> execute();
     $list__customerupdate_rowsdata = $list__customerupdate ->fetchAll();

      //load feedback

     $SQL_feedback = "SELECT * from feedback where status = '1' and id_product = '$id'";
     $list__feedback= $connect->prepare($SQL_feedback);
     $list__feedback -> execute();
     $list__feedback_rowsdata = $list__feedback ->fetchAll();

 
?>