<?php

class Collection extends Controller {

    function Collection() {
        parent::Controller();
        $this->load->model('admin/collection_model', '', true);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    function index() {
        $data['template'] = 'admin/collection/main';
        $data['res'] = $this->router->fetch_class();
        $data['collections'] = $this->collection_model->getAll();
        $this->load->view('admin/main', $data);
    }

    function create() {
        $data['template'] = 'admin/collection/create';
        $data['res'] = $this->router->fetch_class().'/create';

        $this->form_validation->set_rules('name', 'Название', 'trim|required|min_length[1]|max_length[32]|xss_clean');
        if ($this->input->post('action', '') == 'save') {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/main', $data);
            }else {
                $collection=array(
                        'name'=>set_value('name'),
                );
                $this->collection_model->save($collection);
                redirect('/admin/collection');
            }
        }else {
            $this->load->view('admin/main', $data);
        }
    }

    function edit() {
        if(!$id=$this->uri->segment(4)) {
            redirect('/admin/collection');
        }else {
            $name=$this->collection_model->getById($id);
            $data['template'] = 'admin/collection/edit';
            $data['res'] = $this->router->fetch_class();
            $data['name'] = $name[0]["name"];
            $data['id'] = $id;
            $this->form_validation->set_rules('name', 'Название', 'trim|required|min_length[1]|max_length[32]|xss_clean');


            if ($this->input->post('action', '') == 'save') {
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/main', $data);
                }else {
                    $collection=array(
                            'name'=>set_value('name'),
                    );
                    $this->collection_model->updateById($collection,$id);
                    redirect('/admin/collection');
                }
            }else {
                $this->load->view('admin/main', $data);
            }
        }
        
    }

    function view() {
        $data['res'] = $this->router->fetch_class();
        if(!$id=$this->uri->segment(4))
            redirect('/admin/collection');
        else {
            $data['template'] = 'admin/collection/view';
            $data['products']=$this->collection_model->getProductsByCollectionId($id);
        }
        $this->load->view('admin/main', $data);
    }

    
    function delete() {
        $id= $this->uri->segment(4);
        if(!$id) {
            show_404();
        }
        else {
            $data['template'] = 'admin/catalog/edit_product';
            $data['res'] = $this->router->fetch_class();
            $this->collection_model->deleteById($id);
            redirect('/admin/collection/');

        }

    }




    function _remap($method) {
        $this->load->library('authorization');
        $params = null;
        if ($this->uri->segment(5)) {
            $params = $this->uri->segment(5);
        }

        if (!$this->authorization->is_logged_in()) {
            redirect("auth/login");
        } else {
            check_perms();
            $this->$method($params);
        }
    }
}

?>
