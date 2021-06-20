<?php
	include "pages/session.php";
	$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : "Guest";
	$log = isset($_COOKIE["gmail"]) ? "| Logout" : "| Login";

	$cart = (isset($_SESSION['cart']) ? $_SESSION['cart'] : [] );
?>
<body>
	<!---start-wrap---->
	<!---start-header---->
	<div class="header">
		<div class="top-header">
			<div class="wrap">
				<div class="top-header-left">
					<ul>
						<!---cart-tonggle-script---->
						<script type="text/javascript">
							$(function () {
								var $cart = $('#cart');
								$('#clickme').click(function (e) {
									e.stopPropagation();
									if ($cart.is(":hidden")) {
										$cart.slideDown("slow");
									} else {
										$cart.slideUp("slow");
									}
								});
								$(document.body).click(function () {
									if ($cart.not(":hidden")) {
										$cart.slideUp("slow");
									}
								});
							});
						</script>
						<!---//cart-tonggle-script---->
						<li><a class="cart" href="#"><span id="clickme"> </span></a></li>
						<!---start-cart-bag---->
						
						<div id="cart"><a href="<?php echo "cart.php"?>">Your Cart (<?php echo count($cart)?>)</a> </div>
						<!---start-cart-bag---->
						<li><a class="info" href="#"><span> </span></a></li>
					</ul>
				</div>
				<div class="top-header-center">
					<div class="top-header-center-alert-left">
						<h3>WEBSITE SHOES SHOP </h3>
					</div>
					<div class="top-header-center-alert-right">
						<div class="vticker">
							<ul>
								<li>Applies to orders of $50 or more. <label>Returns are always free.</label></li>
							</ul>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a href=""><?php echo $id ?><span> </span></li>
						<li><a href="account.php">settings</a><span> </span></li>
						<li><a href="pages/delete_cookie.php"><?php echo $log ?></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>

	