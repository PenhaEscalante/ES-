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
    public function index_get()
    {
        $array = $this->Model_Podcast->getAll();
        $this->response($array);
    }
    //Obtiene un registro
    public function find_get($id){

    }
    //Inserta un nuevo registro
    public function index_post($data){

    }
    //Edita un registro
    public function index_put($data_podcast){

    }
    //Elimina un registro
    public function index_delete($id){

    }
}
