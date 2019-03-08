<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Podcast extends REST_Controller {
    public function __construct(){
        parent::__construct();
    }

    //Obtiene todos los registros
    public function index_get()
    {
    }
    //Obtiene un registro
    public function find_get($id){

    }
    //Inserta un nuevo registro
    public function index_post($data){

    }
    //Edita un registro
    public function index_put($data_usuario){

    }
    //Elimina un registro
    public function index_delete($id){

    }
}
