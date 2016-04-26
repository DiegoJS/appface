<option>Provincia</option>
<?php
foreach ($provincias as $key => $value) {
	?>
	<option value="<?php echo $value->idprov;?>"><?php echo $value->provincia; ?></option>
	<?php
}
?>