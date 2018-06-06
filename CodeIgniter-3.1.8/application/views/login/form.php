<?= form_open('/auth/logIn')?>
<?php
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

<?= form_label('Correo:','correo')?>
<?= form_input($correo) ?>
<br>
<?= form_label('Password:','password')?>
<?= form_input($password) ?>
<br>
<?= form_submit('','Entrar') ?>
<?= form_close()?>

</body>
</html>
