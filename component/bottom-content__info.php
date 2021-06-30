<?php
$mangbottom__content = array(
	array(
		"h6" => "EMAIL SIGN UP",
		"p" => "Be the first to know about new products and special offers.",
		"a" => "Sign up now"
	),
	array(
		"h6" => "GIFT CARDS",
		"p" => "Give the gift that always fits.",
		"a" => "View cards"
	),
	array(
		"h6" => "STORES NEAR YOU",
		"p" => "Locate a Nike retail store or authorized retailer.",
		"a" => "Search"
	)
)
?>
<!---- start-bottom-grids---->
<div class="bottom-grids">
	<div class="bottom-top-grids">
		<div class="wrap">
			<div class="bottom-top-grid">
				<h4>GET HELP</h4>
				<ul>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="#">Shopping</a></li>
					<li><a href="#">NIKEiD</a></li>
					<li><a href="#">Nike+</a></li>
				</ul>
			</div>
			<div class="bottom-top-grid">
				<h4>ORDERS</h4>
				<ul>
					<li><a href="#">Payment options</a></li>
					<li><a href="#">Shipping and delivery</a></li>
					<li><a href="#">Returns</a></li>
				</ul>
			</div>
			<div class="bottom-top-grid last-bottom-top-grid">
				<h4>REGISTER</h4>
				<p>Create one account to manage everything you do with Nike, from your shopping preferences to your
					Nike+ activity.</p>
				<a class="learn-more" href="#">Learn more</a>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<div class="bottom-bottom-grids">
		<div class="wrap">
			<?php foreach ($mangbottom__content as $mang) { ?>
				<div class="bottom-bottom-grid">
					<h6><?php echo $level . $mang["h6"] ?></h6>
					<p><?php echo $level . $mang["p"] ?></p>
					<a class="learn-more" href="#"><?php echo $level . $mang["a"] ?></a>
				</div>
			<?php } ?>
			<div class="clear"> </div>
		</div>
	</div>
</div>
<!---- //End-bottom-grids---->
<!--- //End-content---->