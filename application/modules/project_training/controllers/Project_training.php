<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_training extends MY_Controller
{

    public function project()
    {
        $data = array();
        $this->config->set_item('title', 'ระบบบริหารโครงการ - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('project', $data);
        $this->publish();
    }


}
