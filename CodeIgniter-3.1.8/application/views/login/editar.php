
<h2>Actualizar</h2>
<?php
if($usuarios) {
foreach ($usuarios->result() as $usuario) { ?>

<?= form_open('/login/actualizar/'.$id)?>
<?php
$nombre = array(
	'name' => 'nombre',
	'placeholder'=> 'Escribe tu nombre',
	'value' => $usuarios->result()[0]->nombre

);
$correo = array(
	'name' => 'correo',
	'type' => 'email',
	'placeholder'=> 'Escribe tu correo',
	'value' => $usuarios->result()[0]->correo

);
$password = array(
	'name' => 'password',
	'type' => 'password',
	'placeholder'=> 'Escribe tu contraseña',
	'value' => $usuarios->result()[0]->password

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
<?= form_submit('','Actualizar') ?>
<?= form_close()?>


<?php }
}else{
	echo "<p>Error en la aplicacion</p>";

}
?>
</body>
</html>
