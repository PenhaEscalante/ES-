<?php
class Model_Productos extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->query("SELECT * FROM producto");
        return $query->result();
    }

    function getProducto($id_podcast){
        $query = $this->db->query("SELECT * FROM producto");
        return $query->result();
    }

    function insertProducto($data){
        $this->db->insert('producto', $data);

        if($this->db->affected_rows() > 0){
            return true;
        }
        return false;
    }

    function updateProducto($id_productos, $data){
        $this->db->where('id_producto', $id_productos);
        return $this->db->update('producto', $data);
    }

    function deleteProducto($id_productos){
        $this->db->where('id_producto', $id_productos);
        return $this->db->delete('producto');
    }
}