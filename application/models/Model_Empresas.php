<?php
class Model_Empresas extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->query("SELECT * FROM empresa");
        return $query->result();
    }

    function getEmpresa($id_empresa){
        $query = $this->db->query("SELECT * FROM empresa Where id_empresa = ".$id_empresa);
        return $query->result();
    }

    function insertEmpresa($data){
        //$this->db->insert('empresa', $data);
        $this->db->set($this->$_setEmpresa($data))->insert('empresa');

        if($this->db->affected_rows() == 1){
            return true;
        }
        return false;
    }

    function updatePodcast($id_empresa, $data){
        $this->db->where('id_empresa', $id_empresa);
        return $this->db->update('empresa', $data);
    }

    function deletePodcast($id_empresa){
        $this->db->where('id_empresa', $id_empresa);
        return $this->db->delete('empresa');
    }
}