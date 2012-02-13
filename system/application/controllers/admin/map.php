<?php
class Map extends Controller {
    function Map() {
        parent::Controller();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('admin/map_model','',true);

    }

    function index() {
        $data['template'] = 'admin/map/index';
        $data['res'] = $this->router->fetch_class();
        $data['map'] = $this->map_model->getAllCities();
        $this->load->view('admin/main', $data);
    }
    function create() {
        $data['template'] = 'admin/map/create';
        $data['res'] = $this->router->fetch_class();
        $this->form_validation->set_rules('city', 'Путь', 'trim|required|max_length[32]|xss_clean');
        $this->form_validation->set_rules('city_ru', 'Город', 'trim|required|xss_clean');
        $this->form_validation->set_rules('addr', 'Адресная строка', 'trim|required|xss_clean');
        $this->form_validation->set_rules('addr2', 'Улица, номер дома', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'Описание', 'trim|required|xss_clean');
        $this->form_validation->set_rules('x', 'Координата Х', 'trim|required|xss_clean');
        $this->form_validation->set_rules('y', 'Координата Y', 'trim|required|xss_clean');
        if ($this->input->post('action', '') == 'save') {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/main', $data);
            }else {

                $result=array(
                        'city'=>set_value('city'),
                        'city_ru'=>set_value('city_ru'),
                        'addr'=>set_value('addr'),
                        'addr2'=>set_value('addr2'),
                        'description'=>set_value('description'),
                        'x'=>set_value('x'),
                        'y'=>set_value('y'),
                );
                $this->map_model->save($result);
                redirect('/admin/map/');
            }
        }else {
            $this->load->view('admin/main', $data);
        }
    }

    function edit() {
        $id = $this->uri->segment(4);

        if (!empty($id)) {
            $data['id']=$id;
            $data['template'] = 'admin/map/edit';
            $data['map']=$this->map_model->getById($id);
//            var_dump($data);die;
            $data['res'] = $this->router->fetch_class();
            $this->form_validation->set_rules('city', 'Путь', 'trim|required|max_length[32]|xss_clean');
            $this->form_validation->set_rules('city_ru', 'Город', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addr', 'Адресная строка', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addr2', 'Улица, номер дома', 'trim|required|xss_clean');
            $this->form_validation->set_rules('description', 'Описание', 'trim|required|xss_clean');
            $this->form_validation->set_rules('x', 'Координата Х', 'trim|required|xss_clean');
            $this->form_validation->set_rules('y', 'Координата Y', 'trim|required|xss_clean');
            if ($this->input->post('action', '') == 'save') {
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/main', $data);
                }else {


                    $result=array(
                            'city'=>set_value('city'),
                            'city_ru'=>set_value('city_ru'),
                            'addr'=>set_value('addr'),
                            'addr2'=>set_value('addr2'),
                            'description'=>set_value('description'),
                            'x'=>set_value('x'),
                            'y'=>set_value('y'),
                    );
                    $this->map_model->updateById($result,$id);
                    redirect('/admin/map/');
                }
            }else {
                $this->load->view('admin/main', $data);
            }
        }else {
            redirect('/admin/map/');
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