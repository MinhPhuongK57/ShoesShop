<?php

//include "pages/session.php";
$cart = (isset($_SESSION['cart']) ? $_SESSION['cart'] : []);
?>

<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><code>CART</code></h1>

	<!-- Database Shoes Shop -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List of cart</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead style="border: 1px solid #e3e6f0;margin-top: 3%;">
						<tr>
							<th>Product Name</th>
							<th>Product Image</th>
							<th>Price</th>
							<th>Color</th>
							<th>Size</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th style="border-right:none"></th>
							<th style="border-left:none;border-right:none"></th>
							<th style="border-left:none;"></th>
						</tr>
					</thead>
					<tbody>
						<?php $totalprice = 0;
						$totalquantity = 0; ?>
						<?php foreach ($cart as $row => $value) {
							$totalprice += ($value['discount'] * $value['quantity']);
							$totalquantity += $value['quantity'];
						?>
							<tr>
								<td><?php echo $value['productname'] ?></td>
								<td><img src="<?php echo $level . img__path . $value["productimage"] ?>" alt="" style="width:70px;"></td>
								<td><?php echo $value['discount'] ?></td>
								<td><?php echo $value['color'] ?></td>
								<td><?php echo $value['size'] ?></td>
								<form action="cart.php">
									<input type="hidden" name="action" value="update">
									<td><input type="number" name="quantity" max="<?php echo $value['total'] ?>" min="1" value="<?php if ($value['quantity'] > $value['total']) $value['quantity'] = $value['total'];
																																echo $value['quantity'] ?>" name="quantity" style="width:65px;height:25px;border:1px solid grey;border-radius:3px;outline:grey;" ></td>

									<input type="hidden" name="id_product" value="<?php echo $value['id_product'] ?>">
									<td>&#163;<?php echo number_format($value['discount'] * $value['quantity']) ?></td>
									<td><button type="submit" class="btn btn-success">Update</button></td>
									<td><a href="cart.php?id_product=<?php echo $value['id_product'] ?>&action=delete" class="btn btn-danger">Delete</a></td>
								</form>
								<form action="cart.php">
									<input type="hidden" name="action" value="buynow">
									<input type="hidden" name="id_product" value="<?php echo $value['id_product'] ?>">
									<input type="hidden" name="totalprice" value="<?php $price = $value['discount'] * $value['quantity']; echo $price ?>">
									<input type="hidden" name="quantity" value="<?php echo $value['quantity'] ?>">
									<input type="hidden" name="price" value="<?php echo $value['discount'] ?>">
									<input type="hidden" name="discount" value="<?php echo $value['discountnum'] ?>">
									<td><button class="btn btn-primary" type="submit">Buy now</button></td>
								<?php } ?>
									<tr style="margin-left: 20%;"><span style="margin-left: 5%;margin-right: 3%;">Address: </span><input style="width: 350;" type="text" name="address" value=""></tr>
								</form>
								</tr>
							</tbody>
							
				</table>
				<form action="cart.php">
				</form>
						<!--/////-->
				<table class="table" style="border-bottom:1px solid #e3e6f0;
											border-right:1px solid #e3e6f0;
											border-left:1px solid #e3e6f0; padding-top:-20px" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th ></th>
							<th></th>
							<th></th>
							<th></th>
							<th style="border-right:none"></th>
							<th style="border-left:none;border-right:none"></th>
							<th style="border-left:none;"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td><span style="margin-right: 10px;;">Total Price</span><input type="text" value="" placeholder="&#163;<?php echo number_format($totalprice) ?>" disabled></td>
							<td></td>
							<td></td>
							<td><span style="margin-right: 10px;">Quantity</span><input type="text" value="" placeholder="<?php echo $totalquantity ?>" disabled></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="cart.php?action=deleteall" class="btn btn-danger">Delete All</a></td>
							<td><a href="cart.php?quantity=<?php echo $totalquantity ?>&totalprice=<?php echo $totalprice ?>&action=buyall" class="btn btn-primary">Buy All</a></td>
						</tr>
					</tbody>
				</table>
				<!--/////-->

			</div>
		</div>
	</div>
</div>