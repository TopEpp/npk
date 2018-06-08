<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expenditure extends MY_Controller
{

    public function expenditure_prj()
    {
        // $data['title'] = "ระบบบัญชีรายจ่าย";
        // $data['subtitle'] = "เทศบาลตำบลหนองป่าครั่ง";
        // $data['view_isi'] = "expenditure_prj";

        // $this->load->view('template/template', $data);
        $data = array();
        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('expenditure_prj', $data);
        $this->publish();
    }

}
