
					<div class="details-left-info">
						<div class="details-right-head">
							<?php foreach ($list__product_detail_rowsdata as $mangdel)
							{
							?>
							<h1><?php echo $mangdel["productname"] ?></h1>
							<ul class="pro-rate">
								<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
								<li><a href="#">0 Review(s) Add Review</a></li>
							</ul>
							<p class="product-detail-info"><?php echo $mangdel["productname"] ?></p>
							<a class="learn-more" href="#">
								<h3>MORE DETAILS</h3>
							</a>
							<div class="product-more-details">
								<ul class="price-avl">
									<li class="price"><span>&#163;	<?php echo $mangdel["price"] ?></span><label>&#163;	<?php echo $mangdel["price"] ?></p></label></li>
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
									<span>Quantity:</span>
									<select>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</ul>
								<a href="cart.php?id_product=<?php echo $mangdel["id_product"]?>"><input type="button" value="add to cart" /></a>
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