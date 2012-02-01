<?php
class Article extends Controller
{
    function Article() {
        parent::Controller();
        $this->load->model('admin/article_model','',true);
    }
    function index() {
        $this->load->model('admin/seo_model','',true);
        $data['template']='client/article/index';
        $last_article=$this->article_model->getLast(1);
        $data['last_article']=$last_article[0];
        $data['theme_articles']=$this->article_model->getByCategory($last_article[0]['category_art'],3);
        $this->load->view('/client/main',$data);
    }
}