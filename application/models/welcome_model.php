<?php

class Welcome_model extends CI_Model {
    //put your code here
    
    public function login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('email', $data['email']);
        $this->db->where('user_password', $data['password']);
        $this->db->where('status', 1);
        $query_result=$this->db->get();
        $result=$query_result->row();

        return $result;
    }

    public function selectTableData($fields, $table, $where)
    {
        $sql = "Select $fields From $table WHERE 1 $where";

        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    public function insertingData($tbl, $data)
    {
        $this->db->INSERT($tbl, $data);
        return $this->db->insert_id();
    }

    public function get_current_page_records($limit, $start, $cat_id, $sub_cat_id)
    {
        $this->db->limit($limit, $start);
        $this->db->where('status', 1);

        if($cat_id > 0){
            $this->db->where('cat_id', $cat_id);
        }

        if($sub_cat_id > 0){
            $this->db->where('sub_cat_id', $sub_cat_id);
        }

        $this->db->order_by("id", "desc");
        $query = $this->db->get("tb_posts");

        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_total($cat_id, $sub_cat_id)
    {
        $this->db->from('tb_posts');
        $this->db->where('status', 1);

        if($cat_id > 0){
            $this->db->where('cat_id', $cat_id);
        }

        if($sub_cat_id > 0){
            $this->db->where('sub_cat_id', $sub_cat_id);
        }

        return $this->db->count_all_results();
    }
}

?>