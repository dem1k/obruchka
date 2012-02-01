<?php
class article_model extends Model {

    function getAll() {
        return $this->db
                ->get('articles')
                ->result_array();
    }
    function save($data) {
        $this->db->insert('articles',$data);
    }
    function getById($id) {
        return $this->db
                ->select('')
                ->from('articles')
                ->where('id',$id)
                ->get()
                ->result_array();
    }
    function updateById($data,$id) {
        $this->db
                ->where('id', $id)
                ->update('articles', $data);

    }
    function deleteById($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('articles');
        return $query;
    }

    function getLast($limit){
        return $this->db
                ->select()
                ->from('articles')
                ->order_by("id", "desc")
                ->limit($limit)
                ->get()
                ->result_array();
    }
    function getByCategory($category_art,$limit){
        return $this->db
                ->select('id,name,slug,cut,image2')
                ->from('articles')
                ->where('category_art',$category_art)
                ->order_by("id", "desc")
                ->limit($limit)
                ->get()
                ->result_array();
    }

}