<?php
$mangindex__contentleft = array(
	array(
		"img" => "images/foot-ball.jpg",
		"h5a" => "Nike Strike PL Hi-Vis",
		"span" => "Football",
		"label" => "375"
	),
	array(
		"img" => "images/jarse.jpg",
		"h5a" => "Nike Strike PL Hi-Vis",
		"span" => "Football",
		"label" => "375"
	)
)
?>
<!--- start-content---->
<div class="content">
	<div class="wrap">
		<div class="content-left">
			<div class="content-left-top-grid">
				<div class="content-left-price-selection">
					<h4>Select Price:</h4>
					<div class="price-selection-tree">
						<span class="col_checkbox">
							<input id="10" class="css-checkbox10" type="checkbox">
							<label class="normal"><i for="10" name="demo_lbl_10" class="css-label10"> </i>
								400</label>
						</span>
						<span class="col_checkbox">
							<input id="11" class="css-checkbox11" type="checkbox">
							<label class="active1"><i for="11" name="demo_lbl_11" class="css-label11">
								</i>350</label>
						</span>
						<span class="col_checkbox">
							<input id="12" class="css-checkbox12" type="checkbox">
							<label class="normal"><i for="12" name="demo_lbl_12" class="css-label12"> </i>
								300</label>
						</span>
						<span class="col_checkbox">
							<input id="13" class="css-checkbox13" type="checkbox">
							<label class="normal"><i for="13" name="demo_lbl_13" class="css-label13">
								</i>250</label>
						</span>
						<span class="col_checkbox">
							<input id="14" class="css-checkbox14" type="checkbox">
							<label class="normal"><i for="14" name="demo_lbl_14" class="css-label14"> </i>
								200</label>
						</span>
						<span class="col_checkbox">
							<input id="15" class="css-checkbox15" type="checkbox">
							<label class="normal"><i for="15" name="demo_lbl_15" class="css-label15">
								</i>150</label>
						</span>
					</div>

				</div>
			</div>
			<div class="content-left-bottom-grid">
				<h4>Boys Football:</h4>
				<div class="content-left-bottom-grids">
					<?php foreach ($mangindex__contentleft as $mangcl) {
					?>
						<div class="content-left-bottom-grid1">
							<img src="<?php echo $mangcl["img"] ?>" title="football" />
							<h5><a href="details.php"><?php echo $mangcl["h5a"] ?></a></h5>
							<span> <?php echo $mangcl["span"] ?></span>
							<label>&#163; <?php echo $mangcl["label"] ?></label>
						</div>
					<?php }
					?>
				</div>
			</div>
		</div>