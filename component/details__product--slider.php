<!--- start-content---->
<div class="content details-page">
	<!---start-product-details--->
	<div class="product-details">
		<div class="wrap">
			<ul class="product-head">
				<li><a href="#">Home</a> <span>::</span></li>
				<li class="active-page"><a href="#">Product Page</a></li>
				<div class="clear"> </div>
			</ul>
			<!----details-product-slider--->
			<!-- Include the Etalage files -->
			<link rel="stylesheet" href="css/etalage.css">
			<script src="js/jquery.etalage.min.js"></script>
			<!-- Include the Etalage files -->
			<script>
				jQuery(document).ready(function($) {

					$('#etalage').etalage({
						thumb_image_width: 300,
						thumb_image_height: 400,
						source_image_width: 900,
						source_image_height: 1000,
						show_hint: true,
						click_callback: function(image_anchor, instance_id) {
							alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
						}
					});
					// This is for the dropdown list example:
					$('.dropdownlist').change(function() {
						etalage_show($(this).find('option:selected').attr('class'));
					});

				});
			</script>
			<!----//details-product-slider--->

			<?php foreach ($list__product_detail_rowsdata as $mangimg) {
			?>
				<div class="details-left">
					<div class="details-left-slider">
						<ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src="<?php echo $level . img__path . $mangimg["productimage"] ?>" />
									<img class="etalage_source_image" src="<?php echo $level . img__path . $mangimg["productimage"] ?>" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php echo $level . img__path . $mangimg["productimage"] ?>" />
								<img class="etalage_source_image" src="<?php echo $level . img__path . $mangimg["productimage"] ?>" />
							</li>
						</ul>
					</div>
				<?php
			} ?>