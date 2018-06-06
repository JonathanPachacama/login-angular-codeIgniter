<?php if($usuarios): ?>
	<?php foreach ($usuarios->result() as $usuario):?>
		<ul>
			<li><?= $usuario->nombre; ?></li>
		</ul>
	<?php endforeach;?>
<?php else:?>
	<p>no se encontró</p>
<?php endif;?>

<br><br><br><br>

</body>
</html>
