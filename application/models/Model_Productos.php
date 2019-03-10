<?php
class Model_Productos extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->query("SELECT * FROM productos");
        return $query->result();
    }

    function getProducto($id_podcast){
        $query = $this->db->query("SELECT * FROM productos");
        return $query->result();
    }

    function insertProducto($data){
        $this->db->insert('productos', $data);

        if($this->db->affected_rows() > 0){
            return true;
        }
        return false;
    }

    function updateProducto($id_productos, $data){
        $this->db->where('id_productos', $id_productos);
        return $this->db->update('productos', $data);
    }

    function deleteProducto($id_productos){
        $this->db->where('id_productos', $id_productos);
        return $this->db->delete('productos');
    }
}