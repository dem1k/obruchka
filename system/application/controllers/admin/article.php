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
                        'image'=>set_value('image'),
                );
                $this->article_model-> save($result);
                redirect('/admin/article/');
            }




//            }
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
            $data['article'] =$this->article_model->getById($id);
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
                            'image'=>set_value('image'),
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
    function upload() {
        /**
         * upload.php
         *
         * Copyright 2009, Moxiecode Systems AB
         * Released under GPL License.
         *
         * License: http://www.plupload.com/license
         * Contributing: http://www.plupload.com/contributing
         */

// HTTP headers for no cache etc
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

// Settings
//$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
        $targetDir = 'uploads/articles';

//$cleanupTargetDir = false; // Remove old files
//$maxFileAge = 60 * 60; // Temp file age in seconds

// 5 minutes execution time
        @set_time_limit(5 * 60);

// Uncomment this one to fake upload time
// usleep(5000);

// Get parameters
        $chunk = isset($_REQUEST["chunk"]) ? $_REQUEST["chunk"] : 0;
        $chunks = isset($_REQUEST["chunks"]) ? $_REQUEST["chunks"] : 0;
        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

// Clean the fileName for security reasons
        $fileName = preg_replace('/[^\w\._]+/', '', $fileName);

// Make sure the fileName is unique but only if chunking is disabled
        if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
            $ext = strrpos($fileName, '.');
            $fileName_a = substr($fileName, 0, $ext);
            $fileName_b = substr($fileName, $ext);

            $count = 1;
            while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
                $count++;

            $fileName = $fileName_a . '_' . $count . $fileName_b;
        }

// Create target dir
        if (!file_exists($targetDir))
            @mkdir($targetDir);

// Remove old temp files
        /* this doesn't really work by now

if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
	while (($file = readdir($dir)) !== false) {
		$filePath = $targetDir . DIRECTORY_SEPARATOR . $file;

		// Remove temp files if they are older than the max age
		if (preg_match('/\\.tmp$/', $file) && (filemtime($filePath) < time() - $maxFileAge))
			@unlink($filePath);
	}

	closedir($dir);
} else
	die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
        */

// Look for the content type header
        if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
            $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

        if (isset($_SERVER["CONTENT_TYPE"]))
            $contentType = $_SERVER["CONTENT_TYPE"];

// Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
        if (strpos($contentType, "multipart") !== false) {
            if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                // Open temp file
                $out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
                if ($out) {
                    // Read binary input stream and append it to temp file
                    $in = fopen($_FILES['file']['tmp_name'], "rb");

                    if ($in) {
                        while ($buff = fread($in, 4096))
                            fwrite($out, $buff);
                    } else
                        var_dump($in) or  die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                    fclose($in);
                    fclose($out);
                    @unlink($_FILES['file']['tmp_name']);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
        } else {
            // Open temp file
            $out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = fopen("php://input", "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                fclose($in);
                fclose($out);
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

// Return JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');

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