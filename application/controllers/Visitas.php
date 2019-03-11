<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Visitas extends REST_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_Visitas');
    }

    //Obtiene todos los registros
    public function index_get(){
        $data = $this->Model_Visitas->getAll();

        if(!empty($data))
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response("No se encontraron registros", 404);
        }
    }

    //Inserta un nuevo registro
    public function index_post(){

        if(empty($this->post())){
            $this->$this->response("Error al ingresar el registro", 404);
        }

        $data = $this->post();

        $item = $this->Model_Visitas->insertEmpresa($data);

        if($item){
            $this->response("Empresa creada correctamente", 201);
        }else{
            $this->$this->response("Error al ingresar el registro", 400);
        }
    }
}