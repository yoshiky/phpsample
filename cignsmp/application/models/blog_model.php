<?php

class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function all()
    {
        $query = $this->db->order_by('id')->get('blog');
        if($query)
        {
            return $query->result();
        }
        return FALSE;
    }

    function new_record()
    {
        $array = array(
            'title' => "",
        );
        return $array;
    }

    function create($post)
    {
        $this->db->insert('blog', $post);
        //挿入できたIDを返す
        return $this->db->insert_id();
    }

    function find($id)
    {
        $query = $this->db->get_where('blog', array('id' => $id));
        if($query)
        {
            return (array)$query->row();
        }
        return FALSE;
    }

    function update($post)
    {
        $this->db->update('blog', $post, array('id' => $post['id']));
    }

    function delete($post)
    {
        $this->db->delete('blog', array('id' => $post['id']));
    }


}
