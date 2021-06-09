<?php
    $level = "";
    include $level."DB/database.php";
    $id_product = $_GET['id_product'];
    $SQL_str_listproduct = "SELECT * from products where id_product = :id_product";

    $productdetails = $database -> prepare($SQL_str_listproduct);

    $productdetails -> bindValue(':id_product', $id_product ,PDO::PARAM_INT);
    $productdetails -> execute();
    $productdetails__rowsdata = $productdetails -> fetchAll();

    $SQL_str_listproducttype ="SELECT * from producttype";

    $producttype = $database -> prepare($SQL_str_listproducttype);

    $producttype -> execute();
    $producttype_rowsdata =  $producttype -> fetchAll();
    var_dump($producttype_rowsdata);

?>