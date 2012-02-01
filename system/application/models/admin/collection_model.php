<?php
class Collection_model extends Model {

    function getAll() {
        $q =$this->db
                ->select('')
                ->from('collections')->get();
        return $q->result_array();
    }
    function save($data) {
        $this->db->insert('collections',$data);
    }
    function getById($id) {
        $q = $this->db->select('')
                ->from('collections')
                ->where('id',$id)
                ->get()
        ;
        return $q->result_array();
    }
    function updateById($data,$id) {
        $this->db->where('id', $id);
        $this->db->update('collections', $data);

    }
    function deleteById($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('collections');
        return $query;
    }







    function getProductsByCollectionId($id) {
        $q =$this->db
                ->select('')
                ->from('products')
                ->where('collection_id',$id)
                ->get();
        return $q->result_array();
    }

    function getCatById($id) {
        $this->db->select('')
                ->from('category')
                ->where('id',$id);
        $q = $this->db->get();
        return $q->result_array();
    }
    function getSubById($id) {
        $this->db->select('')
                ->from('subsection')
                ->where('id',$id);
        $q = $this->db->get();
        return $q->result_array();
    }
    function createCatalogSubsection($data) {
        $this->db->insert('subsection',$data);
    }
    function getCatalogSubsections($cat_id) {
        $this->db->select('')
                ->from('subsection')
                ->where('cat_id',$cat_id);
        $q = $this->db->get();
        return $q->result_array();
    }

    function getSubsectionProducts($subsectionId) {
        $this->db->select('')
                ->from('products')
                ->where('subsection_id',$subsectionId);
        $q = $this->db->get();
        return $q->result_array();
    }
    function createProduct($data) {
        $this->db->insert('products',$data);
    }
    function editProduct($data,$productId) {
        $this->db->where('id', $productId);
        $this->db->update('products', $data);

    }
    function deleteProduct($productId) {
        $this->db->where('id', $productId);
        $this->db->delete('products');

    }

    function getProductById($productId) {
        $this->db->select('')
                ->from('products')
                ->where('id',$productId);
        $q = $this->db->get();
        return $q->result_array();
    }
    function getProductBySubId($page,$subId) {
        $this->db->select('')
                ->from('products')
                ->where('subsection_id',$subId)
                ->limit(12,($page-1)*12);
        $q = $this->db->get();
        return $q->result_array();
    }
    function getTopProducts($page,$catId) {
        $this->db->select('
            subsection.id as sub_id,
            subsection.name as sub_name,
            products.id as product_id,
            products.name as product_name,
            products.image product_image,
            products.description as product_description')
                ->from('products')
                ->join('subsection', 'subsection.id = products.subsection_id')
                ->where('top','1')
                ->where('cat_id',$catId)
                ->limit(12,$page-1)
        ;
        $q = $this->db->get();
        return $q->result_array();
    }
    function getSubsectionPages($subId) {

        $this->db->select('')
                ->from('products')
                ->where('subsection_id',$subId)
        ;
        $q = $this->db->count_all_results();
        return $q;
    }
}
?>
