<?= form_open('/login/recibirDatos')?>
<?php
$nombre = array(
	'name' => 'nombre',
	'placeholder'=> 'Escribe tu nombre',
);
$correo = array(
	'name' => 'correo',
	'type' => 'email',
	'placeholder'=> 'Escribe tu correo',
);
$password = array(
	'name' => 'password',
	'type' => 'password',
	'placeholder'=> 'Escribe tu contraseña',
);
?>
<?= form_label('Nombre:','nombre')?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Correo:','correo')?>
<?= form_input($correo) ?>
<br>
<?= form_label('Password:','password')?>
<?= form_input($password) ?>
<br>
<?= form_submit('','Guardar') ?>
<?= form_close()?>

</body>
</html>
