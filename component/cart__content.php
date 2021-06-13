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
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								</td><td>
								<!-- <input value="" name="border-color" class="pick-a-color form-control" type="text">
								<input value="" name="font-color" class="pick-a-color form-control" type="text"> 
								<input value="" name="backgound-color" class="pick-a-color form-control" type="text"> 
								<input value="" name="highlight-color" class="pick-a-color form-control" type="text"> 
								<input value="" name="contrast-color" class="pick-a-color form-control" type="text">
								<input class="pick-a-color form-control" disabled="" type="text"> 
								<input class="pick-a-color form-control" type="text">  -->
								<td><a href="#" class="btn btn-primary">Buy now</a></td>
								<td><a href="#" class="btn btn-success">Update</a></td>
								<td><a href="#" class="btn btn-danger">Delete</a></td>  
							</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
 
	$(".pick-a-color").pickAColor({             
	showSpectrum: true, 
	showSavedColors:true,   
	saveColorsPerElement:true,  
	fadeMenuToggle:true,    
	showAdvanced:true,  
	showBasicColors: true,  
	showHexInput:true,  
	allowBlank:true,inlineDropdown:true 
	}); 
		});
</script>