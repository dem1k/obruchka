<?php
class Seo_model extends Model {

    function getSeo() {
        $q = $this->db->get('seo');
        return $q->result();
    }

    function updateSeo($data) {
        $q = $this->db->update('seo', $data);
        return $q;
    }

}


?>
