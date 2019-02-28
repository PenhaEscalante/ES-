<?php
class Home extends CI_Controller{
   public function index(){
      $data['contenido'] = "home";
      $this->load->view('Plantilla/masterPage',$data);
   }
}

?>
