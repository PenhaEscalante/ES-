<?php
class Model_Podcast extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->query("SELECT p.id_empresa, p.id_podcasts, e.nombre, p.url_podcasts, p.img_podcasts, p.fecha, p.descripcion FROM podcasts p JOIN empresa e on (p.id_empresa = e.id_empresa)");
        return $query->result();
    }

    function insertPodcast($data){
        $this->db->insert('podcasts', $data);
        return true;
    }

    function updatePodcast($id_podcasts, $data){
        $this->db->where('id_podcasts', $id_podcasts);
        return $this->db->update('podcasts', $data);
    }

    function deletePodcast($id_podcasts){
        $this->db->where('id_podcasts', $id_podcasts);
        return $this->db->delete('podcasts');
    }
}