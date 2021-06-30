<?php
$level = "";
include "pages/index__data.php";

?>
<div class="product-grids">
	<!--- start-rate---->
	<script src="<?php echo $level . js__path . 'jstarbox.js' ?>"></script>
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
	<?php foreach ($list__product_rowsdata as $mangpro) : ?>
		<div class="product-grid fade" style="width:29%">
			<div class="product-grid-head">
				<div style="height:20px;width:150px">
				<?php echo $mangpro["productname"]; ?>
				</div>
				<div style="height:15px;width:15px;color:red;font-size:25px;margin-top:0%;margin-left:75%;">	
				<?php if($mangpro["discount"]>0) echo " (Sale)" ?>
				</div>
				<ul class="grid-social">

					<div class="clear"> </div>
				</ul>
				<div class="block">
					<div class="starbox small ghosting"> </div> <span> <?php echo $mangpro["id_producttype"] ?></span>
				</div>
			</div>
			<div class="product-pic">
				<a href="details.php?id_product=<?php echo $mangpro["id_product"] ?>"><img src="<?php echo $level . img__path . $mangpro["productimage"] ?>" title=<?php echo $mangpro["productname"] ?> /></a>
				<p>
					<a  style="color:<?php echo $mangpro["color"] ?>;font-size:30px" href="details.php?id_product=<?php echo $mangpro["id_product"] ?>"><small></small> <small><?php echo $mangpro["color"] ?></small> </a>
					<span><?php echo $mangpro["description"] ?></span>
				</p>
			</div>
			<div class="product-info">
				<div class="product-info-cust">
					<a href="details.php?id_product=<?php echo $mangpro["id_product"] ?>" title="Details product">DETAILS</a>
				</div>
				<div class="product-info-price">
					<a href="details.php?id_product=<?php echo $mangpro["id_product"] ?>">&#163; <?php echo $mangpro["price"] ?></a>
				</div>
				<div class="clear"> </div>
				
			</div>


		</div>
	<?php endforeach ?>
	<div class="clear"> </div>
	<div class="next__page" style="display:flex;align-items:center;justify-content:center;flex-direction:row">
		<a href="?numpro=<?php echo $numpro ?>&page_item=<?php $page = $page_item;
														if ($page_item == 1) $page = 1;
														else $page -= 1;
														echo $page; ?>" style="color:red;width:30px;height:30px;background:f1f1f1;box-shadow: 3px 1px 15px 2px rgb(201,205,201);
						text-align:center;line-height:30px;border-radius:5px;margin:10px;">
			<i class="fas fa-angle-double-left" style="font-size:18px;line-height:30px;"></i></a>
		<?php for ($i = 1; $i <= $numpage; $i++) : ?>
			<?php $page_item = !empty($_GET['page_item']) ? $_GET['page_item'] : 1;
			if ($i < $page_item + 2 && $i > $page_item - 2) { ?>
				<?php if ($i == $page_item) { ?>
					<a href="?numpro=<?php echo $numpro ?>&page_item=<?php echo $i ?>" class="page-item" style="box-shadow: 3px 1px 15px 2px rgb(201,205,201);text-align:center;line-height:30px;border-radius:5px;margin:5px;background:black"><?php echo $i ?></a>
				<?php } else { ?>
					<a href="?numpro=<?php echo $numpro ?>&page_item=<?php echo $i ?>" class="page-item" style="box-shadow: 3px 1px 15px 2px rgb(201,205,201);text-align:center;line-height:30px;border-radius:5px;margin:5px;	"><?php echo $i ?></a>
				<?php } ?>
			<?php } ?>
		<?php endfor ?>
		<a href="?numpro=<?php echo $numpro ?>&page_item=<?php  $page = $page_item;
														if ($page_item == $numpage) $page = $numpage;
														else $page += 1;
														echo $page;  ?>" style="color:red;width:30px;height:30px;background:f1f1f1;box-shadow: 3px 1px 15px 2px rgb(201,205,201);
						text-align:center;line-height:30px;border-radius:5px;margin:10px;">
			<i class="fas fa-angle-double-right" style="font-size:18px;line-height:30px;"></i></a>
	</div>
</div>
<!----start-load-more-products---->
<!----//End-load-more-products---->
</div>
<div class="clear"> </div>
</div>
</div>