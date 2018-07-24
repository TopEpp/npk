 <?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: sanitkeawtawan
 * Date: 6/15/2017 AD
 * Time: 18:39
 */

class Usm extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usm_model');
            // chkUserLogin();
    }

    function __deconstruct()
    {
        $this->db->close();
    }

    function index()
    {
        $data = array();
        $data['user'] = $this->Usm_model->orgAll();
        $this->config->set_item('title', 'ระบบบริหารจัดการผู้ใช้งาน เทศบาลตำบลหนองป่าครั่ง');

        $this->template->javascript->add('assets/modules/usm/js/script.js');
        $this->template->stylesheet->add('assets/modules/usm/css/style.css');
        $this->setView('index', $data);
        $this->publish();
    }

    function index_bk($process_action = 'view')
    {

        $data = array(); //Set Initial Variable to Views
        /*-- Initial Data for Check User Permission --*/
        $user_id = '';//get_session('user_id');
        $app_id = 31;
        $process_path = 'usm/index';
        /*--END Inizial Data for Check User Permission--*/

        $this->webinfo_model->LogSave($app_id, $process_action, 'Sign In', 'Success'); //Save Sign In Log
        $usrpm = $this->admin_model->chkOnce_usrmPermiss($app_id, $user_id); //Check User Permission

        if (@$usrpm['perm_status'] == 'No' || !isset($usrpm['app_id'])) {
            page500();
            $this->webinfo_model->LogSave($app_id, $process_action, 'Sign Out', 'Fail'); //Save Sign In Log
        } else {
            $app_name = $usrpm['app_name'];
            $data['usrpm'] = $usrpm;
            $data['user_id'] = $user_id;
            $this->load->library(
                'template',
                array(
                    'name' => 'admin_template1',
                    'setting' => array('data_output' => '')
                )
            ); // Set Template

            set_css_asset_head('style.css', 'usm');
            set_css_asset_head('../bootstrap/css/ionicons.min.css', 'usm');
            set_css_asset_head('style.css', 'usm');
            set_js_asset_footer('script.js', 'usm'); //Set JS Index.js
            $data['process_action'] = $process_action;
            $data['content_view'] = 'index';
            $tmp = $this->admin_model->getOnce_Application($usrpm['app_parent_id']); //Used for find root application
            $data['head_title'] = $tmp['app_name'];
            $data['title'] = $usrpm['app_name'];
            $this->template->load('index_page', $data, 'usm');
            $this->webinfo_model->LogSave($app_id, $process_action, 'Sign Out', 'Success'); //Save Sign Out Log
        }

    }

    function get_org_all()
    {
        $data = $this->Usm_model->orgAll();
        $this->json_publish($data);
    }

    function update_org()
    {
        $input = $this->input->post();
        if ($input['org_id'] > 0) {
            $data = $this->Usm_model->update_org($input);
        } else {
            $data = $this->Usm_model->create_org($input);
        }
        $this->json_publish($data);
    }
    function update_user()
    {
        $input = $this->input->post();
        $photo_file = @$input['user_photo_file'];
        if (@$photo_file) {
            $to = 'assets/uploads/images/usm/' . basename($photo_file);
            if (!is_file(FCPATH . $to)) {
                if (copy(FCPATH . $photo_file, FCPATH . $to)) {
                    $input['user_photo_file'] = $to;
                }
            }
        }

        $data = $this->Usm_model->update_user($input);

        $this->set_permission($input['user_id']);
        $this->json_publish($data);
    }

    function update_user_ajax()
    {
        $input = $this->input->post();

        $photo_file = @$input['user_photo_file'];
        if (@$photo_file) {
            $to = 'assets/uploads/images/usm/' . basename($photo_file);
            if (!is_file(FCPATH . $to)) {
                if (copy(FCPATH . $photo_file, FCPATH . $to)) {
                    $input['user_photo_file'] = $to;
                }
            }
        }

        $data = $this->Usm_model->update_user_ajax($input);
        echo $data;
        /*echo "<pre>";
        print_r($input);
        echo "</pre>";*/

    }

    function remove_org()
    {
        $input = $this->input->post();
        $data = $this->Usm_model->remove_org($input);
        $this->json_publish($data);
    }
    function move()
    {
        $input = $this->input->post();
        $data = $this->Usm_model->move($input);
        $this->json_publish($data);
    }
    function remove_user()
    {
        $input = $this->input->post();
        $data = $this->Usm_model->remove_user($input);
        $this->json_publish($data);
    }
    function prename()
    {
        $input = $this->input->get('q');
        $data = $this->Usm_model->prename(trim($input));
        $this->json_publish($data);
    }
    function template()
    {
        $data = $this->Usm_model->template();
        $this->json_publish($data);
    }
    function permission()
    {
        $user = $this->input->get('user_id');
        $data = $this->Usm_model->user_permission($user);
        $this->json_publish($data);
    }
    function uploadfile()
    {
        $uploaddir = FCPATH;
        $arrexp = explode('.', basename($_FILES['file']['name']));
        $name = date("YmdHis") . "-" . rand(100000, 999999);
        $uploadpath = 'assets/uploads/temp/' . $name . "." . array_pop($arrexp);
        $uploadfile = $uploaddir . $uploadpath;
        $result = $this->_error('อัพโหลไฟล์ไม่สำเร็จ');
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            $result = $this->_success('อัพโหลไฟล์เรียบร้อย', array('file' => $uploadpath));
        }
        $this->json_publish($result);
    }
    function getFile()
    {
        $files = $this->input->post();
        if (is_array($files['file'])) {
            foreach ($files['files'] as $file) {

                $obj['name'] = basename($file); //get the filename in array
                $obj['size'] = filesize(FCPATH . $file); //get the flesize in array
                $obj['file'] = $file; //get the flesize in array
                $obj['path'] = base_url($file); //get the flesize in array
                $this->json_publish($obj);
            }
        } else {
            //foreach($files['files'] as $file){
            $file = $files['file'];
            $obj['name'] = basename($file); //get the filename in array
            $obj['size'] = filesize(FCPATH . $file); //get the flesize in array
            $obj['file'] = $file; //get the flesize in array
            $obj['path'] = base_url($file); //get the flesize in array
            $this->json_publish($obj);
            //}
        }
    }

    function checklogin()
    {
        $input = $this->input->post();
        $query = $this->Usm_model->checklogin($input);
        if (empty($query)) {
            redirect('login');
        } else {
            $query_user_per = $this->Usm_model->get_permission($query[0]['user_id']);
            $_SESSION['user_id'] = $query[0]['user_id'];
            $_SESSION['user_name'] = $query[0]['user_firstname'] . ' ' . $query[0]['user_lastname'];

            $this->set_permission($query[0]['user_id']);
            // print_r($_SESSION['user_permission']);
            redirect('main/dashborad');
        }
    }

    function logout()
    {
        session_destroy();
        redirect('login');
    }

    function set_permission($id)
    {
        $query_user_per = $this->Usm_model->get_permission($id);
        unset($_SESSION['user_permission']);
        $_SESSION['user_permission'] = $query_user_per;

    }

    function getUserInfo(){
      $user_id = $_SESSION['user_id'];
      $data = $this->Usm_model->userById($user_id);
      $this->json_publish($data);
    }
}
