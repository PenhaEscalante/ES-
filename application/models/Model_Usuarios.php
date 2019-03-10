<?php
class Model_Usuarios extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->query("SELECT * FROM usuarios");
        return $query->result();
    }

    function getUsuario($id_podcast){
        $query = $this->db->query("SELECT * FROM usuarios");
        return $query->result();
    }

    function insertUsuario($data){
        $this->db->insert('usuarios', $data);

        if($this->db->affected_rows() > 0){
            return true;
        }
        return false;
    }

    function updateUsuario($id_usuarios, $data){
        $this->db->where('id_usuarios', $id_usuarios);
        return $this->db->update('usuarios', $data);
    }

    function deleteUsuario($id_usuarios){
        $this->db->where('id_usuarios', $id_usuarios);
        return $this->db->delete('usuarios');
    }
}