<?php if($usuarios): ?>
<?php foreach ($usuarios->result() as $usuario):?>
		<ul>
			<li><a href="http://localhost/login-angular-codeIgniter/CodeIgniter-3.1.8/index.php/login/usuarios/<?=$usuario->idUsuario;?>"><?= $usuario->nombre; ?></a></li>
		</ul>
<?php endforeach;?>
<?php else:?>
<p>Error en la aplicación</p>
<?php endif;?>

<br><br><br><br>


</body>
</html>
