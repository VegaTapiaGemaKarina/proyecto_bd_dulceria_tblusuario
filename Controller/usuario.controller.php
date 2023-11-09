<?php
require_once 'Model/persona.php';

class usuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new usuario();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/persona.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new usuario();
        
        if(isset($_REQUEST['idusuario'])){
            $alm = $this->model->getting($_REQUEST['idusuario']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new usuario();
        
        $alm->idusuario = $_REQUEST['idusuario'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apaterno = $_REQUEST['Apaterno'];
        $alm->Amaterno = $_REQUEST['Amaterno'];
        $alm->Pass= $_REQUEST['Pass'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->celular = $_REQUEST['celular'];
        $alm->email= $_REQUEST['email'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idusuario > 0 
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
        $this->model->Eliminar($_REQUEST['idusuario']);
        header('Location: index.php');
    }
}
