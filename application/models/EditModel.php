<?php
class EditModel extends CI_Model{


    // Update Info
    public function updateInfo($data, $id, $table)
    {
        $this->db->where('id', $id);
        $wpflag = $this->db->update($table , $data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Info
    public function updateInfoByCol($data,$col, $id, $table)
    {
        $this->db->where($col, $id);
        $wpflag = $this->db->update($table , $data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

   // Update Website Profile
   public function updateWebProfile($data)
   {
       $this->db->where('id',$data['id']);
       $wpflag = $this->db->update('webprofile',$data);
       if($wpflag){
           return true;
       }
       else{
           return false;
       }
   }

    // Update Enquiry Status
    public function updateEnqStatus($id)
    {
        $data['status']="seen";
        $this->db->where('id',$id);
        $flag = $this->db->update('enquiries',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Website Profile
    public function updateAdminProfile($data, $id)
    {
        $this->db->where('user_id',$id);
        $flag = $this->db->update('users',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }
    

}
?>
     