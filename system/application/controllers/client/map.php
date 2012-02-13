<?php
class Map extends Controller {
    function Map() {
        parent::Controller();
        $this->load->model('admin/article_model','',true);
        $this->load->model('admin/category_art_model','',true);
        $this->load->model('admin/seo_model','',true);
        $this->load->model('admin/map_model','',true);
        $this->load->helper('url');
    }



    function index() {
        $data['template']='client/map/index';

        $data['map']=$this->map_model->getMapText('map');





///////////////////////////////////////////////////////////////////////////////
        $articles_cats=$this->category_art_model->getAll();
        foreach ($articles_cats as $cat) {
            $article[$cat['name']]=$this->article_model->getByCatId($cat['id']);
        }
        $data['articles_f']=$article;
        $this->load->view('/client/main',$data);

    }
    function city() {
        $slug = $this->uri->segment(2);
        if (empty($slug)|| !$this->map_model->getCityMapBySlug($slug)) {
            redirect('/map/');

        }else {
            $data['template']='client/map/city';
            $data['city']=$this->map_model->getCityMapBySlug($slug);

        }



///////////////////////////////////////////////////////////////////////////////
        $articles_cats=$this->category_art_model->getAll();
        foreach ($articles_cats as $cat) {
            $article[$cat['name']]=$this->article_model->getByCatId($cat['id']);
        }
        $data['articles_f']=$article;
        $this->load->view('/client/main',$data);

    }


    function xml_map() {
        header('Content-type: text/xml');
//         <town name="Донецк" url="map/donetsk" x="450" y="200"/>
//         $arr['town']='kiyv';
        $arr=$this->map_model->getAllCities();
        echo '<?xml version="1.0" encoding="utf-8"?>';
        echo '<map>';
        foreach($arr as $val)
            echo    '<town name="'.$val->city_ru.'" url="map/'.$val->city.'" x="'.$val->x.'" y="'.$val->y.'"/>';
        echo '    </map>';
    }
}