<?php
class Article extends Controller {
    var $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => "'",  'ы' => 'y',   'ъ' => "'",
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => "'",  'Ы' => 'Y',   'Ъ' => "'",
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    function Article() {
        parent::Controller();
        $this->load->model('admin/article_model', '', true);
        $this->load->model('admin/parametrs_model', '', true);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

    }

    function index() {
        $data['template'] = 'admin/article/index';
        $data['res'] = $this->router->fetch_class();
        $data['articles'] = $this->article_model->getAll();
        $data['categoryes_art'] = $this->parametrs_model->getAllByParametr('category_art');
        $this->load->view('admin/main', $data);
    }
    function create() {
        $data['template'] = 'admin/article/create';
        $data['res'] = $this->router->fetch_class();
        $data['categoryes_art'] = $this->parametrs_model->getAllByParametr('category_art');
        $this->form_validation->set_rules('name', 'Название', 'trim|required|min_length[1]|max_length[32]|xss_clean');
//        $this->form_validation->set_rules('cut', 'Краткое описание', 'trim|required|max_length[255]|xss_clean');
//        $this->form_validation->set_rules('description', 'Вся статья', 'trim|required|min_length[1]|xss_clean');
        $data['articles'] = $this->article_model->getAll();
        if ($this->input->post('action', '') == 'save') {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/main', $data);
            }else {
                if (!$this->upload->do_upload('image') || !$this->upload->do_upload('image2')) {

                    $data['error_upload'] = $this->upload->display_errors();
                    $this->load->view('admin/main', $data);
                }
                else {


                    $type = $this->upload->file_ext;
                    srand((double) microtime( ) * 1000000);
                    $uniq_id = uniqid(rand( ));
                    rename('./uploads/articles/' . $this->upload->file_name, './uploads/articles/' . $uniq_id . $type);

                    $st=set_value('name');
                $st = strtr($st, $this->converter);
                $slug = strtolower($st);
                $slug = preg_replace("/[^a-z0-9\s-]/", "", $slug);
                $slug = trim(preg_replace("/[\s-]+/", " ", $slug));
                $slug = trim(substr($slug, 0, 64));
                $slug = preg_replace("/\s/", "-", $slug);
                $result=array(
                        'name'=>set_value('name'),
                        'slug'=>$slug,
                        'cut'=>$this->input->post('cut'),
                        'description'=>$this->input->post('description'),
                        'category_art'=>set_value('category_art'),
                );
                $this->article_model-> save($result);
                redirect('/admin/article/');
                }



               
            }
        }else {
            $this->load->view('admin/main', $data);
        }
    }

    function edit() {
        $id = $this->uri->segment(4);

        if (!empty($id)) {
            $data['id']=$id;
            $data['template'] = 'admin/article/edit';
            $data['res'] = $this->router->fetch_class();
            $data['categoryes_art'] = $this->parametrs_model->getAllByParametr('category_art');
            $this->form_validation->set_rules('name', 'Название', 'trim|required|min_length[1]|max_length[32]|xss_clean');
//            $this->form_validation->set_rules('cut', 'Краткое описание', 'required|max_length[255]');
//            $this->form_validation->set_rules('description', 'Вся статья', 'required|min_length[1]');
            $article = $this->article_model->getById($id);
            $data['article'] =$article[0];
            if ($this->input->post('action') == 'save') {
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('admin/main', $data);
                }else {
                    $st=set_value('name');
                    $st = strtr($st, $this->converter);
                    $slug = strtolower($st);
                    $slug = preg_replace("/[^a-z0-9\s-]/", "", $slug);
                    $slug = trim(preg_replace("/[\s-]+/", " ", $slug));
                    $slug = trim(substr($slug, 0, 64));
                    $slug = preg_replace("/\s/", "-", $slug);


                    $result=array(
                            'name'=>set_value('name'),
                            'slug'=>$slug,
                            'cut'=>$this->input->post('cut'),
                            'description'=>$this->input->post('description'),
                            'category_art'=>set_value('category_art'),
                    );
                    $this->article_model->updateById($result,$id);
                    redirect('/admin/article/');
                }
            }else {
                $this->load->view('admin/main', $data);
            }
        }else {
            redirect('/admin/article/');
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