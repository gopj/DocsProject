<h2>Usuarios</h2>

<div style="max-width: 170px; float:right; margin-top:-35px;">
	<?= anchor( "admin/users/create/" ,"<i class='icon-disk-2'></i> Agregar" ,"class='btn btn-block btn-primary'" )?>
</div>

<table class="table table-striped table-bordered" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Contraseña</th>
			<th>Tipo de usuario</th>
			<th width="100px">Opciones</th>
		</tr>
	</thead>

	<?php
		foreach ($users->result() as $user) { ?>
				<tr>
					<td><?= $user->idUser ?></td>
					<td><?=$user->userName?></td>
					<td><?=$user->name?></td>
					<td><?=$user->lastName?></td>
					<td><?=$user->password?></td>
					<td><?=$user->txtProfile?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-inverse" href="#"><i class="icon-user icon-white"></i> Modificar</a>
							<a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="<?=base_url()."users/update/".$user->idUser?>"><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-trash"></i> Borrar</a></li>
								<li><a href="#"><i class=" icon-cross"></i> Desactivar </a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="i"></i> Hacer Admin</a></li>
							</ul>
						</div>
					</td>
				</tr>
			
	<?php	} ?>
</table>