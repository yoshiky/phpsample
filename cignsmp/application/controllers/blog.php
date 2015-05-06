<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Blog_model', 'blog');
        $this->output->enable_profiler(true);
    }

    function index()
    {
        $data = array();
        $data['records'] = $this->blog->all();
        $this->load->view('blog/index', $data);
    }

    function new_record()
    {
        $data = array();
        $data['record'] = $this->blog->new_record();
        $this->load->view('blog/new_record', $data);
    }

    function create()
    {
        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'タイトル', 'required|min_length[2]|max_length[20]|callback__limit_record');
        if($this->form_validation->run())
        {
            $post = $this->input->post();
            $post['created_at'] = $post['updated_at'] = $this->_get_created_at_date();

            $insert_id = $this->blog->create($post);
            $this->session->set_flashdata('notice', '作成しました。');
            //redirect('blog/show'.$insert_id);
            redirect('blog/index');
        }
        else
        {
            $data['validation_errors'] = validation_errors();
            $data['record'] = $this->blog->new_record();
            $this->load->view('blog/new_record', $data);
        }
    }

    private
    function _get_created_at_date()
    {
        $this->load->helper('date');
        return date('Y-m-d H:i:s', time());
    }

    function _limit_record()
    {
        if($this->db->count_all('blog') > 4)
        {
            $this->form_validation->set_message('_limit_record', 'レコードは5個までしか作成できません。');
            return FALSE;
        }
    }
}
