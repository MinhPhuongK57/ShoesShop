<?php 
    $level = "";
    include $level."DB/database";
    $product_name = $_POST['txtproductname'];
    $product_price = $_POST['txtproductprice'];

    if($_FILES['image']['name'] == "") {
        $product_image =  $_POST['txtproductimage'];
    }
    else
    $product_image = $_FILES['image']['name'];
    $producttype = $_POST['txtproducttype'];
    $id_product = $_POST['txtidproduct'];

    $SQL_str_addproduct = "
    update products
    set product_name = :product_name,
    product_price = :product_price,
    id_producttype = :id_producttype,
    product_image = :product_image
    where id_product = :id_product";

    $result = $database -> prepare($SQL_str_addproduct);
    $result -> bindValue(':product_name',$product_name,PDO::PARAM_STR);
    $result -> bindValue(':product_price',$product_price,PDO::PARAM_INT);
    $result -> bindValue(':product_image',$product_image,PDO::PARAM_STR);
    $result -> bindValue(':producttype',$producttype,PDO::PARAM_STR);
    $result -> bindValue(':id_product',$id_product,PDO::PARAM_STR);

    var_dump($_FILES);
    move_uploaded_file($_FILES['image']['tmp_name'],
        $level."images/" . $_FILES['image']['name']);
    $result -> execute();
    // header('location:../product__managment.php');

?>