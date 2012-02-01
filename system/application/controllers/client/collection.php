<?php

class Collection extends Controller {

    function Collection() {
        parent::Controller();
        $this->load->model('admin/product_model','',true);
        $this->load->model('admin/parametrs_model','',true);

    }
    function index() {
        $this->load->model('admin/seo_model','',true);
        $data['template']='client/collection/index';
        $data['title']='Обручалочка';
        $data['products']=$this->product_model->getAll();
        $data['metals']=$this->parametrs_model->getAllByParametr('metals');
        $data['colors']=$this->parametrs_model->getAllByParametr('colors');
        $data['rocks']=$this->parametrs_model->getAllByParametr('rocks');
        $this->load->view('/client/main',$data);
    }
    function topOfSubsection() {
        $seo=$this->seo_model->getseo();
        $data['seo']=$seo[0];
        $catId=$this->uri->segment(3);
        $pageNo=$this->uri->segment(4);
        $data['template']='client/catalog/subsections_top';
        $data['categories'] = $this->catalog_model->getCatalog();
        $data['subsections']= $this->catalog_model->getAllSubsections();
        $data['catId']=$catId;
        $data['topProducts']=$this->catalog_model->getTopProducts('1',$catId);
        $this->load->view('/client/main',$data);
    }

    function subsection() {
        $subId=$this->uri->segment(3);
        $totalpages=$this->catalog_model->getSubsectionPages($subId);
        $seo=$this->seo_model->getseo();
        $data['seo']=$seo[0];
        if($this->uri->segment(4))$page=$this->uri->segment(4);
        else $page=1;

        $subsections=$this->catalog_model->getSubById($subId);
        $data['catId']=$subsections[0]['cat_id'];
        $data['template']='client/catalog/subsections';
        $data['categories'] = $this->catalog_model->getCatalog();
        $data['subsections']= $this->catalog_model->getAllSubsections();
        $data['products']=$this->catalog_model->getProductBySubId($page,$subId);
        $data['page']=$page;
        $data['totalpages']=$totalpages;


        $this->load->view('/client/main',$data);
    }

    function showTopProducts() {
        $catId=$this->input->post('cat_id');
        $page=$this->input->post('page');
        $topProducts=$this->catalog_model->getTopProducts($page,$catId);
        $topProducts=json_encode($topProducts);
        echo $topProducts;

    }

    function showSubsectionProducts() {
        $subId=$this->input->post('sub_id');
        $page=$this->input->post('page');
        $products=$this->catalog_model-> getProductBySubId($page,$subId);
        $products=json_encode($products);
        echo $products;

    }

    function subsectionPages() {
        $subId=$this->input->post('sub_id');
        $pages=$this->catalog_model->getSubsectionPages($subId);
        $pages=json_encode($pages);
        echo $pages;

    }

}
