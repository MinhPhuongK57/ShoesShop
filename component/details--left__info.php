
	<div class="details-left-info">
		<div class="details-right-head">
			<?php foreach ($list__product_detail_rowsdata as $mangdel)
			{
			?>
			<h1><?php echo $mangdel["productname"] ?></h1>
			<ul class="pro-rate">
				<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
				
			</ul>
			
			<a class="learn-more" href="#">
				<h3>MORE DETAILS</h3>
			</a>
			<div class="product-more-details" >
				<ul class="price-avl">
					<li class="price"><span>&#163;<?php echo $mangdel["price"] ?></span><label>&#163; <?php echo $mangdel["price"]-($mangdel["price"]*$mangdel["discount"]) ?></p></label></li>
					<li class="stock"><i>In stock</i></li>
					<div class="clear"> </div>
				</ul>
				<ul class="product-colors">
					<h3>available Colors ::</h3>
					<li><a class="color1" href="#"><span> </span></a></li>
					<li><a class="color2" href="#"><span> </span></a></li>
					<li><a class="color3" href="#"><span> </span></a></li>
					<li><a class="color4" href="#"><span> </span></a></li>
					<li><a class="color5" href="#"><span> </span></a></li>
					<li><a class="color6" href="#"><span> </span></a></li>
					<li><a class="color7" href="#"><span> </span></a></li>
					<li><a class="color8" href="#"><span> </span></a></li>
					<div class="clear"> </div>
				</ul>
				<ul class="prosuct-qty">
					<form action="cart.php"  >
						<span>Size:</span>
						<input type="number" name="sizeselect" max="45" min="38" value= "40" style="width:65px;height:25px;border:1px solid grey;border-radius:3px;outline:grey;">									
						<span>Quantity:</span>
					<input type="hidden" name="action" value ="add">
					<input type="hidden" name="id_product" value ="<?php echo $mangdel["id_product"]?>">
					<input type="number" name="quantityselect" max="<?php echo $mangdel["total"]?>" min="1" value= "1" style="width:65px;height:25px;border:1px solid grey;border-radius:3px;outline:grey;">
					<span></span>
					<input type="submit" style="width:120px;box-shadow: 3px 1px 15px 2px rgb(230, 240, 245);margin-top: 10px;border-radius:5px;outline:none;border:none;height:40px;background:#E45D5D;color:white;cursor:pointer;border-bottom:4px solid #B93838"; value="Add To Cart" /></a>	
					</form>
				</ul>
				<ul class="product-share">
					<h3>All so Share On</h3>
					<ul>
						<li><a class="share-face" href="#"><span> </span> </a></li>
						<li><a class="share-twitter" href="#"><span> </span> </a></li>
						<li><a class="share-google" href="#"><span> </span> </a></li>
						<li><a class="share-rss" href="#"><span> </span> </a></li>
						<div class="clear"> </div>
					</ul>
				</ul>
			</div>
			<?php 
			}
			?>
		</div>
	</div>
	<div class="clear"> </div>
</div>