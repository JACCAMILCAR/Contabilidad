<?php
 	class Conexion
	{
		private static $conexion;
		
		public static function abrirConexion()
		{
			if(!isset(self::$conexion))
			{
				try{
					include_once './conf.php';
					self::$conexion = new PDO('pgsql:host='.Nombre_Servidor.'; dbname='.BASE_DE_DATOS,NOMBRE_USUARIO,PASSWORD);
					//self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ATTR_EXCEPTION);
					self::$conexion->exec("SET NAMES 'utf8'");

				}

				catch(PDOException $ex){
					print "ERROR". $ex->getMessage()."<br>";

				}
			}
		}
		public static function cerrarCorrecion()
		{
			if(isset(self::$conexion))
			{
				self::$conexion =null;
			}

		}
	   public static function obtenerConexion()
	   {
		if(isset(self::$conexion))
		{
			echo "Conexion Establecida";
		}
		else
		{
			echo "No se pudo conectar con la base de datos";
		}
	   }
	}
	conexion::abrirConexion();
	conexion::obtenerConexion();
 ?>
