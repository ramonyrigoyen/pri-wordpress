<div class="wrap">
	<h2>Soporte Tecnico</h2>
	<p>Rellena todo los campos y realiza tu consulta</p>

<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
	<label for="txtnombre">Nombre:</label>
	<input type="text" id="txtnombre" name="txtnombre">

	<label for="txtemail">Email:</label>
	<input type="text" id="txtemail" name="txtemail">

	<label for="txtconsulta">Mensaje:</label>
	<textarea name="txtconsulta" id="txtconsulta" cols="15" rows="4"></textarea>

	<input type="hidden" name="action" value="soporte">

	<input type="submit" value="Enviar">
</form>

</div>