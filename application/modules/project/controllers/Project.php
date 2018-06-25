<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends MY_Controller
{

	function index(){
		$data = array();

        // $this->load->view('template/template', $data);

        $this->config->set_item('title','ระบบบริหารโครงการ เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('index',$data);
        $this->publish();
	}

    public function project_main()
    {
        $data = array();

        // $this->load->view('template/template', $data);

        $this->config->set_item('title','ระบบบริหารโครงการ เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('project_main',$data);
        $this->publish();
    }


}
