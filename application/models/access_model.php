<?php

class Access_model extends CI_Model {

    public function getPosts(){
        $sql = "SELECT t1.*, t2.name as cat_name, t3.name AS sub_cat_name 

                FROM `tb_posts` AS t1

                LEFT JOIN
                tb_category AS t2
                ON t1.cat_id=t2.id
                
                LEFT JOIN
                tb_sub_category AS t3
                ON t1.sub_cat_id=t3.id";

        $query = $this->db->query($sql)->result_array();
        return $query;
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
}

?>