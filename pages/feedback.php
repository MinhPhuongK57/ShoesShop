<?php
$id_card = isset($_COOKIE["id_card"]) ? $_COOKIE["id_card"] : '';
$gmail = isset($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "";
$date = new DateTime();
$date->setTimeZone(new DateTimeZone("Asia/Ho_Chi_Minh"));
$today = $date->format('Y-m-d H:i:s');



$id = isset($_GET['id_product']) ? $_GET['id_product'] : '';

$description = isset($_POST['discription']) ? $_POST['discription'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : '';
$feedbackdescription=isset($_POST["updatedes"])?$_POST['updatedes'] : "";
$update=isset($_POST["update"])?$_POST['update'] : "";
$id_update=isset($_POST["id_update"])?$_POST['id_update'] : "";
$delete=isset($_POST["delete"])?$_POST['delete'] : "";
$id_delete=isset($_POST["id_delete"])?$_POST['id_delete'] : "";

$id_feedback = isset($_GET['id_feedback']) ? $_GET['id_feedback'] : '';

    if($delete == 'delete')
    {
        $deletefb = $connect ->prepare("DELETE FROM feedback WHERE id_feedback = $id_delete") ->execute();
    }
    else if ($description != "" & $gmail != "") {
        $query = "INSERT INTO feedback (id_product, email, date, description, status) VALUES ('$id', '$gmail', '$today' , N'$description', '0')";
        $listfeedbackinsert = $connect->prepare($query);
        $listfeedbackinsert->execute();
    } 
    if($update == 'update')
    {
        $d = "UPDATE feedback SET description = N'$feedbackdescription' WHERE feedback.id_feedback = '$id_update'";
        var_dump($d);
        $update = $connect ->prepare("UPDATE feedback SET description = N'$feedbackdescription' WHERE feedback.id_feedback = '$id_update'") ->execute();
    }

         //include "notification.php";
?>