<?php
class Venta
{
	private $pdo;
    
    public $id_venta;
    public $id_articulo;
    public $tipotarjeta;
    public $nip;
    public $id_sucursal;
    public $cantidadpagar;
	public $id_cliente;
	public $id_empleado;

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

			$stm = $this->pdo->prepare("SELECT * FROM tbl_venta");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($id_venta)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_venta WHERE id_venta = ?");
			          

			$stm->execute(array($id_venta));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_venta)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_venta WHERE id_venta = ?");			          

			$stm->execute(array($id_venta));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_venta SET 
						id_articulo = ?, 
						tipotarjeta = ?,
                        nip = ?,
						id_sucursal = ?, 
						cantidadpagar = ?,
						id_cliente = ?,
						id_empleado = ?
				    WHERE id_venta = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_articulo, 
                        $data->tipotarjeta,
                        $data->nip,
                        $data->id_sucursal,
                        $data->cantidadpagar,
						$data->id_cliente,
                        $data->id_empleado,
						$data->id_venta,
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
		$sql = "INSERT INTO `tbl_venta` (id_articulo, tipotarjeta, nip, id_sucursal, cantidadpagar, id_cliente, id_empleado) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_articulo, 
                    $data->tipotarjeta,
                    $data->nip,
                    $data->id_sucursal,
                    $data->cantidadpagar,
					$data->id_cliente,
					$data->id_empleado
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
