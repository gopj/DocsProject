<?php 
	/*echo "<pre>";
	print_r($this->session->userdata('user'));
	echo "</pre>"; */

	$user = $this->session->userdata['user']['name'] . " ". $this->session->userdata['user']['lastName'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
	<title>Docs - Administrador</title>

	<?php echo link_tag( 'css/bootmetro.css' ) ?>
	<?php echo link_tag( 'css/bootmetro-icons.css' ) ?>
	<?php echo link_tag( 'css/datepicker.css' ) ?>
	<?php echo link_tag( 'css/bootmetro-responsive.css' ) ?>
	<?php echo link_tag( 'css/bootmetro-ui-light.css' ) ?>
	
	<script src="<?=base_url('js/bootstrap.js')?>"> </script>
	<script src="<?=base_url('js/jquery-1.10.0.min.js')?>"> </script>
	
	<script src="<?=base_url('js/min/bootstrap.min.js')?>"> </script>
	<script src="<?=base_url('js/bootmetro-panorama.js')?>"> </script>
	<script src="<?=base_url('js/bootmetro-pivot.js')?>"> </script>
	<script src="<?=base_url('js/bootmetro-charms.js')?>"> </script>
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

			<a class="brand" href="<?=base_url();?>admin">Docs Project</a>
			<div class="nav-collapse collapse navbar-inverse-collapse">

				<ul class="nav">
					<li><a href="#">Conocenos</a></li>
					<li><a href="#">Link</a></li>
				</ul>

				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Admin <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="nav-header">Administraci&oacute;n de usuarios</li>
							<li><a href="<?=base_url();?>admin/users"> Usuarios </a></li>
							<li class="divider"></li>
							<li class="nav-header">Agregar</li>
							<li><a href="<?=base_url();?>admin/productos"> Archivos </a></li>
						</ul>
					</li>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $user ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url();?>login/logout"> Logout </a></li>
							
						</ul>
					</li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>
	</div><!-- /navbar-inner -->
</div><!-- /navbar -->
<br />
 	<div class="container">
		<?php echo $output; ?>
	</div>
</body>
</html>