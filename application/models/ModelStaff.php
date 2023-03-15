<?php 
class ModelStaff extends CI_Model{
    public function tampil_data()
 {
     $result = $this->db->get('login');
     if($result->num_rows() > 0){
         return $result->result();
     }else {
         return false;
     }
 }
    public function hapus_data($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }
    public function edit($where,$table)
    {
      return $this->db->get_where($table,$where);
    }
    public function update($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
}
?>