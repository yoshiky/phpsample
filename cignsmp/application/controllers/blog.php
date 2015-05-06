<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Blog_model', 'blog');
        $this->output->enable_profiler(true);
    }

    function index()
    {
        $data = array();
        $data['records'] = $this->blog->all();
        $this->load->view('blog/index', $data);
    }
}
