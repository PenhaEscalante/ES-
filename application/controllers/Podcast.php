<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Podcast extends REST_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_Podcast');
    }

    //Obtiene todos los registros
    public function index_get(){
        $data = $this->Model_Podcast->getAll();

        if(!empty($data)){
            $this->response($data, 200);
        }else{
            $this->response("No se encontraron registros", 404);
        }
    }
    //Obtiene un registro
    public function find_get(){
        $id = $this->uri->segment(2);

        if(!$id){
            $this->response("Registro no encontrado", 400);
        }

        $item = $this->Model_Podcast->getPodcast($id);

        if(!empty($item)){
            $this->response($item, 200);
        }else{
            $this->response(array("Registro no encontrado"), 404);
        }
    }
    //Inserta un nuevo registro
    public function index_post(){
        if(empty($this->post())){
            $this->$this->response("Error al ingresar el registro", 404);
        }

        $data = $this->post();

        $item = $this->Model_Podcast->insertPodcast($data);

        if($item){
            $this->response("Podcast creado correctamente", 201);
        }else{
            $this->$this->response("Error al ingresar el registro", 400);
        }
    }
    //Edita un registro
    public function index_put(){
        $id = $this->uri->segment(2);

        if(empty($this->put()) || is_null($id)){
            $this->$this->response("Error al actualizar el registro", 404);
        }

        $item = $this->Model_Podcast->getPodcast($id);

        if($item == null){
            $this->response("Registro no encontrado", 404);
        }

        $data = $this->put();
        
        if($this->Model_Podcast->updatePodcast($id, $data)){
            $this->response("Podcast actualizado correctamente", 200);
        }else{
            $this->$this->response("Error al actualizar el registro", 404);
        }
    }
    //Elimina un registro
    public function index_delete($id){
        $id = $this->uri->segment(2);

        if(empty($id)){
            $this->$this->response("Error al eliminar el registro", 404);
        }

        $item = $this->Model_Podcast->getPodcast($id);

        if($item == null){
            $this->response("Registro no encontrado", 404);
        }
        
        if($this->Model_Podcast->deletePodcast($id)){
            $this->response("Podcast eliminado correctamente", 200);
        }else{
            $this->$this->response("Error al eliminar el registro", 404);
        }
    }
}
