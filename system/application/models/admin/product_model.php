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
                ->result()
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
    function deleteById($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('products');
        return $query;
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




}