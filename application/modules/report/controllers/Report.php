<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends MY_Controller
{

    public function report_rec()
    {
        $data = array();
        $this->config->set_item('title', 'รายงานรายรับ - เทศบาลตำบลหนองป่าครั่ง');


        $this->template->javascript->add('assets/modules/report/js/chart.js');
        $this->setView('report_rec', $data);
        $this->publish();
    }

    public function report_pay()
    {
        $data = array();
        $this->config->set_item('title', 'รายงานบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');

        $this->template->javascript->add('assets/modules/report/js/chart_pay.js');
        $this->setView('report_pay', $data);
        $this->publish();
    }

    public function report_debt()
    {
        $data = array();
        $this->config->set_item('title', 'รายงานลูกหนี้ - เทศบาลตำบลหนองป่าครั่ง');

        $this->template->javascript->add('assets/modules/report/js/chart_debt.js');
        $this->setView('report_debt', $data);
        $this->publish();
    }


}
