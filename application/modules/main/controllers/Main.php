<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends MY_Controller
{

    public function dashborad()
    {
        $data = array();
        $this->config->set_item('title', 'หน้าหลัก - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('dashboard', $data);
        $this->publish();
    }

}
