<?php

class News_model extends Model {
    
    function get_all() {
        $this->db->select('*')
                ->from('news');
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_pager($page, $one_page_list) {
        $this->db->select('*')
                ->from('news')
                ->orderby("date_create", "desc")
                ->limit($one_page_list, $page);
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_one($id) {
        $this->db->select('*, DATE_FORMAT(date_create, "%d/%m/%Y") AS date_create',false)
                ->from('news')
                ->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function delete($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('news');
        return $query;
    }
    
    function save($result) {
        $data = array(
            'title'=>$result['title'],
            'shot_description'=>$result['des'],
            'text'=>$result['text'],
            'date_create'=>$result['date']
        );
        $query = $this->db->insert('news', $data);
        return $query;
    }
    
    function update($result) {
        $data = array(
            'title'=>$result['title'],
            'shot_description'=>$result['des'],
            'text'=>$result['text'],
        );
        $query = $this->db->update('news', $data, array('id' => $result['id']));
        return $query;
    }

    function count_news() {
        $query = $this->db->count_all_results('news');
        return $query;
    }
}

?>
