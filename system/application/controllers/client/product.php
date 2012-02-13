<?php

class Product extends Controller {

    function Product() {
        parent::Controller();
        $this->load->model('admin/product_model','',true);
        $this->load->model('admin/parametrs_model','',true);
        $this->load->model('admin/category_art_model','',true);
        $this->load->model('admin/article_model','',true);
        $this->load->model('admin/seo_model','',true);

    }
    function index() {
        $id = $this->uri->segment(2, '');
//        var_dump($id);die;
        if (!empty($id)) {
            $data['id']=$id;
            $data['template']='client/product/index';
            $data['title']='Обручалочка';
            if(!$data['prod']=$this->product_model->getById($id))redirect('/collection/');

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
        } else {
            redirect('/collection/');
        }
    }

    function getProductImg() {
        if($this->input->post('key')==='img') {
            $id=$this->input->post('id');
            if($id) {
                $product=$this->product_model->getImgById($id);
                echo json_encode($product);
            } else {
                echo json_encode(false);
            }

        }else {
            echo json_encode(false);
        }
    }

    function getProductRock() {
        if($this->input->post('key')==='rock') {
            $id=$this->input->post('id');
            if($id) {
                $rock=$this->product_model->getRockById($id);
                echo json_encode($rock);
            } else {
                echo json_encode(false);
            }

        }else {
            echo json_encode(false);
        }
    }

}

?>
