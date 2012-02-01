<?php
class Parametrs_model extends Model {

    function getAllByParametr($parametr) {
       return $this->db
                ->select()
                ->from($parametr)
                ->get()->result_array();
    }
    function saveByParametr($parametr,$data) {
        $this->db->insert($parametr,$data);
    }
    function getByParametrById($parametr,$id) {
       return $this->db->select()
                ->from($parametr)
                ->where('id',$id)
                ->get()->result_array();
    }
    function updateByParametrById($parametr,$data,$id) {
        return $this->db->where('id', $id)->update($parametr, $data);

    }
    function deleteByParametrById($parametr,$id) {
       return $this->db->where('id', $id)->delete($parametr);
    }






}
?>
