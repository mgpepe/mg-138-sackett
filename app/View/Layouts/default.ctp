<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> | 138 Sackett
	</title>
	<?php
		echo $this->Html->meta('icon');

		

		echo $this->fetch('meta');
		echo $this->fetch('css?v=2');
		echo $this->fetch('script');
	?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<?php echo $this->Html->css('styles'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="container" class="">
		<!-- navbar -->
		<?php echo $this->element('navbar'); ?>
		<!-- content -->
		<div id="contentx">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
		</div>
		<!-- div id="footer">
			<div class="container">
				footer
			</div>
		</div> -->
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<!-- Latest compiled and minified JavaScript. At end so page loads faster -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<?php echo $this->Html->script('menu-control'); ?>
</body>
</html>
