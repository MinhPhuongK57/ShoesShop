<?php
    $level = "";
    include ($level."component/updateproduct__data.php");
?>
<html>
    <body>
        <p>Update infomation product</p>
        <div>
            <form action="<?php echo $level.'component/updateproduct__process.php';?>" method="POST" enctype="multipart/form-data">
                <input type="text" name="txtid_product" hidden="true" 
                value="<?php echo $productdetails__rowsdata[0]['id_product'];?>">

                <input type="text" name="txtproduct_image" hidden="true" 
                value="<?php echo $productdetails__rowsdata[0]['product_image'];?>">

                Product Name <input type="text" name="txtproduct_name"
                value="<?php echo $productdetails__rowsdata[0]['product_name'];?>">

                Price <input type="text" name="txtproduct_price"
                value="<?php echo $productdetails__rowsdata[0]['product_price'];?>">

                Product Type
                <select name="txtproducttype">
                    <?php
                        foreach($producttype__rowsdata as $producttype)
                        { echo ($producttype['id_producttype']); 
                    ?>
                        <option value="<?php echo $producttype['id_producttype'];?>">
                            <?php
                                if($producttype['id_producttype'] == $productdetails__rowsdata[0]['id_producttype'])
                                    echo "selected = 'selected' ";?> >"
                                <?php echo $producttype['producttype_name']?>
                            ?>
                        </option>
                    <?php 
                        }
                    ?>
                </select>
                Images
                <img src="<?php echo $level.'images/'.$productdetails__rowsdata[0]['product_image'];?>">
                <input type="file" name="image">
                </br>
            </br>
                <button type="submit">Update</button>
            </form>
        </div>
    </body>
</html>