<!DOCTYPE>

<head>
	<title>**ShoesShop-DoAn**</title>
	<link href="<?php echo $level . css__path . 'style.css' ?>" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	</script>
	<!----webfonts---->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!----//webfonts---->
	<script src="<?php echo $level . js__path . 'jquery.min.js' ?>"></script>
	<!----start-alert-scroller---->
	<script type="text/javascript" src="<?php echo $level . js__path . 'jquery.easy-ticker.js' ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
	</script>
	<!----start-alert-scroller---->
	<!-- start menu -->
	<link href="<?php echo $level . css__path . 'megamenu.css' ?>" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="<?php echo $level . js__path . 'megamenu.js' ?>"></script>
	<script>
		$(document).ready(function() {
			$(".megamenu").megamenu();
		});
	</script>
	<script src="<?php echo $level . js__path . 'menu_jquery.js' ?>"></script>
	<!-- //End menu -->
	<!---move-top-top---->
	<script type="text/javascript" src="<?php echo $level . js__path . 'move-top.js' ?>"></script>
	<script type="text/javascript" src="<?php echo $level . js__path . 'easing.js' ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('php,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	<!---//move-top-top---->
</head>