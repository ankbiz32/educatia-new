<?php
class DeleteModel extends CI_Model{


public function deleteInfo($id, $table)
{
    $this->db->where('id',$id);
    $del=$this->db->delete($table);
    if($del){
        return true;
    }
    else{
        return false;
    }
}

public function deleteInfoCol($col,$id, $table)
{
    $this->db->where($col,$id);
    $del=$this->db->delete($table);
    if($del){
        return true;
    }
    else{
        return false;
    }
}



}
