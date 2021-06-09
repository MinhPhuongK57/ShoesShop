<?php
    $level = "";
    include ($level."component/insertproduct__data.php");
?>
<html>
<body>
    <p>Add new product</p>
    <div>
        <form action="<?php echo $level."component/insertproduct_process.php"?>" method = "POST" enctype="multipart/form-data">
            Product name : <input type="text" name = "txtproductname">
            Price : <input type="number__format" name ="txtproductprice">
            ProductType :
            <select name="txtproducttype">
                <?php foreach($list__producttype_rowsdata as $producttype)
                    {
                ?>
                        <option value="<?php echo $producttype['id_producttype'];?>">
                            <?php echo $producttype['producttype_name'];?>
                        </option>
                <?php 
                    }
                ?>
            </select>
            </br>
            Images : <input type="file" name ="image">
            </br>
            <button type="submit">Add product</button>
        </form>
    </div>
</body>
</html>