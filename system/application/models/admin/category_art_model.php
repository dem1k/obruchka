<?php
class Category_art_model extends Model {

    function getAll() {
        return $this->db
                ->select('')
                ->from('category_art')
                ->get()
                ->result_array();
    }
//    function save($data) {
//        $this->db->insert('collections',$data);
//    }
    function getById($id) {
        return $this->db->select('')
                ->from('category_art')
                ->where('id',$id)
                ->get()
                ->result_array();
    }
    function updateById($data,$id) {
        $this->db->where('id', $id);
        $this->db->update('category_art', $data);

    }
//    function deleteById($id) {
//        $this->db->where('id', $id);
//        $query = $this->db->delete('collections');
//        return $query;
//    }




}