<?php
	$mangslider = array(
		array(
			"link" => "#slide1",
			"img" => "images/slide-1.jpg",
			"h3" => "MENS FOOTBALL",
			"label" => "BOOTS",
			"span" => "Stay true to your team all day, every day, game day.",
			"a" => "Shop Now"
		),
		array(
			"link" => "#slide2",
			"img" => "images/slide-4.jpg",
			"h3" => "MENS FOOTBALL",
			"label" => "BOOTS",
			"span" => "Stay true to your team all day, every day, game day.",
			"a" => "Shop Now"
		),
		array(
			"link" => "#slide3",
			"img" => "images/slide-1.jpg",
			"h3" => "MENS FOOTBALL",
			"label" => "BOOTS",
			"span" => "Stay true to your team all day, every day, game day.",
			"a" => "Shop Now"
		)
	)
?>
<!----start-image-slider---->
<div class="img-slider">
		<div class="wrap">
			<ul id="jquery-demo">
				<?php foreach ($mangslider as $mangsl) 
				{
				?>
					<li>
						<a href="<?php echo $mangsl["link"] ?>">
							<img src="<?php echo $mangsl["img"] ?>" alt="" />
						</a>
						<div class="slider-detils">
							<h3><?php echo $mangsl["h3"] ?>L <label><?php echo $mangsl["label"] ?></label></h3>
							<span><?php echo $mangsl["span"] ?></span>
							<a class="slide-btn" href="details.php"> <?php echo $mangsl["a"] ?></a>
						</div>
					</li>
				<?php 
			}?>
		</div>
	</div>
	<div class="clear"> </div>
	<!----//End-image-slider---->