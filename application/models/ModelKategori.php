<?php 
class ModelKategori extends CI_Model{
    public function tampil_data()
    {
      return $this->db->get('kategori');
    }
    public function tambah_kategori($data,$table)
    {
      $this->db->insert($table,$data);
    }

    public function edit_kategori($where,$table)
    {
      return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
    public function hapus_data($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }

    public function find($idkategori)
    {
      $result = $this->db->where('idkategori',$idkategori)
                          ->limit(1)
                          ->get('kategori');
      if ($result->num_rows()>0) {
        return $result->row();
      }else {
        return array();
      }
    }
    public function data_gamis()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Gamis'));
    }
    public function data_rok_plisket()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Rok Plisket'));
    }
    public function data_pasminah()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Pasminah'));
    }
    public function data_gamis_santai()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Gamis Santai'));
    }
    public function data_muslim_pria()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Muslim Pria'));
    }
    public function data_muslimah()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Muslimah'));
    }
    public function data_kerudung()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Kerudung Segi'));
    }
    public function data_ciput()
    {
        return $this->db->get_where("produk",array('namakategori' => 'Ciput'));
    }
}
?>