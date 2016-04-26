<body>
	<section>
		<form method="POST" action="/home/register">
			<input name="nombres" type="text" placeholder="Nombres" maxlength="25" required>
			<br>
			<input name="apellidos" type="text" placeholder="Apellidos" maxlength="25" required>
			<br>
			<input name="dni" type="text" placeholder="DNI" maxlength="8" required>
			<br>
			<input name="email" type="email" placeholder="Email" maxlength="50" required>
			<br>
			<select name="departamento" id="departamento" required>
				<option>Departamento</option>
				<?php
				foreach ($ubigeo as $key => $value) {
					?>
					<option value="<?php echo $value->iddepa;?>"><?php echo $value->departamento;?></option>
					<?php
				}
				?>
			</select>
			<br>
			<select name="provincia" id="provincia" required>
				<option>Provincia</option>
			</select>
			<br>
			<select name="distrito" id="distrito" required>
				<option>Distrito</option>
			</select>
			<br>
			<input class="btn btn-success col-md-offset-5 col-md-2 col-sm-offset-5 col-sm-2 col-xs-offset-5 col-xs-2" type="submit">
		</form>
	</section>
</body>