<?php

class Pages extends Controller {

    function Pages() {
        parent::Controller();
    }
    function index() {
        $this->load->model('admin/product_model','',true);
        $this->load->model('admin/category_art_model','',true);
        $this->load->model('admin/article_model','',true);
        $data['template']='/client/main/index';
        $articles_cats=$this->category_art_model->getAll();
        foreach ($articles_cats as $cat) {
            $article[$cat['name']]=$this->article_model->getByCatId($cat['id']);
        }
        $data['articles_f']=$article;
        $data['products_fav']=$this->product_model->getAll();
        $this->load->view('/client/main',$data);
    }


}
