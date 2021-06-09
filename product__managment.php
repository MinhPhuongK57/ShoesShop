<?php 
    $level = "";
    // include ($level.'component/product__managment.php');
    include "index__data.php";
?>
<html>
    <h1 align="center" style = "text-transform: uppercase;">PRODUCT MANAGEMENT FUNCTION</h1>
    <table cellspacing="0" border="1" id="list__product">
        <tr>
            <th>ID product</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Product Status</th>
        </tr>
        <?php
            foreach($list__product_rowsdata as  $product)
            {
        ?>
            <tr align="center">
                <td><?php echo $product['id_product']?></td>
                <td><?php echo $product['product_name']?></td>
                <td><?php echo $product['id_producttype']?></td>
                <td><?php echo $product['product_price']?></td>
                <td><?php echo $product['product_image']?></td>
                <td><?php echo $product['product_status']?></td>
                <td>
                    <a href="<?php echo $level.'update__product.php?id='.$product['id_product'];?>">Update</a>
                </td>
                <td>
                    <a href="<?php echo $level.'delete__product.php?id='.$product['id_product'];?>">Delete</a>
                </td>
            </tr>
        <?php 
            }
        ?>
    </table>
</html>