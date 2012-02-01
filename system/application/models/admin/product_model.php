<?php

class Product_model extends Model {

    function getCollections() {
        return $this->db->select()
                ->from('collections')
                ->order_by('id', 'asc')
                ->get()
                ->result_array()
        ;
    }
    function getClasses() {
        return $this->db->select()
                ->from('classes')
                ->order_by('id', 'asc')
                ->get()
                ->result_array()
        ;
    }
    function getMetals() {
        return $this->db->select()
                ->from('metals')
                ->order_by('id', 'asc')
                ->get()
                ->result_array()
        ;
    }
    function getRocks() {
        return $this->db->select()
                ->from('rocks')
                ->order_by('id', 'asc')
                ->get()
                ->result_array()
        ;
    }
     function getRockById($id) {
        return $this->db->select()
                ->from('rocks')
                ->where('id',$id)
                ->get()
                ->row_array()
        ;
    }
    function getColors() {
        return $this->db->select()
                ->from('colors')
                ->order_by('id', 'asc')
                ->get()
                ->result_array()
        ;
    }
    function getColorsById($id) {
        return $this->db->select()
                ->from('colors')
                ->where('id',$id)
                ->get()
                ->result_array()
        ;
    }

    function getAll() {
        return $this->db->select()
                ->from('products')
                ->get()
                ->result_array()
        ;

    }
    function getById($id) {
        return $this->db->select('
            products.id as id,
            products.name as name,
            collections.name as collection,
            classes.name as class,
            metals.name as metal,
            rocks.name as rock,
            products.color1_id,
            products.color2_id,
            products.color3_id,
            products.m_art,
            products.m_weight,
            products.f_art,
            products.f_weight,
            products.new,
            products.fan,
            products.description,
            products.image_big,
            products.image_small,
            ')
                ->from('products')
                ->join('collections', 'collections.id = products.collection_id','inner')
                ->join('classes', 'classes.id = products.class_id','inner')
                ->join('metals', 'metals.id = products.metal_id','inner')
                ->join('rocks', 'rocks.id = products.rock_id','inner')
                ->where('products.id',$id)
                ->get()
                ->row_array()
        ;
    }
    function getImgById($id) {
        return $this->db->select('
            products.id as id,
            products.image_big,
            products.image_small,
            ')
                ->from('products')
                ->where('products.id',$id)
                ->get()
                ->row_array()
        ;
    }


    function save($data) {

        return $this->db
                ->insert('products', $data)
        ;
    }
    function edit($data,$id) {
        return $this->db
                ->where('products.id',$id)
                ->update('products', $data)
        ;
    }
    function checkfArt($str) {
        return  $this->db->select()
                ->from('products')
                ->where_in('f_art',$str)
                ->get()
                ->result();
    }
    function checkmArt($str) {
        return $this->db->select()
                ->from('products')
                ->where_in('m_art',$str)
                ->get()
                ->result()
        ;
    }



    function get_last_id() {
        $this->db->select('id')->from('products')->order_by('id', 'DESC')->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function get_first_id() {
        $this->db->select('id')->from('products')->order_by('id', 'asc')->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function insert_file($result) {
        $data = array(
                'product_id' => $result['product_id'],
                'path' => $result['path'],
                'name' => $result['name']
        );

        $query = $this->db->insert('img', $data);
        return $query;
    }

    function get_one($id) {
        $this->db->select('*')
                ->from('products')
                ->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_img($id) {
        $this->db->select('*')
                ->from('img')
                ->where('product_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function delete_img($id) {
        $this->db->where('product_id', $id);
        $query = $this->db->delete('img');
        return $query;
    }

    function update($result) {
        $data = array(
                'name' => $result['name'],
                'description' => $result['description'],
                'sku' => $result['sku'],
                'text' => $result['text'],
                'sort' => $result['sort'],
                'long_text' => $result['long_text'],
                'thumb' => $result['thumb'],
                'id_in_price' => $result['id_in_price']
        );
        $query = $this->db->update('product', $data, array('id' => $result['id']));
        return $query;
    }

    function delete_product($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('product');
        return $query;
    }

    function get_all_img() {
        $this->db->select('product_id, path')
                ->from('img');
        $query = $this->db->get();
        return $query->result();
    }

    function get_three() {
        $this->db->select('*')
                ->from('product')
                ->order_by('sort', 'asc');
        $q = $this->db->get();
        return $q->result();
    }

    function DeletePrice($id) {
        $this->db->delete('product_price', array('product_id' => $id));
    }

    function GetPriceId($id, $exchange_id) {
        $this->db->select('*')
                ->from('product_price')
                ->where('product_id', $id)
                ->where('currency_id', $exchange_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function getPriceById($id) {
        $this->db->select('*')
                ->from('product_price')
                ->where('product_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function GetPriceByIdAndCurrency($currency_id, $product_id) {
        $this->db->select('*')
                ->from('product_price')
                ->where('product_id', $product_id)
                ->where('currency_Id', $currency_id)
                ->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    }

    function GetPrice() {
        $this->db->select('*')
                ->from('product_price');
        $query = $this->db->get();
        return $query->result_array();
    }

}