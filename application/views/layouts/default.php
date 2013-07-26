<?php // $user = $this->session->userdata('user'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
	<title>Docs</title>

	<?php echo link_tag( 'css/bootmetro.css' ) ?>
	<?php echo link_tag( 'css/bootmetro-icons.css' ) ?>
	<?php echo link_tag( 'css/datepicker.css' ) ?>
	<?php echo link_tag( 'css/bootmetro-responsive.css' ) ?>
	<?php echo link_tag( 'css/css/bootmetro-ui-light.css' ) ?>
	
	<script src="<?=base_url('js/bootstrap.js')?>"> </script>
	<script src="<?=base_url('js/jquery-1.10.0.min.js')?>"> </script>
	
	<script src="<?=base_url('js/min/bootstrap.min.js')?>"> </script>
	<script src="<?=base_url('js/bootmetro-panorama.js')?>"> </script>
	<script src="<?=base_url('js/bootmetro-pivot.js')?>"> </script>
	<script src="<?=base_url('js/bootmetro-charms.js')?>"> </script>
	
	<script type="text/javascript">
	$(function() {
		$('[data-toggle="login"]').click(function(e) {
			e.preventDefault();

			var href = $(this).attr('href'); //URL donde se encuentra el login

			if (href.indexOf('#') == 0) {
				$(href)
				.removeData('modal')
				.modal('open');
			} else {
				$.get(href, function(data) {
					$(data).modal();
				});
			}
		});
	});
</script>

</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse" style="position: static;">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="<?=base_url()?>">Docs</a>
			<div class="nav-collapse collapse navbar-inverse-collapse">

				<ul class="nav">
					<li><a href="#">Conocenos</a></li>
					<li><a href="#">Link</a></li>
				</ul>

				<ul class="nav pull-right">
					<li class="divider-vertical"></li>
					<li><a data-toggle="login" href="login/index"> Iniciar Sesion</a></li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>
	</div><!-- /navbar-inner -->
</div><!-- /navbar -->

	<?php echo $output; ?>

</body>
</html>