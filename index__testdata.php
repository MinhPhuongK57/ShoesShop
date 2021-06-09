<?php
    include "index__data.php";
    // $SQL_str_listproduct = "SELECT * from product where productname like "%".$valuedata."%" ";
    // $list__product = $connect->prepare($SQL_str_listproduct);
    // $list__product -> execute();
    // $list__product_rowsdata = $list__product ->fetchAll();
    
?>
<html>
<body>
    <p>LIST PRODUCTS</p>
    <table cellspacing=0 border="1">
    <tr>
        <td>ID PRODUCTS</td>
        <td>PRODUCT NAME</td>
        <td>PRODUCT TYPE</td>
        <td>PRODUCT PROVIDER</td>
        <td>PRODUCT IMAGE</td>
        <td>PRODUCT TOTAL</td>
        <td>PRODUCT PRICE</td>
        <td>PRODUCT COLOR</td>
        <td>PRODUCT SIZE</td>
        <td>PRODUCT DESCRIPTION</td>
        <td>PRODUCT STATUS</td>
        </tr>
    <?php
        foreach($list__product as $pro)
        {
            ?>
            <tr align="center">
                    <td> <?php echo $pro['id_product'].'</br>'; ?></td>
                    <td> <?php echo $pro['productname'].'</br>'; ?></td>
                    <td> <?php echo $pro['id_producttype'].'</br>'; ?></td>
                    <td> <?php echo $pro['id_provider'].'</br>'; ?></td>
                    <td> <?php echo $pro['productimage'].'</br>'; ?></td>
                    <td> <?php echo $pro['total'].'</br>'; ?></td>
                    <td> <?php echo $pro['price'].'</br>'; ?></td>
                    <td> <?php echo $pro['color'].'</br>'; ?></td>
                    <td> <?php echo $pro['size'].'</br>'; ?></td>
                    <td> <?php echo $pro['description'].'</br>'; ?></td>
                    <td> <?php echo $pro['status'].'</br>'; ?></td>
            </tr>
  
    <?php
        }
        ?>
        </table>
</body>
</html>