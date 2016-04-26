<body>
	<section>
		<form id="formulario" style="">
			<center><img src="<?php echo base_url();?>static/img/1.png" class="img-responsive"></center>
		</form>
		<div>
			<input type="hidden" id="idCli" value="<?php echo $data['idcliente'];?>">
			<div id="botones">
				<button type="button">AMO</button>
				<button type="button">MAMÁ</button>
				<button type="button">QUIERO</button>
				<button type="button">TE</button>
				<button type="button">VIAJERA</button>
				<button type="button">MI</button>
				<!--button type="button">TODO</button>
				<button type="button">ERES</button-->
			</div>
			<input type="text" id="oracion" style="width:340px">
			<button type="button" id="clip">Aceptar y Copiar</button>
		</div>
	</section>
</body>
