<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Empresas extends REST_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_Empresas');
    }

    //Obtiene todos los registros
    public function index_get(){
        $data = $this->Model_Empresas->getAll();

        if(!empty($data)){
            $this->response($data, 200);
        }else{
            $this->response("No se encontraron registros", 404);
        }
    }

    //Obtiene un registro
    public function find_get($id){
        if(!$id){
            $this->response(null, 400);
        }

        $item = $this->Model_Empresas->getEmpresa($id);

        if(!empty($item)){
            $this->response($item, 200);
        }else{
            $this->response(array("Registro no encontrado"), 404);
        }
    }
    //Inserta un nuevo registro
    public function index_post(){
        

        $item = $this->Model_Empresas->insertEmpresa($data);

        if(!is_null($item)){
            $this->response($item, 200);
        }else{
            $this->$this->response("Error al ingresar el registro", 400);
        }
    }
    //Edita un registro
    public function index_put($data_empresa){

    }
    //Elimina un registro
    public function index_delete($id){

    }
}
