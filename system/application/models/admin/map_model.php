<?php
class Map_model extends Model {

    function getMapText() {
        return $this->db
                ->get('map')
                ->row();
    }
    function save($data) {
        $this->db->insert('map_city',$data);
    }
    function getById($id) {
        
        return $this->db
                ->select('')
                ->from('map_city')
                ->where('id',$id)
                ->get()
                ->row();
    }
    function getCityMapBySlug($slug) {
        return $this->db->select()
                ->from('map_city')
                ->where('city',$slug)
                ->get()
                ->row();
    }
    function getAllCities() {
        return $this->db->select()
                ->from('map_city')
                ->get()
                ->result();
    }
    function updateById($data,$id) {
        $this->db
                ->where('id', $id)
                ->update('map_city', $data);

    }
    function deleteById($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('map_city');
        return $query;
    }


}