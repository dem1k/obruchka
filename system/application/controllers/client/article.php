<?php
class Article extends Controller {
    function Article() {
        parent::Controller();
        $this->load->model('admin/article_model','',true);
        $this->load->model('admin/category_art_model','',true);
        $this->load->model('admin/seo_model','',true);
        $this->load->helper('url');
    }
    function index() {
        $data['template']='client/article/index';
        $last_article=$this->article_model->getLast(1);
        $data['last_article']=$last_article[0];
        $data['theme_articles']=$this->article_model->getByCategory($last_article[0]['category_art'],3);
        $articles_cats=$this->category_art_model->getAll();
        foreach ($articles_cats as $cat) {
            $article[$cat['name']]=$this->article_model->getByCatId($cat['id']);
        }
        $data['articles_f']=$article;
        $this->load->view('/client/main',$data);
    }
    function show() {
        if(!$slug=$this->uri->segment(2)) {
            show_404();
        }
        if(!$data['article']=$this->article_model->getBySlug($slug)) {
            show_404();
        }
        $data['template']='client/article/show';
        $articles_cats=$this->category_art_model->getAll();
        foreach ($articles_cats as $cat) {
            $article[$cat['name']]=$this->article_model->getByCatId($cat['id']);
        }
        $data['articles_f']=$article;
//        var_dump($data);die;
        $this->load->view('/client/main',$data);
    }
}