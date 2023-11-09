<?php
require_once 'Model/persona.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Venta();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/persona.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Venta();
        
        if(isset($_REQUEST['id_venta'])){
            $alm = $this->model->getting($_REQUEST['id_venta']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Venta();
        
        $alm->id_venta = $_REQUEST['id_venta'];
        $alm->id_articulo = $_REQUEST['id_articulo'];
        $alm->tipotarjeta = $_REQUEST['tipotarjeta'];
        $alm->nip = $_REQUEST['nip'];
        $alm->id_sucursal = $_REQUEST['id_sucursal'];
        $alm->cantidadpagar = $_REQUEST['cantidadpagar'];
        $alm->id_cliente = $_REQUEST['id_cliente'];
        $alm->id_empleado = $_REQUEST['id_empleado'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->id_venta > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_venta']);
        header('Location: index.php');
    }
}
