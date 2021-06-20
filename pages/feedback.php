<?php
$id_card=isset($_COOKIE["id_card"]) ? $_COOKIE["id_card"] : '';
        $gmail = isset($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "";
         $id = isset($_GET['id_product']) ? $_GET['id_product'] : '';
         $description = isset($_POST['discription']) ? $_POST['discription'] : "";
         $today = date("Y-m-d");
         if($description !="" & $gmail!="")
         {

             $query = "INSERT INTO feedback (id_product, email, date, description, status) VALUES ('$id', '$gmail', '$today' , N'$description', '0')";
             $listfeedbackinsert= $connect->prepare($query);
             $listfeedbackinsert -> execute();
         } 
         //include "notification.php";
?>