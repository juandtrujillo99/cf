<?php

Conexion::abrir_conexion();

$id_empleado = $_SESSION['id_empleado'];


if (isset($_POST['guardar-nombre'])) {
	$nombre = $_POST['nombre'];

	if (isset($nombre)&&!empty($nombre)) {
		$nombre_actualizado = RepositorioEmpleado::actualizar_nombre(Conexion::obtener_conexion(), $id_empleado, $nombre);
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
			El cambio se realizó correctamente.
		</p>
		<?php
	}	
	else{//informar error
		return;
	}
}
if (isset($_POST['guardar-cedula'])) {
	$cedula = $_POST['cedula'];	
	if (isset($cedula)&&!empty($cedula)) {
		$cedula_actualizado = RepositorioEmpleado::actualizar_cedula(Conexion::obtener_conexion(), $id_empleado, $cedula);
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
			El cambio se realizó correctamente.
		</p>
		<?php
	}
	else{//informar error
		return;
	}
}
if (isset($_POST['guardar-bio'])) {
	$bio = $_POST['bio'];	
	if (isset($bio)&&!empty($bio)) {
		$bio_actualizado = RepositorioEmpleado::actualizar_bio(Conexion::obtener_conexion(), $id_empleado, $bio);
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
			El cambio se realizó correctamente.
		</p>
		<?php
	}
	else{//informar error
		return;
	}
}

if (isset($_POST['guardar-email'])) {
	$email = $_POST['email'];	
	if (isset($email)&&!empty($email)) {
		$email_actualizado = RepositorioEmpleado::actualizar_email(Conexion::obtener_conexion(), $id_empleado, $email);
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
			El cambio se realizó correctamente.
		</p>
		<?php
	}
	else{//informar error
		return;
	}
}
if (isset($_POST['guardar-clave'])) {
	$clave_cifrada = password_hash($_POST['clave'], PASSWORD_DEFAULT);
	if (isset($clave_cifrada)&&!empty($clave_cifrada)) {
		$clave_actualizada = RepositorioEmpleado::actualizar_password(Conexion::obtener_conexion(), $id_empleado, $clave_cifrada);
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
			El cambio se realizó correctamente.
		</p>
		<?php
	}
	else{//informar error
		return;
	}
}
if (isset($_POST['guardar-telefono'])) {
	$telefono = $_POST['telefono'];	
	if (isset($telefono)&&!empty($telefono)) {
		$telefono_actualizado = RepositorioEmpleado::actualizar_telefono(Conexion::obtener_conexion(), $id_empleado, $telefono);
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
			El cambio se realizó correctamente.
		</p>
		<?php
	}
	else{//informar error
		return;
	}
}



Conexion::cerrar_conexion();