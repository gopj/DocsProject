<div class="form-login">
	<?php echo form_open("login/", array("class" => "form-horizontal")); ?>
		<div class="control-group">
			<label class="control-label" for="inputUser">Usuario </label>
			<div class="controls">
				<input type="text" id="inputUser" placeholder="Usuario" name="user">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contraseña </label>
			<div class="controls">
				<input type="password" id="inputPassword" placeholder="&#8226&#8226&#8226&#8226&#8226&#8226" name="password">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox"><span class="metro-checkbox">Recordarme</span>
				</label>
				<?php echo form_submit("login", "Entrar", 'class="btn btn-primary"'); ?>
			</div>
		</div>		
	<?php echo form_close(); ?>	
</div>

