<?php

		$level = "";
    	include $level."pages/index__data.php";
		include $level."pages/feedback.php";
		//var_dump($query);

?>
			<!----product-rewies---->
			<div class="product-reviwes">
				<div class="wrap">
					<?php foreach($list__product_detail_rowsdata as $mangpro)
					{
					?>
					<!--vertical Tabs-script-->
					<!---responsive-tabs---->
					<script src="<?php echo $level.js__path.'easyResponsiveTabs.js' ?>" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true,   // 100% fit in a container
								closed: 'accordion', // Start closed if in accordion view
								activate: function (event) { // Callback function if tab is switched
									var $tab = $(this);
									var $info = $('#tabInfo');
									var $name = $('span', $info);
									$name.text($tab.text());
									$info.show();
								}
							});

							$('#verticalTab').easyResponsiveTabs({
								type: 'vertical',
								width: 'auto',
								fit: true
							});
						});
					</script>
					<!---//responsive-tabs---->
					<!--//vertical Tabs-script-->
					<!--vertical Tabs-->
					<div id="verticalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<li>Product tags</li>
							<li>Product reviews</li>
						</ul>
						<div class="resp-tabs-container vertical-tabs">
							<div>
								<h3> Details</h3>

								<p><?php echo $mangpro["description"] ?></p>
							</div>
							<div>
								<h3>Product Tags</h3>
								<h4>Add Your Tags:</h4>
								<form>
									<input type="text"> <input type="submit" value="ADD TAGS" />
									<span>Use spaces to separate tags. Use single quotes (') for phrases.</span>
								</form>
							</div>
							<div>
								<h2>Customer Reviews</h2>
								<!-- <p  style="color:red;">Customer name</p> -->
								<form  method="post" enctype="multipart/form-data">
									<div style="overflow-y:scroll;height:350;">
										<?php foreach($list__feedback_rowsdata as $feedback): ?>
											<div style="width:500px;height:auto;position:relative;border:1px solid #f1f1f1;margin-bottom: 5px;border-radius:5px">
												<span style="display:flex;position:absolute;margin-left: 10px;border-radius:10px">
													<p style="margin-right: 20px;"><?php echo $feedback["email"]?></p>
													<p style="margin-left:300px"><?php echo $feedback["date"]?></p>
												</span>
												<p style="margin-bottom: 25px;"></p>
												<p style="width:500px;height:20px;border:none"> <?php echo $feedback["description"]?> </p>
											</div>
										
										<?php endforeach ?>
									</div>
									<hr style="width:100%;background:grey;height:0.1px"></hr>
									<textarea name="discription" id="" cols="100" rows="8" type="input" placeholder="Enter your comment" value = ""
									style="border-radius: 5px;padding:10px;outline-color:#E45D5D;border-radius:1px solid #EEE"></textarea>
									<div style="margin-top:20px">
										<input type="submit" value="Comment">
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
					<!--- start-similar-products--->
					<div class="similar-products">
						<div class="similar-products-left">
							<h3>SIMILAR PRODUCTS</h3>
							<p>New Product</p>
						</div>
						<div class="similar-products-right">
							<!-- start content_slider -->
							<!--- start-rate---->
							<script src="js/jstarbox.js"></script>
							<link rel="stylesheet" href="<?php echo $level.css__path.'jstarbox.css' ?>" type="text/css" media="screen"
								charset="utf-8" />
							<script type="text/javascript">
								jQuery(function () {
									jQuery('.starbox').each(function () {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function (event, value) {
											if (starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' ' + val);
												return val;
											}
										})
									});
								});
							</script>
							<!---//End-rate---->
							<div id="owl-demo" class="owl-carousel">
								<div class="item" onclick="location.href='details.php';">
									<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="<?php echo $level.img__path.$mangpro["productimage"] ?>" title="product-name" /></a>
											<p>
												<a href="#"><small><?php echo $mangpro["id_producttype"] ?> </small> <?php echo $mangpro["id_provider"] ?> <small><?php echo $mangpro["color"] ?></small> <?php echo $mangpro["size"] ?></a>
												<span><?php echo $mangpro["description"] ?></span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Details</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#163; <?php echo $mangpro["price"] ?></a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
									</div>
							</div>
							<!----//End-img-cursual---->
						</div>
						<div class="clear"> </div>
					</div>
								<?php 
								} 
								?>
					<!--- //End-similar-products--->
				</div>
			</div>
			<div class="clear"> </div>
			<!--//vertical Tabs-->
			<!----//product-rewies---->
			<!---//End-product-details--->
		</div>
	</div>