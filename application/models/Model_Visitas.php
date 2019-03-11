<?php
class Model_Visitas extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->query("SELECT e.nombre, COUNT(*) as 'Total' FROM visita v JOIN empresa e ON (e.id_empresa = v.id_empresa) GROUP BY v.id_empresa ORDER BY Total DESC");
        //$query = $this->db->query("SELECT * FROM visita");
        return $query->result();
    }

    function insertEmpresa($data){
        $this->db->insert('visita', $data);

        if($this->db->affected_rows() > 0){
            return true;
        }
        return false;
    }
}