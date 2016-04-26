<option>Distrito</option>
<?php
foreach ($distritos as $key => $value) {
	?>
	<option value="<?php echo $value->iddist;?>"><?php echo $value->distrito; ?></option>
	<?php
}
?>