<?php

class Product extends Controller {

    function Product() {
        parent::Controller();
        $this->load->model('admin/product_model','',true);
    }

    function index() {

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
