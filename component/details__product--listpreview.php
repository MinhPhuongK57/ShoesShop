<?php

$level = "";
include $level . "pages/index__data.php";
include $level . "pages/feedback.php";
$err = [];	
$account=!empty($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "";
if($account=='')
{
	$err['login'] = "Please login your account";
}
//var_dump($query);
$gmail = isset($_COOKIE["gmail"]) ? $_COOKIE["gmail"] : "";
?>
<!----product-rewies---->
<div class="product-reviwes">
	<div class="wrap">
		<div id="verticalTab">
			<div class="resp-tabs-container vertical-tabs">
				<h3> Details</h3>
				<?php foreach ($list__product_detail_rowsdata as $mangpro) : ?>
				<p><?php echo $mangpro["description"] ?></p>
				<p></p>
				<h3>Customer Reviews</h3>
				<p > </p>
					<div style="overflow-y:auto;overflow-x:hidden;height:350;width:80%;border:3px solid #fafafa;border-radius:5px;box-shadow: 3px 1px 15px 2px rgb(230, 240, 245);">
						<?php foreach ($list__feedback_rowsdata as $feedback) : ?>
							<div style="width:98%;height:auto;position:relative;box-shadow: 3px 1px 15px 2px rgb(230, 240, 250);margin:10px 10px 5px 10px;border-radius:5px;padding:10px;">
								<span style="display:flex;position:absolute;margin-left: 10px;border-radius:10px">
									<p style="color:tomato;margin-right: 20px;"><?php echo $feedback["email"] ?></p>
									<p style="margin-left:500px"><?php echo $feedback["date"] ?> </p>
								</span>
								<p style="margin-bottom: 25px;"></p>								
								<p style="width:500px;height:20px;border:none;margin-left: 10px;display:flex"> <?php if ($feedback["email"] == $gmail) { ?>
								<div style="display:flex;margin-top: -3%;">
									<form action="" method="post" style="display:flex;">
										<input style="margin-left: 1%;border-radius:10px;border:1px solid #f1f1f1;width:430px;outline-color:#e3e6f0;;" type="text" name="updatedes" placeholder="" value="<?php echo $feedback["description"] ?>" ; />
										<input type="hidden" name="update" placeholder="" value="update" ; />
										<input type="hidden" name="id_update" placeholder="" value="<?php echo $feedback["id_feedback"] ?>" ; />
										<button
										 style="font-size:15px;letter-spacing:0.5px;color:grey;height:40px;margin-left:70px;width:100px;border:none;border-radius:10px;cursor:pointer;background:white;box-shadow:3px 1px 15px 2px rgb(240, 210, 245);"
										 type="submit">Update
										</button>
									</form>	
									<form style="margin-left: 5%;margin-top: 1%;" action="" method="post">
										<input type="hidden" name="delete" placeholder="" value="delete" ; />
										<input type="hidden" name="id_delete" placeholder="" value="<?php echo $feedback["id_feedback"] ?>" ; />
										<button style="font-size:15px;letter-spacing:0.5px;color:grey;height:40px;margin-left:10;margin-top: -7px;;width:100px;border:none;border-radius:10px;cursor:pointer;background:white;box-shadow:3px 1px 15px 2px rgb(240, 210, 245);" type="submit">Delete</button>
									</form>	
								</div>				
								</p>
								<?php } else {?>
									<?php echo $feedback["description"] ?>
								<?php } ?>
							</div>

						<?php endforeach ?>
						<?php endforeach ?>
					</div>
				<form style="margin-top: 2%;" method="post" enctype="multipart/form-data">
					<textarea name="discription" id="" cols="100" rows="8" type="input" placeholder="Enter your comment" value="" style="border-radius: 5px;padding:10px;outline-color:#E45D5E;border:1px solid #EEE;width:80%"></textarea>
					<div class="has-error">
						<span style="color:red;width:450px"><?php echo (isset($err['login'])) ? $err['login'] : ''  ?></span>
					</div>
					<div style="margin-top:20px">
						<input type="submit" value="Comment">
					</div>
				</form>
			</div>
		</div>
		<div class="clear"> </div>
		<!--- start-similar-products--->
		<div class="similar-products">
			<div style="height: 380;" class="similar-products-left">
				<h3>SIMILAR PRODUCTS</h3>
				<p>New Product</p>
			</div>
			<div class="similar-products-right">
				<!-- start content_slider -->
				<!--- start-rate---->
				<script src="js/jstarbox.js"></script>
				<link rel="stylesheet" href="<?php echo $level . css__path . 'jstarbox.css' ?>" type="text/css" media="screen" charset="utf-8" />
				<script type="text/javascript">
					jQuery(function() {
						jQuery('.starbox').each(function() {
							var starbox = jQuery(this);
							starbox.starbox({
								average: starbox.attr('data-start-value'),
								changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
								ghosting: starbox.hasClass('ghosting'),
								autoUpdateAverage: starbox.hasClass('autoupdate'),
								buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
								stars: starbox.attr('data-star-count') || 5
							}).bind('starbox-value-changed', function(event, value) {
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

				<?php foreach ($producttop3_data as $mangpro3) : ?>
					<div class="product-grid fade" style="width:29%">
						<div class="product-grid-head">
							<p style="height:18px;"><?php echo $mangpro3["productname"] ?> </p>

							<ul class="grid-social">

								<div class="clear"> </div>
							</ul>
							<div class="block">
								<div class="starbox small ghosting"> </div> <span> <?php echo $mangpro3["id_producttype"] ?></span>
							</div>
						</div>
						<div class="product-pic">
							<a href="details.php?id_product=<?php echo $mangpro3["id_product"] ?>"><img src="<?php echo $level . img__path . $mangpro3["productimage"] ?>" title=<?php echo $mangpro3["productname"] ?> /></a>
							<p>
								<a style="color:<?php echo $mangpro3["color"] ?>;font-size:30px" href="details.php?id_product=<?php echo $mangpro3["id_product"] ?>"><small></small> <small><?php echo $mangpro3["color"] ?></small> </a>

							</p>
						</div>
						<div class="product-info">
							<div class="product-info-cust">
								<a href="details.php?id_product=<?php echo $mangpro3["id_product"] ?>" title="Details product">DETAILS</a>
							</div>
							<div class="product-info-price">
								<a href="details.php?id_product=<?php echo $mangpro3["id_product"] ?>">&#163; <?php echo $mangpro3["price"] ?></a>
							</div>
							<div class="clear"> </div>
						</div>


					</div>
				<?php endforeach ?>
				<!----//End-img-cursual---->
			</div>
			<div class="clear"> </div>
		</div>

		<!--- //End-similar-products--->
	</div>
</div>
<div class="clear"> </div>
<!--//vertical Tabs-->
<!----//product-rewies---->
<!---//End-product-details--->
</div>
</div>