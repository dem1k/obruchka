<?php

class Pages extends Controller {

    function Pages() {
        parent::Controller();
    }
    function index() {
         $this->load->model('admin/product_model','',true);
        $data['template']='/client/main/index';
        $data['products_fav']=$this->product_model->getAll();
        $this->load->view('/client/main',$data);
    }


}
