<body>
	<section>
		<form id="formulario" style="background: url('<?php echo base_url();?>static/img/1.png') no-repeat; background-position: 20px 20px;">
		</form>
		<div>
			<input type="hidden" id="idCli" value="<?php echo $data['idcliente'];?>">
			<div id="botones">
				<button type="button">AMO</button>
				<button type="button">MAMÁ</button>
				<button type="button">QUIERO</button>
				<button type="button">TE</button>
				<button type="button">EXTRAÑO</button>
				<button type="button">MI</button>
				<button type="button">TODO</button>
				<button type="button">ERES</button>
			</div>
			<input type="text" id="oracion">
			<button type="button" id="clip">Copiar</button>
		</div>
	</section>
</body>