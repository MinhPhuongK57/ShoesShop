<?php
	$level = "";
	include $level."index__data.php";
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
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Product Image</th>
							<th>Price</th>
							<th>Total</th>
							<th>Size</th>
							<th>Color</th>
							<th style="border-right:none"></th>
							<th style="border-left:none;border-right:none"></th>
							<th style="border-left:none;"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($list__product_x_rowsdata as $row){?>
							<tr>
								<td><?php echo $level.$row['productname']?></td>
								<td><img src="<?php echo $level.img__path.$row["productimage"]?>" alt="" style="width:70px;"></td>
								<td><?php echo $level.$row['price']?></td>
								<td><input type="number" max="200" min="0" value="<?php echo $level.$row['total']?>" style="width:65px;height:25px;border:1px solid grey;border-radius:3px;outline:grey;"></td>
								<td><input type="number" max="200" min="0" value="<?php echo $level.$row['size']?>" style="width:65px;height:25px;border:1px solid grey;border-radius:3px;outline:grey;"></td>
								<td><?php echo $level.$row['color']?></td>
								<td><a href="#" class="btn btn-primary">Buy now</a></td>
								<td><a href="#" class="btn btn-success">Update</a></td>
								<td><a href="#" class="btn btn-danger">Delete</a></td>  
							</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>