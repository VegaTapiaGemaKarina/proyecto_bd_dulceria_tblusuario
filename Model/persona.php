<?php
class usuario
{
	private $pdo;
    
    public $idusuario;
    public $Nombre;
    public $Apaterno;
    public $Amaterno;
    public $Pass;
    public $direccion;
	public $celular;
	public $email;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idusuario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE idusuario = ?");
			          

			$stm->execute(array($idusuario));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idusuario)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuario WHERE idusuario = ?");			          

			$stm->execute(array($idusuario));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET 
						Nombre          = ?, 
						Apaterno        = ?,
                        Amaterno        = ?,
						Pass        = ?,
						direccion            = ?, 
						celular            = ?, 
						email= ?
				    WHERE idusuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Apaterno,
                        $data->Amaterno,
                        $data->Pass,
                        $data->direccion,
						$data->celular,
						$data->email,
                        $data->idusuario
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `usuario` (Nombre,Apaterno,Amaterno,Pass,direccion,celular,email) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre, 
                    $data->Apaterno,
                    $data->Amaterno,
                    $data->Pass,
					$data->direccion,
					$data->celular,
                    $data->email               
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
