<?php

class Collection extends Controller {

    function Collection() {
        parent::Controller();
        $this->load->model('admin/product_model','',true);
        $this->load->model('admin/parametrs_model','',true);
        $this->load->model('admin/category_art_model','',true);
        $this->load->model('admin/article_model','',true);

    }
    function index() {
        $this->load->model('admin/seo_model','',true);
        $data['template']='client/collection/index';
        $data['title']='Обручалочка';
        $data['products']=$this->product_model->getAll();
        $data['metals']=$this->parametrs_model->getAllByParametr('metals');
        $data['colors']=$this->parametrs_model->getAllByParametr('colors');
        $data['rocks']=$this->parametrs_model->getAllByParametr('rocks');
        $articles_cats=$this->category_art_model->getAll();
        foreach ($articles_cats as $cat) {
            $article[$cat['name']]=$this->article_model->getByCatId($cat['id']);
        }
        $data['articles_f']=$article;
        $this->load->view('/client/main',$data);
    }
//    function showTopProducts() {
//        $catId=$this->input->post('cat_id');
//        $page=$this->input->post('page');
//        $topProducts=$this->catalog_model->getTopProducts($page,$catId);
//        $topProducts=json_encode($topProducts);
//        echo $topProducts;
//
//    }


}
