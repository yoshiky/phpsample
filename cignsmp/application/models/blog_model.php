<?php

class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function all()
    {
        //$query = $this->db->order_by('created_at', 'desc')->get('blog');
        $query = $this->db->get('blog');
        if($query)
        {
            return $query->result();
        }
        return FALSE;
    }

    function insert($post)
    {
        $this->db->insert('blog', $post);
        //挿入できたIDを返す
        return $this->db->insert_id();
    }



}
