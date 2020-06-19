<?php
class GetModel extends CI_Model{

    // Fetch info
    public function getInfo($table)
    {
        return $this->db->get($table)->result();
    }

    // Fetch info by id
    public function getInfoById($id, $table)
    {
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    // Fetch info by id
    public function getInfoByColId($id, $table, $col)
    {
        $this->db->where($col, $id);
        return $this->db->get($table)->row();
    }

    // Fetch info by order
    public function getInfoByOrder($table, $col)
    {
        return $this->db->order_by($col, 'desc')
                        ->get($table)
                        ->result();
    }

    // Fetch info
    public function getInfoLim($table,$col, $lim)
    {
        return $this->db->order_by($col, 'desc')
                        ->limit($lim)
                        ->get($table)
                        ->result();
    }
    
    public function getCourses()
    {
        $this->db->select('*')
                ->from('courses c')
                ->order_by('id','desc')
                ->join('categories ca', 'c.cat_id = ca.cat_id', 'LEFT');
        return $this->db->get()->result();
    }

    public function getCoursesLim()
    {
        $this->db->select('*')
                ->from('courses c')
                ->order_by('id','desc')
                ->limit(6)
                ->join('categories ca', 'c.cat_id = ca.cat_id', 'LEFT');
        return $this->db->get()->result();
    }
    
    // Fetch Enquiries
    public function getEnquiries()
    {
        return $this->db->get('enquiries')->result();
    }

    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }
    
    // Fetch Admin Profile
    public function getAdminProfile()
    {
        return $this->db->get('users')->row();
    }

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    

}
?>