<?php


//RepositorioEmpleado: esta encargada de saber cuales y cuantos empleados hay registrados en la base de datos 
class RepositorioEmpleado{
	public static function obtener_todos($conexion){
		$empleados = array();
		if (isset($conexion)){
			try{
				include_once 'Empleado.inc.php';
				$sql = "SELECT * FROM empleados";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();

				if (count($resultado)){
					foreach ($resultado as $fila) {
						$empleados[] = new Empleado(
							$fila['id'], $fila['cedula'], $fila['nombre'], $fila['bio'], $fila['telefono'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila['activo']
						);
					}
				} else{
					print 'No hay empleados';
				}

			} catch(PDOException $ex){
				print "ERROR" . $ex -> getMessage();
			}
		}

		return $empleados;
	}
	//obtener_numero_empleados: esta encargada de contar el numero de empleados que hay registrados en la base de datos 
	public static function obtener_numero_empleados($conexion){
		$total_empleados = null;
		if (isset($conexion)){
			try{
				$sql = "SELECT COUNT(*) as total FROM empleados";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetch();

				$total_empleados = $resultado['total'];
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $total_empleados;
	}

	//insertar_empleado: esta encargada de agregar nuevos empleados a la base de datos
	public static function insertar_empleado($conexion, $empleado){
		$empleado_insertado = false;
		if (isset($conexion)) {
			try{
				$sql = "INSERT INTO empleados(cedula, nombre, bio, telefono, email, password, fecha_registro, activo) VALUES(:cedula, :nombre, :bio, :telefono, :email, :password, NOW(), 0)";

				$sentencia = $conexion -> prepare($sql);

				$sentencia->bindParam(':cedula', $empleado -> obtener_cedula(), PDO::PARAM_STR);
				$sentencia->bindParam(':nombre', $empleado -> obtener_nombre(), PDO::PARAM_STR);
				$sentencia->bindParam(':bio', $empleado -> obtener_bio(), PDO::PARAM_STR);
				$sentencia->bindParam(':telefono', $empleado -> obtener_telefono(), PDO::PARAM_STR);
				$sentencia->bindParam(':email', $empleado -> obtener_email(), PDO::PARAM_STR);
				$sentencia->bindParam(':password', $empleado -> obtener_password(), PDO::PARAM_STR);

				$empleado_insertado = $sentencia -> execute();
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex->getMessage();
			}
		}
		return $empleado_insertado;
	}

	//cedula_existe: esta encargada de verificar que el cedula de empleado no se repite en la base de datos
	public static function cedula_existe($conexion, $cedula){

		$cedula_existe = true;

		if (isset($conexion)) {
			try{
				$sql = "SELECT * FROM empleados WHERE cedula = :cedula";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':cedula', $cedula, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					$cedula_existe = true;					
				}
				else{
					$cedula_existe = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $cedula_existe;
	}



	//email_existe: esta encargada de verificar que los correos no se repitan en la base de datos (un email puede ser utilizado solo una vez por empleado)
	public static function email_existe($conexion, $email){
		$email_existe = true;
		if (isset($conexion)) {
			try{
				$sql = "SELECT * FROM empleados WHERE email = :email";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					$email_existe = true;					
				}
				else{
					$email_existe = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $email_existe;
	}

	//obtener_empleado_por_email: ayuda a identificar a cada empleado con su email
	public static function obtener_empleado_por_email($conexion, $email){
		$empleado = null;
		if (isset($conexion)){
			try{
				include_once 'Empleado.inc.php';

				$sql = "SELECT * FROM empleados WHERE email = :email";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetch();

				if (!empty($resultado)) {
					$empleado = new Empleado($resultado['id'],
						$resultado['cedula'],
						$resultado['nombre'],
						$resultado['bio'],
						$resultado['telefono'],
						$resultado['email'],
						$resultado['password'],
						$resultado['fecha_registro'],
						$resultado['activo']);
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $empleado;
	}

	//obtener_empleado_por_id: ayuda a identificar a cada empleado con su id
	public static function obtener_empleado_por_id($conexion, $id){
		$empleado = null;
		if (isset($conexion)){
			try{
				include_once 'Empleado.inc.php';

				$sql = "SELECT * FROM empleados WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':id', $id, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetch();

				if (!empty($resultado)) {
					$empleado = new Empleado($resultado['id'],
						$resultado['cedula'],
						$resultado['nombre'],
						$resultado['bio'],
						$resultado['telefono'],
						$resultado['email'],
						$resultado['password'],
						$resultado['fecha_registro'],
						$resultado['activo']);
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $empleado;
	}
	
	//obtener_empleado_por_cedula: ayuda a identificar a cada empleado con su cedula
	public static function obtener_empleado_por_cedula($conexion, $cedula){
		$empleado = null;
		if (isset($conexion)){
			try{
				include_once 'Empleado.inc.php';

				$sql = "SELECT * FROM empleados WHERE cedula = :cedula";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':cedula', $cedula, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetch();

				if (!empty($resultado)) {
					$empleado = new Empleado($resultado['id'],
						$resultado['cedula'],
						$resultado['nombre'],
						$resultado['bio'],
						$resultado['telefono'],
						$resultado['email'],
						$resultado['password'],
						$resultado['fecha_registro'],
						$resultado['activo']);
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $empleado;
	}

	





	//actualizar_nombre: ayuda a actualizar la nombre de cada usuario
	public static function actualizar_nombre($conexion, $id_empleado, $nuevo_nombre){
		$actualizacion_correcta = false;
		if (isset($conexion)) {
			try{
				$sql = "UPDATE empleados SET nombre = :nombre WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':nombre', $nuevo_nombre, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count($resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}

	//actualizar_bio: ayuda a actualizar la bio de cada usuario
	public static function actualizar_bio($conexion, $id_empleado, $nuevo_bio){
		$actualizacion_correcta = false;
		if (isset($conexion)) {
			try{
				$sql = "UPDATE empleados SET bio = :bio WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':bio', $nuevo_bio, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count($resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}

	//actualizar_cedula: ayuda a actualizar la cedula de cada usuario
	public static function actualizar_cedula($conexion, $id_empleado, $nuevo_cedula){
		$actualizacion_correcta = false;
		if (isset($conexion)) {
			try{
				$sql = "UPDATE empleados SET cedula = :cedula WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':cedula', $nuevo_cedula, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count($resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}


	//actualizar_email: ayuda a actualizar la email de cada usuario
	public static function actualizar_email($conexion, $id_empleado, $nuevo_email){
		$actualizacion_correcta = false;
		if (isset($conexion)) {
			try{
				$sql = "UPDATE empleados SET email = :email WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':email', $nuevo_email, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count($resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}

	//actualizar_password: ayuda a actualizar las contraseñas de cada empleado
	public static function actualizar_password($conexion, $id_empleado, $nueva_clave){
		$actualizacion_correcta = false;
		if (isset($conexion)) {
			try{
				$sql = "UPDATE empleados SET password = :password WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':password', $nueva_clave, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_empleado, PDO::PARAM_STR);
				
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count($resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}


	//actualizar_telefono: ayuda a actualizar la telefono de cada usuario
	public static function actualizar_telefono($conexion, $id_empleado, $nuevo_telefono){
		$actualizacion_correcta = false;
		if (isset($conexion)) {
			try{
				$sql = "UPDATE empleados SET telefono = :telefono WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':telefono', $nuevo_telefono, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count($resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}


}


