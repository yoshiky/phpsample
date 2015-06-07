<?php

class AjaxSample extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        //$this->output->enable_profiler(true);
    }

    public function index()
    {
        echo 'here is AjaxSample#index';
        $this->load->view('ajax_sample/index');
    }

    public function fee()
    {
        $this->load->view('ajax_sample/fee');
    }

    public function setfee()
    {
        $post = $this->input->post();
        $arr  = array();
        $i    = 0;
        foreach ($post as $name => $value) {
            $i++;
            // 'name'の次の数字がidとなるので抽出する
            $id = str_replace('name','' ,$name);
            $arr[$id] = $value;
        }
        var_dump($arr);
    }
}
