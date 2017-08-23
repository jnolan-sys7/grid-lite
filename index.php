<?php
/**
 * Created by PhpStorm.
 * User: Haderak
 * Date: 8/22/2017
 * Time: 8:56 PM
 */
$maxColumns = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" type="text/css" media="all" href="grid-lite.css" />
	<style type="text/css">

		body {
			font-family: Arial, sans-serif;
		}

		.grid-lite {
			margin-bottom: 20px;
		}

		.cell {
			background: #EEE;
			font-size: 1em;
			border: 1px solid #DDD;
			text-align: center;
			padding: 50px 0px;
		}

		.grid-lite {
			padding: 0 20px;
		}

	</style>
</head>
<body>

	<h1>Grid-Lite Demo</h1>

	<?php
	for($l = 1; $l <= $maxColumns; $l++ ) {
		for($m = 1; $m <= $l; $m++) {
			for($s = 1; $s <= $m; $s++) {

				$breakdown = 'breakdown-'.$l.'-'.$m.'-'.$s;
				?>

				<h2><?php echo '.grid-lite.'.$breakdown; ?></h2>
				<div class="grid-lite <?php echo $breakdown; ?>">
					<?php
					for($i=1;$i<=$l;$i++) {
						?>

						<div class="cell"><?php echo $i; ?></div>

						<?php

					}
					?>
				</div>
				<br />

				<?php
			}
		}
	}
	?>


</body>
</html>
