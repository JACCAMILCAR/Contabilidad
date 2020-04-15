<?php 

class BuscadorInventario
	{
	    	private $conexion;

			function __construct()
			{
				$this->conexion =  new Conectar();
	        }
	        public function listaEmpleadosModif($idEmpleado)
			{
					$sqlListaEmpleado = "
					SELECT *
					FROM Empleado 
					WHERE idEmpleado = :idEmpleado ;
										";
					$cmd = $this->conexion->prepare($sqlListaEmpleado);
					$cmd->bindParam(':idEmpleado', $idEmpleado);
					$cmd->execute();
					$listaEmpleadoDeLaConsulta = $cmd->fetchAll();
		            
					$listaEmpleado = 	array();
					$i = 0;
		          	
		            foreach($listaEmpleadoDeLaConsulta as $regEmpleado){
			            	  $objetoEmpleado = new Empleado();		
			            	 
				              $objetoEmpleado->setidEmpleado($regEmpleado['idEmpleado']);
							  $objetoEmpleado->setidCargo($regEmpleado['idCargo']);
							  $objetoEmpleado->setidEstadoCivil($regEmpleado['idEstadoCivil']);
							  $objetoEmpleado->setci($regEmpleado['ci']);
							  $objetoEmpleado->setprimerNombre($regEmpleado['primerNombre']);
							  $objetoEmpleado->setsegundoNombre($regEmpleado['segundoNombre']);
							  $objetoEmpleado->setapellidoPaterno($regEmpleado['apellidoPaterno']);
							  $objetoEmpleado->setapellidoMaterno($regEmpleado['apellidoMaterno']);
							  $objetoEmpleado->setfechaNacimiento($regEmpleado['fechaNacimiento']);
							  $objetoEmpleado->setcodeRFID($regEmpleado['codeRFID']);
							  $objetoEmpleado->setgenero($regEmpleado['genero']);
							  $objetoEmpleado->setfotografia($regEmpleado['fotografia']);
							  $objetoEmpleado->setnumeroCelular($regEmpleado['numeroCelular']);
							  $objetoEmpleado->setnumeroFijo($regEmpleado['numeroFijo']);
							  $objetoEmpleado->setusuario($regEmpleado['usuario']);
							  $objetoEmpleado->setcontrasenia($regEmpleado['contrasenia']);
							  $objetoEmpleado->setactivo($regEmpleado['activo']);

							  $listaEmpleado[$i] = $objetoEmpleado;
							  $i++;
				    }
					return $listaEmpleado;
			}
			//end function

    }
?>
